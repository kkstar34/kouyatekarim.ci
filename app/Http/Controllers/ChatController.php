<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require_once $path = base_path('vendor/pear/http_request2/HTTP/Request2.php');

class ChatController extends Controller
{
    public function index(){
        return view('chat');
    }

    public function transaction(Request $request){
            $request = new \Http_Request2('https://proxy.momoapi.mtn.com/collection/token/');
            $url = $request->getUrl();

            $headers = array(
                // Request headers
                'Authorization' => '',
                'Ocp-Apim-Subscription-Key' => '{subscription key}',
            );

            $request->setHeader($headers);

            $parameters = array(
                // Request parameters
            );

            $url->setQueryVariables($parameters);

            $request->setMethod(HTTP_Request2::METHOD_POST);

            // Request body
            $request->setBody("{body}");

            try
            {
                $response = $request->send();
                echo $response->getBody();
            }
            catch (HttpException $ex)
            {
                echo $ex;
            }

    }
}
