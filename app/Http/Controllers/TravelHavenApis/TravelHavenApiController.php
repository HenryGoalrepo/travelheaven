<?php

namespace App\Http\Controllers\TravelHavenApis;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\ClientException;
class TravelHavenApiController extends Controller
{

    public function getAuthrizationToken(){
        try {
            $client=new Client();
            $client_key=env('AMADEUS_CLINT_ID');
            $client_secret=env('AMADEUS_SECRET_ID');
            $headers=[
                'form_params'=>[
                    'client_id'=>$client_key,
                    'client_secret'=>$client_secret,
                    'grant_type'=>'client_credentials'
                ]
                ];
             $res=$client->request('POST','https://test.api.amadeus.com/v1/security/oauth2/token',$headers);
             $response=json_decode($res->getBody());
             //self::$bearer_token=$response->access_token;
            // dd($response->access_token);
           $this->searchFlightBetweenCity($response->access_token);

        } catch (ClientException $ex) {
               dd($ex->getMessage());
        }
    }
    public function searchFlightBetweenCity($token){

        //    $client_key=env('AMADEUS_CLINT_ID');
        //    $origin=$client_request['origin'];
        //    $destination=$client_request['destination'];
        //    $departure_date=$client_request['departure'];
        //    $passenger_type=$client_key['class'];
        //    $passenger_count=$client_key['pass_count'];
        //    $travel_class=$client_key['class'];
        //    $non_stop=$client_key['non_stop'];
        try {
            $client=new Client();

            $origin='DEL';
            $destination='AMS';
            $departure_date='2023-06-09';
            $passenger_type='adult';
            $passenger_count='1';
            $travel_class='economy';
            $non_stop=false;
            $retutrndate="0000-00-00";
            $headers = [
             'Authorization' => 'Bearer '.$token
            ];
            $resquest=new Request('GET','https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode='.$origin.'&destinationLocationCode='.$destination.'&departureDate='.$departure_date.'&adults='.$passenger_count.'&max=5', $headers);
            $response=$client->sendAsync($resquest)->wait();
            $details=$response->getBody()->getContents();
            dd(json_decode($details));

        } catch (ClientException $ex) {
           dd($ex->getMessage());
        }


    }
}
