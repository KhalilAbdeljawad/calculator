<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Khalil\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Khalil\Calculator\CalculatorController@subtract');

