<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supdt;
use App\Surveyor;
use App\Diary;
use DB;

class MonthInvolvedController extends Controller
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
              $involveds =  DB::select('SELECT `year`,`month`,`field_1` ,SUM(`field_3`)AS`in_office`,SUM(`field_4`) AS `in_field`,SUM(`field_5`)AS `setin_out`,SUM(`field_6`)AS `surveying`,SUM(`field_7`)AS `plan_work` FROM `diarys` WHERE `surveyor_id`=? AND `year`=? AND`month`=? AND `field_1`!=0  GROUP BY `field_1`',[$user->id,$year,$month,]);
            $year = $user->year;
            $month = $user->month;


        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $involveds =  DB::select('SELECT `year`,`month`,`field_1` ,SUM(`field_3`)AS`in_office`,SUM(`field_4`) AS `in_field`,SUM(`field_5`)AS `setin_out`,SUM(`field_6`)AS `surveying`,SUM(`field_7`)AS `plan_work` FROM `diarys` WHERE `surveyor_id`=? AND `year`=? AND`month`=? AND `field_1`!=0  GROUP BY `field_1`',[$user->id,$user->year,$user->month]);
            $year = $user->year;
            $month = $user->month;
        }
      
        return view('monthinvolved.index',compact('user','involveds','year','month'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Surveyor::where('id',$id)->first();
        $year = $user->year;
        $month = $user->month;
        $surveyor_id= $user->id;
         $involveds = Diary::select('year','month','field_1',DB::raw('SUM(field_3) as in_office'),DB::raw('SUM(field_4) as in_field'),DB::raw('SUM(field_5) as setin_out'),DB::raw('SUM(field_6) as surveying'),DB::raw('SUM(field_7) as plan_work'))->where('surveyor_id',$surveyor_id)->where('year',$year)->where('month',$month)->where('field_1','!=',0)->groupBy('field_1')->get();
       
         return view('monthinvolved.show',compact('user','involveds','year','month'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
