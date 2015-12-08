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

Route::get('instrument/{id}/requist','InstrumentController@requist');
Route::get('vehicle/{id}/requist','VehicleController@requist');



