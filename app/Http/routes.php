<?php

//Route::get('/',function(){
//    return view('welcom');
//});


Route::get('/','WelcomControllwer@index');
Route::get('contact', 'WelcomController@contact');

 ?>
