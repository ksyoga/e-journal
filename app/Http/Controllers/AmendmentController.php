<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supdt;
use App\Surveyor;
use App\Amendment;

class AmendmentController extends Controller
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
       // $surveyors = Surveyor::all();
       

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)
             $amendments = Amendment::where('supdt_id',$user->id)->orderBy('id','desc')->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $amendments = Amendment::where('surveyor_id',$user->id)->orderBy('id','desc')->get();
        }
      
        return view('amendment.index',compact('user','amendments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surveyors = Surveyor::all();
         if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
        }

        return view('amendment.create',compact('user','surveyors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Amendment::create($request->all());

        return redirect('amendment');
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
        $amendment = Amendment::findOrFail($id);

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();//->firstOrFail()//::findOrFail(1)

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
        }
        return view('amendment.edite',compact('user','surveyors','amendment'));
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
        $amendment = Amendment::findOrFail($id);
        $amendment->update($request->all());
        return redirect('amendment');
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
