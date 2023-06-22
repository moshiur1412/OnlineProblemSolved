<?php

namespace App\Http\Controllers\API;

use DB;
use Log;
use APIHelpers;
use App\Trajectory;
use App\Models\Shot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShotController extends Controller
{
    protected $shot;
    protected $api;

	function __construct(Shot $shot, APIHelpers $api)
    {
        $this->middleware('require.api-key');
        $this->shot = $shot;
        $this->api = $api;
    }

    private function saveHole($shot, $stroke = 0){        
        if($shot->putt_distance != 0 && $shot->putt_num != 0){
            $stroke = $shot->stroke;
        }
        $hole = DB::table('holes')->where('hole', $shot->hole)->where('round_id', $shot->round_id)->first();
        if(count($hole) > 0){
            DB::table('holes')->where('id', $hole->id)->update(['score' => $stroke]);
        }   
        else{
            DB::table('holes')->insert(['hole' => $shot->hole, 'round_id' => $shot->round_id, 'score' => $stroke]);
        }
    }

    public function addShot(Request $request){
        Log::info('called=ShotController.addShot');
        $error_response = $this->api->validator(
                                    $request->all(), 
                                    [ 
                                        'stroke' => 'required|numeric', 
                                        'memo' => 'string|nullable', 
                                        'latitude' => 'numeric|nullable', 
                                        'longtitude' => 'numeric|nullable', 
                                        'altitude' => 'numeric|nullable', 
                                        'yardage' => 'numeric|nullable', 
                                        'putt_distance' => 'numeric|nullable', 
                                        'putt_num' => 'numeric|nullable', 
                                        'shot_type' => 'numeric|nullable', 
                                        'round_id' => 'required|numeric|min:1', 
                                        'club_id' => 'required|numeric|min:1', 
                                        'remaining_distance' => 'numeric|nullable', 
                                        'hole' => 'required|numeric|min:1'
                                    ]);
        if ($error_response) return $error_response;
        try {
            $existing_shots = $this->shot->where('hole', $request->hole)->where('round_id', $request->round_id)->where('stroke', $request->stroke)->first();
            if(count($existing_shots) == 0){
                $input = $request->all();
                $id = $this->shot->create($input)->id;
                $shot = $this->shot->where('id', $id)->first();
                $this->saveHole($shot);
                return $this->api->success($shot);                
            }
            else{
                $shot = $this->shot->orderBy('created_at', 'desc')->first();;
                return $this->api->success($shot);  
            }
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }
}
