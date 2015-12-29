<?php

namespace App\Http\Utilities;

/**
* Status
*/
class Utilities 
{
	
	public static function status($id){
		if($id==1){
			return "<small class=\"label label-warning\">Awarded</small>";
		}elseif ($id==2) {
			return "<small class=\"label label-info\">Commance</small>";
		}elseif ($id==3) {
			return "<small class=\"label label-success\">Completed</small>";
		}else{
			return "<small class=\"label label-danger\">Unknown</small>";
		}
	}

	public static function sldate($date){

		if($date == '0000-00-00'|| $date == null){
			//return "-";
			return "&#151";
		}else{
			return date_format(date_create($date),'d/m/Y');
			// return  "<i>".date_format(date_create($date),'d/m/Y')."</i>";
		}
		
	}

	public static function spendday($id){
		if($id === 0 ||$id == null||$id === '-'){
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

}