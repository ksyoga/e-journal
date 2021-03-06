<?php

/**
// Authentication routes... 
*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Authentication routes...

Route::get('/', function () {
    return redirect('supdt');
});
Route::get('admin', function () {
    return view('admin');
});

Route::get('dbtest', function () {
	$utilize = DB::table('iutilize')->join('requisitions','iutilize.requisition_id','=','requisitions.id')->select('iutilize.*')->where('requisitions.surveyor_id' , 1)->where('iutilize.instrument_id',1)->get();

    return $utilize;
});

Route::get('test', 'TestController@index');

/**
// Journal Resource Route Start
*/
Route::resource('supdt','SupdtController');
Route::resource('instrument','InstrumentController');
Route::resource('vehicle','VehicleController');
Route::resource('requisition','RequisitionController');
Route::resource('sfa','SFAController');
Route::resource('amendment','AmendmentController');
Route::resource('week','WeekController');
Route::resource('selfcheck','SelfCheckController');
Route::resource('diary','DiaryController'); 
Route::resource('monthinvolved','MonthInvolvedController');
Route::resource('iutilize','IUtilizeController');
Route::resource('vutilize','VUtilizeController');

Route::get('instrument/{id}/requist','InstrumentController@requist');
Route::get('vehicle/{id}/requist','VehicleController@requist');


/**
// Report Controler
*/
Route::get('report/{status}/requi','ReportsController@requisition');
Route::get('report/{status}/instrument','ReportsController@instrument');
Route::get('report/{status}/vehicle','ReportsController@vehicle');
Route::get('report/{year}/diary/{month}','ReportsController@diary');
Route::get('report/{year}/diary/{month}/suvy/{id}','ReportsController@diaryforsupdt');


/**
PDF Report
*/
// Route::get('report/{year}/diary/{month}','ReportsController@journal');

/**
Charts
**/
Route::resource('chart','ChartsController');

Route::get('pdf',function(){
	$varname = 'K.S.Yogananth';
	$pdf =PDF::loadView('reports.pdftest',compact('varname'))->setPaper('a3', 'landscape');
	return $pdf->stream();
	//PDF::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')

});