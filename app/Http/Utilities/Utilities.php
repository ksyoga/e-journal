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
		}
		
	}

	public static function spendday($id){
		if($id === 0 ||$id == null||$id === '-'){
			//return "&nbsp -";
			return "&#151";
		}elseif ($id === 0.5) {
			return "<sup>1</sup>&frasl;<sub>2</sub>";
		}elseif($id === 1){
			return "1";
		}else{
			return $id;
		}
	}

}