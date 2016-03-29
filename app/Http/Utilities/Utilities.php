<?php

namespace App\Http\Utilities;
use App\Requisition;
use App\Diary;
use DB;

/**
* Status
*/
class Utilities 
{
	
	public static function status($id){
		if($id==1){
			return "<small class=\"label label-warning\">Accepted</small>";
		}elseif ($id==2) {
			return "<small class=\"label label-info\">Commance</small>";
		}elseif ($id==3) {
			return "<small class=\"label label-success\">Completed</small>";
		}else{
			return "<small class=\"label label-danger\">Unmindful</small>";
		}
	}

	public static function sldate($date){

		if($date == '0000-00-00'|| $date == null){
			//return "-";
			return "&#151";
		}else{
			//return date_format(date_create($date),'d/m/Y');
			return  "<i>".date_format(date_create($date),'d/m/Y')."</i>";
		}
		
	}

	public static function spendday($id){
		if($id === 0 ||$id == null||$id === '-'||$id == ' '){
			//return "&nbsp -";
			return "&#151";
		}elseif ($id == 0.5) {
			return "<i><sup>1</sup>&frasl;<sub>2</sub></i>";
		}elseif($id == 1){
			return "<i>1</i>";
		}else{
			return "<i>".$id."</i>";
		}
	}

	public static function journalMonth($month){
		return date('F',mktime(0,0,0,$month));
	}
	public static function note($id){
		if($id === 0 ||$id == null||$id === '-'){
			//return "&nbsp -";
			return "&#151";
		}else{
			return "<i class=\"fa fa-file-text-o\" data-toggle=\"tooltip\" title=\"$id\">";
		}
	}

	public static function dec2fracso($dec){
		
	
		$full=explode('.', (string)$dec);
	

		if($dec === 0 ||$dec == null||$dec === '-'){
			return "&#151";
		}elseif ($dec == 0.5) {
			return "<i><sup>1</sup>&frasl;<sub>2</sub></i>";
		}elseif(isset($full[1]) && $full[1]== 5){
			return "<i>$full[0]<sup>1</sup>&frasl;<sub>2</sub></i>";
		}else{
			return "<i> $dec </i>";
		}
	
	} 

	public static function diarylimt($year,$month,$finished=null){

		$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		if($finished < $days){
			return "<li class=\"pull-right\"><a href=\"diary/create\"><span class=\"label label-success pull-right\" data-toggle=\"tooltip\" title=\"Add Diary\"><i class=\"glyphicon glyphicon-plus\"></i></span></a></li>";
		}else{
			return "<li class=\"pull-right\"  data-toggle=\"tooltip\" title=\"This Month Diary Completed Wait for Supdt Approvel\"><a><i class=\"text-muted fa fa-gear\"></a></i></li>";
		}
		
	}

