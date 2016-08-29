<?php

//Route::get('/',function(){
//    return view('welcom');
//});


Route::get('/', 'WelcomeController@index');
Route::get('contact', 'WelcomeController@contact');
Route::get('adout', 'PagesController@about');
 ?>
