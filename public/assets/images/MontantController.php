<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\User;
use App\Queue;
use Illuminate\Http\Request;
use App\Http\Resources\Transactions as TransactionResource;
use App\Image;
use App\ImageUser;
use Illuminate\Support\Facades\Auth;
use App\Mail\Notification;
use Illuminate\Support\Facades\Mail;
use  App\SendNotification;
use App\Financial;
require_once $path = base_path('vendor/pear/http_request2/HTTP/Request2.php');

class MontantController extends Controller
{
    public function index(Request $request){

    
        // This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
        
        $token = Cache::get('token');
        if(!empty($token)){

        
        $queues =Queue::get()->all();
        foreach ($queues as $queue){
        $apiuser = $queue->api_user;
        $token_new =$queue->token;
        $projet_id = $queue->projet_id;
        $numero =  $queue->numero;
        $user_email = $queue->user_email;
        $user = User::where('email', $user_email)->get()->first();
        logger($apiuser);
        logger($token);
        $request = new \Http_Request2('https://ericssonbasicapi1.azure-api.net/collection/v1_0/requesttopay/'.$apiuser);
        $url = $request->getUrl();
        
        $headers = array(
            // Request headers
            'Authorization' => 'Bearer '.$token,
            'X-Target-Environment' => 'mtnivorycoast',
            'Ocp-Apim-Subscription-Key' => 'c6b742bd891b4f39ad0ace14e1a8ba77',
        );

        $request->setHeader($headers);

        $parameters = array(
            // Request parameters
        );

        $url->setQueryVariables($parameters);

        $request->setMethod(\HTTP_Request2::METHOD_GET);

        // Request body
        //$request->setBody("{body}");

        try
        {
            $response = $request->send();
            
            $response = json_decode($response->getBody());
            
            
            if(isset($apiuser)){
            //logger($response->status);
            //logger($apiuser);
            //logger($response->financialTransactionId);
                $financial_id = Financial::where('transaction_id', $response->externalId)->get()->first();
                //$id = $response->financialTransactionId;
                if(isset($financial_id)){
                    //logger('id deja utilisé');
                }else{
                    if($response->status != "PENDING"){
                        if($response->status == "SUCCESSFUL"){
                    
                        Financial::create([
                            'transaction_id' => $response->externalId,
                        ]);
                        $projet = Image::where('id', $projet_id)->get()->first();
                        $data = array(
                            'name'      =>  $user->name .' ' . $user->prenom,
                            'somme'   =>   $response->amount,
                            'statut' => $response->status,
                        );
                        Mail::to($projet->user->email)->send(new Notification($data));
                        $data = [
                            'somme' => $response->amount,
                            'titre' => $projet->title,
                            'numero'=> $numero,
                        ];
                      
                        //SendNotification::sendNotification($data);
                        $image_user = ImageUser::where('transaction_id', $apiuser)->get()->first();
                        $image_user->update([
                            'etat' => $response->status,
                        ]);

                        //// envoie de notification sur le mobile du receptueur  
                        
                 $request = new \Http_Request2('https://fcm.googleapis.com/fcm/send');
                 $url = $request->getUrl();
                 
                 $headers = array(
                     // Request headers
                     'Authorization' => 'key=AAAAhP2jabg:APA91bGnynqTUmd5rjkIx93Nku628vuFHLSK08C7BhcKTrP9uuBH9cZFMIaJtlKXA5-odubt8bQ_ugCK4Zp5dzQwGZZQXscWNPOKlYlelBB2ss6xhsgNHvJiAM7iuIqNv1haobze1vgS' ,
                     'Content-Type' => 'application/json;charset=utf-8',
                 );
     
                 $request->setHeader($headers);
     
                 $parameters = array(
                     //
                 );
                 //'euUCun69xxs:APA91bF6PQW1qUCuCy0GMUKgkFSc--KP6DyqfN99cBiEH5lsCr8qr9FNBgBEKaxmH5IW-XxBGckk89v424WvCM69ilhZITposoq3WOKR08fEvNjYPMsohoTHrtVJMCM3eajSylXVlEbd',
                 $body = array(
                     'to' => $projet->user->phone_id,
                     'notification' => array(
                         'title' => 'Nouvelle participation',
                         'body' => $user->name .' ' . $user->prenom. ' vient de participer à votre projet : '. $projet->title,
                     ), 
                     
                 );
                 $body = json_encode($body);
                 $url->setQueryVariables($parameters);
     
                 $request->setMethod(\HTTP_Request2::METHOD_POST);
                 
                 // Request body
                 $request->setBody($body);
     
                 try
                 {
                     $response = $request->send();
                     echo $response->getBody();
                 }
                 catch (HttpException $ex)
                 {
                     echo $ex;
                 }
                        
                 $queue = Queue::where('api_user', $apiuser)->delete();

                        //return response()->json(['message'=>'Vous a participé avec succès au projet ' . $projet->title . ' a hauteur de ' . $response->amount. ' Fcfa.']);
                        
                    }else{

                        Financial::create([
                            'transaction_id' => $response->externalId,
                        ]);

                        $image_user = ImageUser::where('transaction_id', $apiuser)->get()->first();

                        $image_user->update([
                            'etat' => $response->status,
                        ]);

                        $queue = Queue::where('api_user', $apiuser)->delete();
                
                    }

                
                }
                };
               
            }else{
                //logger('temps de transaction expiré');
            }
            
            
        }
        catch (HttpException $ex)
        {
            echo $ex;
        }

        }
       

        
    }

}
}
