<?php

namespace App\Http\Controllers\API;

use DB;
use Log;
use APIHelpers;
use App\Models\Club;
use App\Models\ClubSet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubSetController extends Controller
{
    protected $clubSet;
    protected $club;
    protected $api;

	function __construct(ClubSet $clubSet, Club $club, APIHelpers $api)
    {
        $this->middleware('require.api-key');
        $this->clubSet = $clubSet;
        $this->club = $club;
        $this->api = $api;
    }

    public function getClubSets(Request $request){
        Log::info('called=ClubSetController.getClubSets');
        try {
			$clubsets = $this->clubSet->orderBy('created_at', 'desc')->get()->toArray();
            $data = $this->api->formatList($clubsets, array('id', 'club', 'user_id', 'created_at', 'updated_at'));
            return $this->api->success($data);
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }

    public function getClubs(Request $request){

        Log::info('called=ClubSetController.getClubs');
        $error_response = $this->api->validator(
                                    $request->all(), 
                                    [
                                        'token' => 'required',
                                        'clubset_id' => 'required',
                                    ]);
        if ($error_response) return $error_response;
        try {
            $clubSet = $this->clubSet->findOrFail($request->clubset_id);
            if($request->token == $clubSet->user->token){
                $clubs = DB::select("SELECT * FROM clubs WHERE _bit | ".$clubSet->club." = ".$clubSet->club);
                if(count($clubs) > 0){
                    foreach($clubs as $club){
                        $clubarray[] = array('id'=>$club->id, 'name'=>$club->name, 'type'=>$club->_type);
                    }
                    $data = $clubarray;
                }
                else{
                   $data = "No clubs found for this clubset!"; 
                } 
                return $this->api->success($data);
            }
            else{
                return $this->api->error("This clubset does not belong to this user!");
            }
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }
}
