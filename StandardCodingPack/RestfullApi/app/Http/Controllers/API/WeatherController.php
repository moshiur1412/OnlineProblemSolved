<?php

namespace App\Http\Controllers\API;

use Log;
use APIHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeatherController extends Controller
{
    protected $api;
    protected $url;
    protected $key;

	function __construct(APIHelpers $api)
    {
        $this->middleware('require.api-key');
        $this->api = $api;
        $this->url = config('weather.weather-api-url');
        $this->key = config('weather.weather-api-key');
    }

    public function getWeather(Request $request){
        Log::info('called=WeatherController.getWeather');
        $error_response = $this->api->validator(
                                    $request->all(), 
                                    [ 
                                        'city' => 'required|string', 
                                    ]);
        if ($error_response) return $error_response;
        try {
    		$url =  html_entity_decode($this->url."?q=".ucfirst($request->city)."&appid=".$this->key);
    		$apiWeather = file_get_contents($url);
			$weather  = json_decode($apiWeather);
            $weather->weatherJson = $apiWeather;
            return $this->api->success($weather);
        }
        catch(\Exception $e){
            return $this->api->error($e->getMessage(), $e->getCode());
        }
    }
}
