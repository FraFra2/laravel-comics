<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comics = config("comics");

    $data = compact('comics');


    // return view('home', $data);

    return view('home', [
        'comics' => $data
    ]);
});

// Route::get('/contatti', function () {
//     return view('contact');
// });
