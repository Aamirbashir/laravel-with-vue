<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('home');
}]);

Route::get('/newperson',function () {
    return view('addperson');
});
  
  Route::post('/post/',array(
'as'=>'post-person',
'uses'=>'personController@createperson'
  ));

Route::resource('person','personController');