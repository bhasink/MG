<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_token(){

        $url = "https://prod-25.centralindia.logic.azure.com:443/workflows/bcf89a913916486e8b88dc6f1a75d4cd/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=-_ug1znRc5rrDstoe16K9mdvX2UuQefNRySiUG-Miek";

        $client = new Client();
        $params['headers'] = [
            "Cache-Control: no-cache",
            'Content-Type' => 'application/json'
        ];

        $request = $client->post($url,$params,['request_type' => 'access_token']);
        $token_data = json_decode($request->getBody()->read(1024*100000));

        return $token_data;

    }


    
}
