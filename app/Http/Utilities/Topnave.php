<?php

namespace App\Http\Utilities;
use Illuminate\Support\Facades\Auth;
use App\Requisition;
use App\Surveyor;
use App\Supdt;

/**
* Status
*/
class Topnave 
{
    public static function new_requisition(){

    	if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $new_requisitions = Requisition::where('supdt_id',$user->id)->where('status',0)->count();
            return $new_requisitions;

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $new_requisitions = Requisition::where('surveyor_id',$user->id)->where('status',0)->count();
            return $new_requisitions;
        }
    	
    }

    public static function new_requisition_list(){

    	if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $new_requisition_list = Requisition::where('supdt_id',$user->id)->where('status',0)->get();
            return $new_requisition_list;

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $new_requisition_list = Requisition::where('surveyor_id',$user->id)->where('status',0)->get();
            return $new_requisition_list;
        }
    	
    }

    public static function un_com_requi(){

    	if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $un_com_requi = Requisition::where('supdt_id',$user->id)->where('status','!=',0)->where('status','!=',3)->count();
            return $un_com_requi;

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $un_com_requi = Requisition::where('surveyor_id',$user->id)->where('status','!=',0)->where('status','!=',3)->count();
            return $un_com_requi;
        }
    	
    }

    public static function com_work_lodae(){
        
        	if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $work_lodae = Requisition::where('supdt_id',$user->id)->where('status','!=',0)->sum('work_load');
            $com_work_lodae = Requisition::where('supdt_id',$user->id)->where('status',3)->sum('work_load');
            return "<small class=\"pull-right\"> $com_work_lodae / $work_lodae </small>";
        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
             $work_lodae = Requisition::where('surveyor_id',$user->id)->where('status','!=',0)->sum('work_load');
            $com_work_lodae = Requisition::where('surveyor_id',$user->id)->where('status',3)->sum('work_load');
            return "<small class=\"pull-right\"> $com_work_lodae / $work_lodae </small>";
        }           
        
   	}  

   	public static function com_work_pecentage(){
        
        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $work_lodae = Requisition::where('supdt_id',$user->id)->where('status','!=',0)->sum('work_load');
            $com_work_lodae = Requisition::where('supdt_id',$user->id)->where('status',3)->sum('work_load');
            if($work_lodae==0){
                return 0;
            }
            return ($com_work_lodae/$work_lodae)*100 ;
        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
             $work_lodae = Requisition::where('surveyor_id',$user->id)->where('status','!=',0)->sum('work_load');
            $com_work_lodae = Requisition::where('surveyor_id',$user->id)->where('status',3)->sum('work_load');
            if($work_lodae==0){
                return 0;
            }
            return ($com_work_lodae/$work_lodae)*100 ;
        }           
        
   	}    
    
    
}