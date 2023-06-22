<?php

namespace App\Http\Controllers\API;

use Log;
use APIHelpers;
use App\Models\Hole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HoleController extends Controller
{
    protected $hole;
    protected $api;

	function __construct(Hole $hole, APIHelpers $api)
    {
        $this->middleware('require.api-key');
        $this->hole = $hole;
        $this->api = $api;
    }

    public function getHoles(Request $request){
    	Log::info('called=HoleController.getHoles');
        $response = $this->api->validator($request->all(), ['round_id' => 'required|numeric']);
        if ($response) return $response;
        try {
    		$holes = $this->hole->where('round_id', $request->round_id)->get()->toArray();
            return $this->api->success($holes);
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }
}
