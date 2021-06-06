<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;
use App\Brand;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   
   
    public function create(){

        $brands = Brand::all();
        $pilots = Pilot::all();
        
        return view('create', compact('brands','pilots'));
        
    }

   

        public function store(Request $request){
        
            $validated = $request -> validate([
                'name' => 'required|string',
                'model' => 'required|string',
                'kW' => 'required|integer',
                'brand_id' => 'required|exists:brands,id|integer',
            ]);
            $brand = Brand::findOrFail($request -> get('brand_id'));
            $car = Car::make($validated);
            $car -> brand() -> associate($brand);
            $car -> save();
            $car -> pilots() -> attach($request -> pilots_id);
            $car -> save();
    
            return redirect() -> route('carsList');
        }
        


    public function edit($id){
        
        $car = Car::findOrFail($id);
        $brands = Brand::all();
        $pilots = Pilot::all();

        return view('edit', compact('car', 'brands', 'pilots'));
    }

    public function update(Request $request, $id){

        $validated = $request -> validate([
            'name' => 'required|string',
            'model' => 'required|string',
            'kW' => 'required|integer',
            'brand_id' => 'required|exists:brands,id|integer',
        ]);

        $car = Car::findOrFail($id);
        $car -> update($validated);
        $car ->brand() -> associate($request -> brand_id);
        $car -> save();

        $car ->pilots() ->sync($request -> pilots_id);

        return redirect() ->route('carsList');
    }

    public function delete($id){

        $car = Car::findOrFail($id);
        $car -> deleted = true;
        $car -> save();

        return redirect() ->route('carsList');
    }

   
}
