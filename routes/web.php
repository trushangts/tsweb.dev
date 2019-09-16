<?php

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/simple', function () {
    return view('simple');
});

Route::get('/forms', function () {
                  return view('forms/forms');
                 });

Route::get('ID/{id}',function($id) {
  echo 'ID: '.$id;
});
