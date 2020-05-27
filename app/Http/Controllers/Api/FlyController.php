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

        $data = HTTP::asForm()->post('https://api.flyallover.com/api/search', [


                'trip_type' => "OneWay",
                'origin' => $request['from'],
                'destination' => $request['destination'],
                'departure_date' => $request['departure_date'],
                'travellers' => $request['traveller'],
                'seat' => $request['seat'],


        ]);
        $values = $data->json()["data"]["Itineraries"];

        // foreach ($results as $result)
        // {   
        //     foreach($result["flights"] as $details)
        //     {
        //         $values = $details;

        //     }
        // }


        return view('results', compact('values'));

        // $values->toArray();

    }



}
