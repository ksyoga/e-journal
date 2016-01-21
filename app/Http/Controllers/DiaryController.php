<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Supdt;
use App\Surveyor;
use App\Diary;
use App\SFA;
use App\Category;
use App\Requisition;

class DiaryController extends Controller
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
            $diarys = Diary::where('month',$user->month)->orderBy('day','desc')->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $diarys = Diary::where('surveyor_id',$user->id)->where('year',$user->year)->where('month',$user->month)->orderBy('day','asc')->get();
        }
      
        return view('diary.index',compact('user','diarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $sfas = SFA::all();
        $categorys = Category::all();

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('supdt_id',$user->id)->orderBy('id','desc')->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('surveyor_id',$user->id)->where('status',2)->orderBy('id','desc')->get();
        }
        return view('diary.create',compact('user','sfas','categorys','requisitions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->field_50))
        {
            $field_50 = implode(',',$request->field_50);
            $request['field_50'] = $field_50;
        }

        Diary::create($request->all());

        return redirect('diary');
    
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
            $diarys = Diary::where('surveyor_id',$surveyor->id)->where('year',$surveyor->year)->where('month',$surveyor->month)->orderBy('day','asc')->get();
            
            if(isset($diarys['0']) == false){
               
                return redirect('/supdt');
            }
            
        }else{
            return redirect('/');
        }
      
        return view('diary.show',compact('user','diarys','surveyor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $categorys = Category::all();
        $diary =Diary::findOrFail($id);
        $selected_sfas = explode(',', $diary->field_50);
        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('supdt_id',$user->id)->orderBy('id','desc')->get();
            $sfas = SFA::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $requisitions = Requisition::where('surveyor_id',$user->id)->where('status',2)->orderBy('id','desc')->get();
            $sfas = SFA::where('supdt_id',$user->supdt->id)->get();
        }
        return view('diary.edit',compact('user','sfas','categorys','requisitions','diary','selected_sfas'));
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
        if(isset($request->field_50))
        {
            $field_50 = implode(',',$request->field_50);
            $request['field_50'] = $field_50;
        }else{
            $request['field_50'] = NULL;
        }
        $diary = Diary::findOrFail($id);
        $diary->update($request->all());

        if(Auth::user()->rank == 'supdt'){
           return redirect()->action('DiaryController@show',$diary->surveyor_id);
        }else{
            return redirect('diary');
        }   
       
        
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
