<?php

namespace App\Http\Controllers\API;

use Log;
use APIHelpers;
use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    protected $club;
    protected $api;

	function __construct(Club $club, APIHelpers $api)
    {
        $this->middleware('require.api-key');
        $this->club = $club;
        $this->api = $api;
    }

    public function getClubs(Request $request){
        Log::info('called=ClubController.getClubs');
        try {
			$clubs = $this->club->orderBy('created_at', 'desc')->get()->toArray();
            $data = $this->api->formatList($clubs, array('id', 'name', '_bit', '_type', 'created_at', 'updated_at'));
            return $this->api->success($data);
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }
}