	public static function journalapprove($survymonth,$journalmonth){
		if($survymonth==$journalmonth){
			return "<span class=\"label label-warning\">Pending</span>";
		}
		return "<span class=\"label label-success\">Approved</span>";

	}

	
	public static function  getWorkingDays($startDate,$endDate){
    // do strtotime calculations just once
    $endDate = strtotime($endDate);
    $startDate = strtotime($startDate);
    $holidays=array("2016-01-15","2016-02-04","2016-02-22","2016-03-07",
	                "2016-03-22","2016-03-25","2016-04-13","2016-04-14",
	                "2016-04-21","2016-07-06","2016-07-19","2016-08-17",
	                "2016-09-12","2016-09-16","2016-02-22","2016-11-14",
	                "2016-12-12","2016-12-13");


    //The total number of days between the two dates. We compute the no. of seconds and divide it to 60*60*24
    //We add one to inlude both dates in the interval.
    $days = ($endDate - $startDate) / 86400 + 1;

    $no_full_weeks = floor($days / 7);
    $no_remaining_days = fmod($days, 7);

    //It will return 1 if it's Monday,.. ,7 for Sunday
    $the_first_day_of_week = date("N", $startDate);
    $the_last_day_of_week = date("N", $endDate);

    //---->The two can be equal in leap years when february has 29 days, the equal sign is added here
    //In the first case the whole interval is within a week, in the second case the interval falls in two weeks.
    if ($the_first_day_of_week <= $the_last_day_of_week) {
        if ($the_first_day_of_week <= 6 && 6 <= $the_last_day_of_week) $no_remaining_days--;
        if ($the_first_day_of_week <= 7 && 7 <= $the_last_day_of_week) $no_remaining_days--;
    }
    else {
        // (edit by Tokes to fix an edge case where the start day was a Sunday
        // and the end day was NOT a Saturday)

        // the day of the week for start is later than the day of the week for end
        if ($the_first_day_of_week == 7) {
            // if the start date is a Sunday, then we definitely subtract 1 day
            $no_remaining_days--;

            if ($the_last_day_of_week == 6) {
                // if the end date is a Saturday, then we subtract another day
                $no_remaining_days--;
            }
        }
        else {
            // the start date was a Saturday (or earlier), and the end date was (Mon..Fri)
            // so we skip an entire weekend and subtract 2 days
            $no_remaining_days -= 2;
        }
    }

    //The no. of business days is: (number of weeks between the two dates) * (5 working days) + the remainder
//---->february in none leap years gave a remainder of 0 but still calculated weekends between first and last day, this is one way to fix it
   $workingDays = $no_full_weeks * 5;
    if ($no_remaining_days > 0 )
    {
      $workingDays += $no_remaining_days;
    }

    //We subtract the holidays
    foreach($holidays as $holiday){
        $time_stamp=strtotime($holiday);
        //If the holiday doesn't fall in weekend
        if ($startDate <= $time_stamp && $time_stamp <= $endDate && date("N",$time_stamp) != 6 && date("N",$time_stamp) != 7)
            $workingDays--;
    }

    return $workingDays;
}

public static function fDay($date){
	if(date("w",strtotime($date))==5){
		return "class=\"friday-seprater\"";
		
	}else{
		return null;
	}
}

public static function HoliDay($date){

	$holidays=array("2016-01-15","2016-02-04","2016-02-22","2016-03-07",
	                "2016-03-22","2016-03-25","2016-04-13","2016-04-14",
	                "2016-04-21","2016-07-06","2016-07-19","2016-08-17",
	                "2016-09-12","2016-09-16","2016-02-22","2016-11-14",
	                "2016-12-12","2016-12-13");

	if(in_array($date, $holidays) || date("w",strtotime($date))==6 || date("w",strtotime($date))==0){
		return "class=\"holiday\"";
	}
	// }elseif(date("w",strtotime($date))==6 || date("w",strtotime($date))==0){
	// 	return "class=\"text-red\"";
		
	// }else{
	// 	return null;
	// }
}

public static function Leave($date,$leave_data){
	if($leave_data==0.5 || $leave_data==1){
		return "class=\"leave\"";
	}
}

public static function selfCheck($field){
	if($field=="on"){
		return "<i class=\"glyphicon glyphicon-ok\"></i>";
	}else{
		return "<i class=\"glyphicon glyphicon-remove\"></i>";
	}
}

public static function requ_no($id){
	
	$number = Requisition::where('id',$id)->value('requisition_no');
	return $number;
}

public static function last_month($surveyor_id,$year,$month,$req_no,$work_type){

	if($month == 1){
		$year = $year-1;
		$month=12;
	}else{
		$month = $month-1;
	}
	 $involved = Diary::select('year','month','field_1',DB::raw('SUM(field_3) as in_office'),DB::raw('SUM(field_4) as in_field'),DB::raw('SUM(field_5) as setin_out'),DB::raw('SUM(field_6) as surveying'),DB::raw('SUM(field_7) as plan_work'))->where('surveyor_id',$surveyor_id)->where('year',$year)->where('month',$month)->where('field_1',$req_no)->where('field_1','!=',0)->first();

	 if($work_type == 0){
	 	$field =0;
	 	$field += $involved->in_office+$involved->in_field+$involved->setin_out+$involved->surveying;
	 	return $field;
	 }elseif($work_type == 1){
	  	$plan = 0;
	  	$plan +=$involved->plan_work;
	  	return $plan;
	  }

	

}

public static function work_for_req($req_no,$work_type){

	$work_for = Diary::select('year','month','field_1',DB::raw('SUM(field_3) as in_office'),DB::raw('SUM(field_4) as in_field'),DB::raw('SUM(field_5) as setin_out'),DB::raw('SUM(field_6) as surveying'),DB::raw('SUM(field_7) as plan_work'))->where('field_1',$req_no)->where('field_1','!=',0)->first();

	if($work_type == 0){
	 	$field =0;
	 	$field += $work_for->in_office+$work_for->in_field+$work_for->setin_out+$work_for->surveying;
	 	return $field;
	 }elseif($work_type == 1){
	  	$plan = 0;
	  	$plan +=$work_for->plan_work;
	  	return $plan;
	  }
	}

}