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
        $surveyors = Surveyor::all();
        

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)
            $requisitions = Requisition::where('supdt_id',$user->id)->orderBy('id','desc')->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('surveyor_id',$user->id)->orderBy('id','desc')->get();
        }


      
        return view('requisition.index',compact('user','surveyors','requisitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $surveyors = Surveyor::all();
        $categorys = Category::all();
        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
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
        $surveyors = Surveyor::all();//lists('name','id');//all();
        $categorys = Category::all();//lists('sub_category','id');
        $requisition = Requisition::findOrFail($id);

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
        }

        return view('requisition.edit',compact('user','requisition','surveyors','categorys'));
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
