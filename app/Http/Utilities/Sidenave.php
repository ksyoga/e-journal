<?php

namespace App\Http\Utilities;
use Illuminate\Support\Facades\Auth;
use App\Requisition;
use App\Surveyor;
use App\Supdt;
use App\Instrument;
use App\Vehicle;

/**
* Status
*/
class Sidenave 
{
    public static function instrument(){

    	if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $instruments = Instrument::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $instruments = Instrument::where('supdt_id',$user->supdt->id)->get();
        }
    	return $instruments;
    }

    public static function vehicle(){

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $vehicle = Vehicle::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $vehicle = Vehicle::where('supdt_id',$user->supdt->id)->get();
        }
        return $vehicle;
    }

    
    
    
}