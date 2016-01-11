<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supdt;
use App\Surveyor;
use App\Requisition;
use App\Category;
use App\Vehicle;
use App\Instrument;

class ReportsController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

     /**
   *Display Requisition Detailes
   **/
   public function requisition($status=3){
        //return $status;
        return view('reports.index',compact('status'));
   } 
}
