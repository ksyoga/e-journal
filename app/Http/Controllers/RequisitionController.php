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

class RequisitionController extends Controller
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
            $requisitions = Requisition::where('supdt_id',$user->id)->orderBy('status','asc')->orderBy('issued','dese')->get();
            $surveyors = Surveyor::where('supdt_id',$user->id)->get();
           // $vehicles = Vehicle::where('supdt_id',$user->id)->get();
           // $instuments = Instrument::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('surveyor_id',$user->id)->orderBy('status','asc')->orderBy('issued','dese')->get();
            $surveyors = Surveyor::where('supdt_id',$user->supdt->id)->get();
            //$vehicles = Vehicle::where('supdt_id',$user->supdt->id)->get();
           // $instuments = Instrument::where('supdt_id',$user->supdt->id)->get();
        }


      
        return view('requisition.index',compact('user','surveyors','requisitions','vehicles','instuments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorys = Category::all();
        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)
            $surveyors = Surveyor::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $surveyors = Surveyor::where('supdt_id',$user->supdt->id)->get();
        }

        return view('requisition.create',compact('user','surveyors','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request['supdt_id']=1;
       
        Requisition::create($request->all());

        return redirect('requisition');
        
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
            $requisitions = Requisition::where('surveyor_id',$surveyor->id)->orderBy('status','asc')->orderBy('issued','dese')->get();
            //dd($requisitions);
            if(isset($requisitions['0']) == false){
               
                return redirect('/supdt');
            }
            
        }else{
            return redirect('/');
        }
      
        return view('requisition.show',compact('user','requisitions','surveyor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $categorys = Category::all();//lists('sub_category','id');
        $requisition = Requisition::findOrFail($id);
       

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)
            $surveyors = Surveyor::where('supdt_id',$user->id)->get();
            $vehicles = Vehicle::where('supdt_id',$user->id)->get();
            $instuments = Instrument::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $surveyors = Surveyor::where('supdt_id',$user->supdt->id)->get();
            $vehicles = Vehicle::where('supdt_id',$user->supdt->id)->get();
            $instuments = Instrument::where('supdt_id',$user->supdt->id)->get();
        }

        return view('requisition.edit',compact('user','requisition','surveyors','categorys','vehicles','instuments'));
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
        $requisition = Requisition::findOrFail($id);
        $requisition->update($request->all());
        return redirect('requisition');
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
