<?php

Route::get('customer', 'Api\CustomerApiController@index');

Route::post('customer', 'Api\CustomerApiController@store');

//{
 //   return response()->json($request);

//});