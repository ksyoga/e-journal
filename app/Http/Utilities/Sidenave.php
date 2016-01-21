<?php

namespace App\Http\Utilities;
use Illuminate\Support\Facades\Auth;
use App\Requisition;
use App\Surveyor;
use App\Supdt;
use App\Instrument;
use App\Vehicle;

/**
* Status
*/
class Sidenave 
{
    public static function instrument(){

    	if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $instruments = Instrument::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $instruments = Instrument::where('supdt_id',$user->supdt->id)->get();
        }
    	return $instruments;
    }

    public static function vehicle(){

        if(Auth::user()->rank == 'supdt'){

            $user = Supdt::where('user_id',(Auth::user()->id))->first();
            $vehicle = Vehicle::where('supdt_id',$user->id)->get();

        }else{
            $user = Surveyor::where('user_id',(Auth::user()->id))->first();
            $vehicle = Vehicle::where('supdt_id',$user->supdt->id)->get();
        }
        return $vehicle;
    }


    public static function diaryMonth(){

        $user = Surveyor::where('user_id',(Auth::user()->id))->first();

        $month = [  "<a href=\"report/$user->year/diary/1\" target=\"_blank\"><span class=\"label label-danger \">January</span></a>&nbsp;", 
                    "<a href=\"report/$user->year/diary/2\" target=\"_blank\"><span class=\"label label-warning \">February</span> </a>",
                    "<a href=\"report/$user->year/diary/3\" target=\"_blank\"><span class=\"label label-info \">March</span> </a>",
                    "<a href=\"report/$user->year/diary/4\" target=\"_blank\"><span class=\"label label-success \">Aprial</span></a>&nbsp;",
                    "<a href=\"report/$user->year/diary/5\" target=\"_blank\"><span class=\"label bg-orange \">May</span> </a>",
                    "<a href=\"report/$user->year/diary/6\" target=\"_blank\"><span class=\"label bg-purple \">June</span> </a>",
                    "<a href=\"report/$user->year/diary/7\" target=\"_blank\"><span class=\"label bg-olive \">July</span> </a>",
                    "<a href=\"report/$user->year/diary/8\" target=\"_blank\"><span class=\"label label-primary\">August</span></a>&nbsp;",
                    "<a href=\"report/$user->year/diary/9\" target=\"_blank\"><span class=\"label label-danger \">September</span> </a>",
                    "<a href=\"report/$user->year/diary/10\" target=\"_blank\"><span class=\"label label-warning \">October</span> </a>",
                    "<a href=\"report/$user->year/diary/11\" target=\"_blank\"><span class=\"label label-info \">November</span> </a>",
                    "<a href=\"report/$user->year/diary/12\" target=\"_blank\"><span class=\"label label-success \">December</span></a>"];
                    

                    $activemonth = "<h4 class=\"control-sidebar-subheading\">Surveyor Journal $user->year </h4>";
                    if($user->month > 0){
                        for($i=0; $i<$user->month; $i++){
                            $activemonth .= $month[$i];
                        }
                    }
                    

                    return $activemonth;
                    

}



    
    
    
}