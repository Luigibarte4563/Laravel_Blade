<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/luwes', function () {
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => "1"],
        ["name" => "luigi", "skill" => 45, "id" => "2"]
    ];

    return view('luwes.index', ["greeting" => "hello", "ninjas" => $ninjas]);
});

Route::get('/luwes/{id}', function ($id) {
    //fetch record with id
    return view('luwes.show', ["id" => $id]);
});

// Route::get('/welcome', function () {
//     return redirect('welcome');
// });