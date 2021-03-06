<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supdt;
use App\Surveyor;
use App\Week;
use App\Requisition;

class WeekController extends Controller
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
            $weeks = Week::all();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $weeks = Week::where('surveyor_id',$user->id)->where('month',$user->month)->orderBy('day','asc')->get();
        }
      
        return view('week.index',compact('user','weeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('supdt_id',$user->id)->orderBy('id','desc')->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('surveyor_id',$user->id)->where('status','!=',3)->orderBy('id','desc')->get();
        }
        return view('week.create',compact('user','requisitions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Week::create($request->all());

        return redirect('week');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $surveyor = Surveyor::findOrFail($id);
            $weeks = Week::where('surveyor_id',$surveyor->id)->where('year',$surveyor->year)->where('month',$surveyor->month)->orderBy('day','asc')->get();
            
            if(isset($weeks['0']) == false){
               
                return redirect('/supdt');
            }
            
        }else{
            return redirect('/');
        }
      
        return view('week.show',compact('user','weeks','surveyor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $week = Week::findOrFail($id);

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('supdt_id',$user->id)->orderBy('id','desc')->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('surveyor_id',$user->id)->orderBy('id','desc')->get();

        }

        return view('week.edit',compact('user','requisitions','week'));
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
        $week = Week::findOrFail($id);
        $week->update($request->all());
        if(Auth::user()->rank == 'supdt'){
            //return $week->surveyor_id;
            return redirect()->action('WeekController@show',$week->surveyor_id);
        }else{
            return redirect('week');
        }    
       
        //return back();
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
