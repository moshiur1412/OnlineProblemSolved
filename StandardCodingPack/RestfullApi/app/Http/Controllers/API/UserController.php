<?php
namespace App\Http\Controllers\API;

use DB;
use Log;
use APIHelpers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{    
    protected $user;
    protected $api;

	function __construct(User $user, APIHelpers $api)
    {
        $this->middleware('require.api-key');
        $this->user = $user;
        $this->api = $api;
    }

    public function registerUser(Request $request){
        Log::info('called=UserController.registerUser');
        $error_response = $this->api->validator(
                                    $request->all(), 
                                    [
                                        'token' => 'required|string', 
                                        'email' => 'required|string|email'
                                    ]);
        if ($error_response) return $error_response;
        try {
                // Check if user already exists
            $getUser = $this->user->where('token', $request->token)->orWhere('email', $request->email)->first();
            if($getUser)
                return $this->api->success(array( "message:" => "User found!", "token" => $getUser->token, "email" => $getUser->email));

                // Register new user
            $input = $request->all();
            $user_id = $this->user->create($input)->id;
            $club_bit_total = DB::table('clubs')->sum('_bit');
            DB::table('clubsets')->insert(['club' => $club_bit_total, 'name' => 'default', 'user_id' => $user_id, "created_at" => Carbon::now(), "updated_at" => Carbon::now()]);
            return $this->api->success(array( "message:" => "Registration process complete!", "token" => $request->token, "email" => $request->email));
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }



    public function getRoundLink($token){
        Log::info('called=UserController.getRound');
        try {
                // Check if user exists
            Log::info("token:=============================================================== ".$token);
            $user = $this->user->where('token', $token)->first();
            if($user){
                return $this->api->success($token."/rounds");
            }
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }


    }

    public function getUserClubSets(Request $request){
        Log::info('called=UserController.getUserClubSets');
        $error_response = $this->api->validator($request->all(), ['token' => 'required|string']);
        if ($error_response) return $error_response;
        try {
            $data = [];
            $getUser = $this->user->where('token', $request->token)->firstOrFail();
            foreach ($getUser->clubsets as $clubset) {
                $info['id'] = $clubset->id;
                $info['name'] = $clubset->name;
                $info['user_id'] = $getUser->id;
                $clubs = DB::select("SELECT * FROM clubs WHERE _bit | ".$clubset->club." = ".$clubset->club);
                if(count($clubs) > 0){
                    foreach($clubs as $club){
                        $clubarray[] = array('id'=>$club->id, 'name'=>$club->name, 'type'=>$club->_type);
                    }
                    $info['clubs'] = $clubarray;
                    unset($clubarray);
                }
                else{
                   $info['clubs'] = "No clubs found for this clubset"; 
                } 
                $data[] = $info;
            }
            return $this->api->success($data);
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }

    public function getFieldNames(Request $request){
        Log::info('called=UserController.getFieldNames');
        $error_response = $this->api->validator($request->all(), ['token' => 'required|string']);
        if ($error_response) return $error_response;
        try {
            $getUser = $this->user->where('token', $request->token)->firstOrFail();
            $data['user_id'] = $getUser->id;
            if(count($getUser->rounds) > 0){
                $fields = array();
                foreach($getUser->rounds as $round){
                    if (!in_array($round->field_name, $fields)) {
                        $fields[] = $round->field_name;
                    }
                }
                $data['fields'] = $fields;
            }
            else{
               $data['fields'] = "No fields found for this user"; 
            } 
            return $this->api->success($data);
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }

    /*public function getLastRound(Request $request){
        Log::info('called=UserController.getLastRound');
        $error_response = $this->api->validator($request->all(), ['token' => 'required|string']);
        if ($error_response) return $error_response;
        try {
            $getUser = $this->user->where('token', $request->token)->firstOrFail();
            return $this->api->success($getUser->rounds->last());
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage());
        }
    }*/
}
