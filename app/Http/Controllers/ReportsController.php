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
use App\IUtilize;
use App\VUtilize;
use App\Diary;
use App\Week;
use App\SelfCheck;
use App\Amendment;
use DB;

class ReportsController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

     /**
   *Display Requisition Detailes
   **/


   public function requisition($status_id=NULL){

        if($status_id==0){
          $status = "Unmindfull Requisition";
        }elseif($status_id==1){
          $status = "Accepted Requisition";
        }elseif($status_id==2){
          $status = "Commance Requisition";
        }elseif($status_id==3){
          $status = "Completed Requisition";
        }else{
          $status = "Unknown Requisition";
        }

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)
            $requisitions = Requisition::where('supdt_id',$user->id)->where('status',$status_id)->orderBy('issued','desc')->get();
            $surveyor_id = $user->id;
        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('surveyor_id',$user->id)->where('status',$status_id)->orderBy('issued','desc')->get();
             $surveyor_id = $user->id;
        }

        return view('reports.requisitions',compact('status','requisitions','surveyor_id'));

      }

      public function instrument($id=NULL){

        $lable=["info","primary"];

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $instrument = Instrument::where('supdt_id',$user->id)->where('id',$id)->first();
            $iutilizes = IUtilize::where('instrument_id',$id)->get();
            $surveyor_id = $user->id;

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $instrument = Instrument::where('supdt_id',$user->supdt->id)->where('id',$id)->first();
            $iutilizes = IUtilize::where('instrument_id',$id)->get();
            $surveyor_id = $user->id;
            // $iutilizes = DB::table('iutilize')
            //             ->join('requisitions','iutilize.requisition_id','=','requisitions.id')
            //             ->select('iutilize.*','requisitions.surveyor_id')
            //             ->where('requisitions.surveyor_id' , '1')
            //             ->where('iutilize.instrument_id','1')
            //             ->get();

        }

        return view('reports.instrument',compact('instrument','iutilizes','surveyor_id'));

      }

//    vehicle detailes

    public function vehicle($id=NULL){

        $lable=["info","primary"];

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $vehicle = Vehicle::where('supdt_id',$user->id)->where('id',$id)->first();
            $vutilizes = VUtilize::where('vehicle_id',$id)->get();
            $surveyor_id = $user->id;

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $vehicle = Vehicle::where('supdt_id',$user->supdt->id)->where('id',$id)->first();
            $vutilizes = VUtilize::where('vehicle_id',$id)->get();
            $surveyor_id = $user->id;
        }

        return view('reports.vehicle',compact('vehicle','vutilizes','surveyor_id'));

      }

      public function diary($year=2016,$month=1){

            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $diarys = Diary::where('surveyor_id',$user->id)->where('year',$year)->where('month',$month)->orderBy('day','asc')->get();
            $weeks = Week::where('surveyor_id',$user->id)->where('year',$year)->where('month',$month)->orderBy('day','asc')->get();
            $involveds = Diary::select('year','month','field_1',DB::raw('SUM(field_3) as in_office'),DB::raw('SUM(field_4) as in_field'),DB::raw('SUM(field_5) as setin_out'),DB::raw('SUM(field_6) as surveying'),DB::raw('SUM(field_7) as plan_work'))->where('surveyor_id',$user->id)->where('year',$year)->where('month',$month)->where('field_1','!=',0)->groupBy('field_1')->get();
            $selfchecks = SelfCheck::firstOrCreate(['surveyor_id'=>$user->id,'year'=>$year,'month'=>$month]);
            $amendments = DB::select('select * from amendments where surveyor_id = ? and  YEAR(`completion`) = ? AND MONTH(`completion`) = ?',[$user->id,$year,$month,]);


            if(Auth::user()->surveyor->year == $year && Auth::user()->surveyor->month >= $month ){
              return view('reports.diary',compact('user','diarys','weeks','selfchecks','year','month','amendments','involveds'));
            }else{
              $user_year = Auth::user()->surveyor->year;
              $user_month = Auth::user()->surveyor->month;
              return view('reports.no_dat', compact('user_year','user_month'));

            }



      }

      public function diaryforsupdt($year=2016,$month=1,$surveyor_id=1){

            $user = Surveyor::where('id',$surveyor_id)->first();
            $diarys = Diary::where('surveyor_id',$surveyor_id)->where('year',$year)->where('month',$month)->orderBy('day','asc')->get();
            $weeks = Week::where('surveyor_id',$surveyor_id)->where('year',$year)->where('month',$month)->orderBy('day','asc')->get();
            $selfchecks = SelfCheck::firstOrCreate(['surveyor_id'=>$user->id,'year'=>$year,'month'=>$month]);
            $involveds = Diary::select('year','month','field_1',DB::raw('SUM(field_3) as in_office'),DB::raw('SUM(field_4) as in_field'),DB::raw('SUM(field_5) as setin_out'),DB::raw('SUM(field_6) as surveying'),DB::raw('SUM(field_7) as plan_work'))->where('surveyor_id',$surveyor_id)->where('year',$year)->where('month',$month)->where('field_1','!=',0)->groupBy('field_1')->get();
            $amendments = DB::select('select * from amendments where surveyor_id = ? and  YEAR(`completion`) = ? AND MONTH(`completion`) = ?',[$surveyor_id,$year,$month,]);
           
            return view('reports.diary',compact('user','diarys','weeks','selfchecks','year','month','amendments','involveds'));




      }

}
