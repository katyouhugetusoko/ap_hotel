<?php





Route::get('/', function () {
    return view('welcome');
});


Route::get('/user','UserController@index');

Route::get('/reserve','ReserveController@index');

Route::get('/detail','DetailController@index');

Route::get('/room','RoomController@index');

Route::get('/masuta','MasutaController@index');