<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supdt;
use App\Surveyor;
use App\Vehicle;
use App\VehicleRequest;

class VehicleController extends Controller
{
    public function __construct()
     {
            $this->middleware('auth');
     }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)
            $vehicles = Vehicle::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $vehicles = Vehicle::where('supdt_id',$user->supdt->id)->get();
        }
      
        return view('vehicle.index',compact('user','vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     public function requist($id)
    {
         //$instruments = Instrument::where('id',$id)->get();
         // $surveyors = Surveyor::all();
        $vehicle = $id;

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
        }
      
        return view('vehicle.create',compact('user','vehicle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        VehicleRequest::create($request->all());
        return redirect('vehicle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requist = VehicleRequest::findOrFail($id);
         if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
        }

        return view('vehicle.edit',compact('user','requist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requist = VehicleRequest::findOrFail($id);
        $requist->update($request->all());
        return redirect('vehicle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
