<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FlyController extends Controller
{
    

    public function index() {

        return view('home');


    }

    public function showResults(Request $request) {

        $avilableFlightsFlyAllOver = HTTP::asForm()->post('https://api.flyallover.com/api/search', [

                'class' => $request['class'],
                'trip_type' => $request['trip_type'],
                'origin' => $request['from'],
                'destination' => $request['destination'],
                'departure_date' => $request['departure_date'],
                'travellers' => $request['traveller'],
                'seat' => $request['seat'],


        ])->json()["data"]["Itineraries"];

        // foreach ($results as $result)
        // {   
        //     foreach($result["flights"] as $details)
        //     {
        //         $values = $details;

        //     }
        // }


        return view('results', compact('avilableFlightsFlyAllOver'));

        // $values->toArray();

    }



}
