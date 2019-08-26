<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Khalilo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Khalilo\Calculator\CalculatorController@subtract');

