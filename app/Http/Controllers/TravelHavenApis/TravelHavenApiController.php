<?php

namespace App\Http\Controllers\TravelHavenApis;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Request;
use Illuminate\Support\Facades\Http;

class TravelHavenApiController extends Controller
{
    public function searchFlightBetweenCity(...$client_request){
           $client=new Client();
           $client_key=env('AMADEUS_CLINT_ID');
           $origin=$client_request['origin'];
           $destination=$client_request['destination'];
           $departure_date=$client_request['departure'];
           $passenger_type=$client_key['class'];
           $passenger_count=$client_key['pass_count'];
           $travel_class=$client_key['class'];
           $non_stop=$client_key['non_stop'];
           $headers=[
            'Content-type'=>'application/json',
            'Authorization'=>'Bearer '.$client_key
           ];
           $request_url='https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode='.$origin.'&destinationLocationCode='.$destination.'&departureDate='.$departure_date.'&adults='.$passenger_count.'&travelClass='.$travel_class.'&nonStop='.$non_stop.'&max=250';
           $res=$client->request('GET',$request_url,$headers);
           $res->getBody();

    }
}
