<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supdt;
use App\Surveyor;
use App\SelfCheck;

class SelfCheckController extends Controller
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
            $selfchecks = SelfCheck::all();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $selfchecks = SelfCheck::where('surveyor_id',$user->id)->where('year',$user->year)->where('month',$user->month)->first();
            $check= [
                        'surveyor_id'   =>    $user->id,
                        'year'          =>    $user->year,
                        'month'         =>    $user->month,
                        
                    ];
            if($selfchecks==null){
                
                SelfCheck::create($check);
                $selfchecks = SelfCheck::where('surveyor_id',$user->id)->where('month',$user->month)->first();

            }
            


        }
      
        return view('selfcheck.index',compact('user','selfchecks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('selfcheck.creat');
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
        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $surveyor = Surveyor::findOrFail($id);
            $selfchecks = SelfCheck::where('surveyor_id',$id)->where('month',$surveyor->month)->where('year',$surveyor->year)->first();


            if($selfchecks == null){
                return redirect('/supdt');
            }

        }else{
            return redirect('/supdt');
        }
        return view('selfcheck.shows',compact('user','selfchecks','surveyor'));
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
        $field = [
                    'field_1'  =>'off',
                    'field_2'  =>'off',
                    'field_3'  =>'off',
                    'field_4'  =>'off',
                    'field_5'  =>'off',
                    'field_6'  =>'off',
                    'field_7'  =>'off',
                    'field_8'  =>'off',
                    'field_9'  =>'off',
                    'field_10'  =>'off',
                    'field_11'  =>'off',
                    'field_12'  =>'off',
        ];

        $selfcheck = SelfCheck::findOrFail($id);
        $selfcheck->update($field);
        $selfcheck->update($request->all());
        return redirect('selfcheck');
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
