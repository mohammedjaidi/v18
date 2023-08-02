<?php

use Illuminate\Support\Facades\Route;

// use , namespace

Route::get('/' , function() {
    return 'Homepage';
}
);
Route::get('/contact-us' , function() {
    return 'contact us';
}
);

Route::get('/{name}/{age}' , function($name,$age){

    return " Welcome ".$name ." my age is " .$age;

}) ;
