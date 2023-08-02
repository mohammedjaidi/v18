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
