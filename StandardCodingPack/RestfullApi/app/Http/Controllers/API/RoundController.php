<?php

namespace App\Http\Controllers\API;

use Log;
use DB;
use Storage;
use APIHelpers;
use App\Map\Kml;
use App\Map\Hole;
use App\Map\Shot;
use App\Models\Round;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoundController extends Controller
{
    protected $round;
    protected $api;

	function __construct(Round $round, APIHelpers $api)
    {
        $this->middleware('require.api-key');
        $this->round = $round;
        $this->api = $api;
    }

    
    private function saveKML($userHash='', $round){
        $kml = new Kml($round->field_name, $round->game_date);
        if(count($round->holes) > 0){
            foreach($round->holes as $hole){
                $shots = \App\Models\Shot::where('round_id', $hole->round_id)->where('hole', $hole->hole)->get();
                if(count($shots) > 0){
                    $maxShot = $shots->first();
                    foreach ($shots as $shot){
                        if($shot->stroke > $maxShot->stroke){
                            $maxShot = $shot;
                        } 
                    }
                    $setHole = new Hole($hole->hole, $maxShot->longtitude, $maxShot->latitude);
                    $kml->setHole($setHole);
                    
                    $shot = $shots->first();
                    foreach($shots as $shotNxt){
                        if($shot->id != $shotNxt->id){
                            $setShot = new Shot($shot->longtitude , $shot->latitude , $shotNxt->longtitude, $shotNxt->latitude , $shot->stroke, $shot->created_at, $shot->club->name, $shot->shot_type, is_null($shot->memo) ? 'empty' : $shot->memo, $shot->putt_distance, $shot->putt_num);
                            $kml->setShot($setShot);
                        }
                        $shot = $shotNxt;
                    }
                    $setShot = new Shot($shot->longtitude , $shot->latitude, $shots->last()->longtitude, $shots->last()->latitude, $shot->stroke, $shot->created_at, $shot->club->name, $shot->shot_type, is_null($shot->memo) ? 'empty' : $shot->memo, $shot->putt_distance, $shot->putt_num);
                    $kml->setShot($setShot);
                    $kml->build();                
                }
            }
        }
        $kml_str = $kml->getView();
        $kml_name = $round->field_name.'/'.date("Y-m-d", strtotime($round->game_date)).'/'.$userHash.'-'.$round->id.'.kml';
        Storage::disk('s3')->getDriver()->put('kml/'.$kml_name,
            $kml_str,
               [
                   'visibility' => 'public',
                   'ContentType' => 'application/vnd.google-earth.kml+xml'
               ]
        );
        return Storage::disk('s3')->url('kml/'.$kml_name);
    }


    public function addRound(Request $request){
        Log::info('called=RoundController.addRound');
        $error_response = $this->api->validator(
                                    $request->all(), 
                                    [
                                        'token' => 'required|string', 
                                        'state' => 'required|numeric', 
                                        'game_date' => 'required|date', 
                                        'field_name' => 'required|string', 
                                        'course_name' => 'required|string',   
                                        'clubset_id' => 'required|numeric|min:1'
                                    ]);
        if ($error_response) return $error_response;
        try {
            $input = $request->all();
            $user = DB::table('users')->where('token', $request->token)->first();
            $input['user_id'] = $user->id;
            $this->round->create($input);
            $round = $this->round->orderBy('created_at', 'desc')->first();
            if($round)
                return $this->api->success($round);
            else
                 return $this->api->error("Error when fetching round data. Round has been added!");
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }

    public function roundDone(Request $request){
        Log::info('called=RoundController.roundDone');
        $error_response = $this->api->validator(
                                    $request->all(), 
                                    [
                                        'token' => 'required|string', 
                                        'id' => 'required|numeric',
                                    ]);
        if ($error_response) return $error_response;
        try {
            $round = $this->round->findOrFail($request->id);
            $round->state = 3;
            $round->kml_url = $this->saveKML($request->token, $round);
            $round->save();
            return $this->api->success($round);
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }
}