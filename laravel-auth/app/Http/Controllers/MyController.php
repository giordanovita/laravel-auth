<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;


class MyController extends Controller
{
    public function welcome(){
        $cars = Car::all();

        return view('welcome', compact('cars'));
    }



    public function carsList(){
      
        $cars = Car::where('deleted', false) ->get();

        return view('carsList', compact('cars'));
    }

    public function pilotsList(){
      
        $pilots = Pilot::all();

        return view('pilotsList', compact('pilots'));
    }



   

    public function pilotDetails($id){
        $pilot = Pilot::findOrFail($id);
        return view('pilotDetails', compact('pilot'));
    }

}
