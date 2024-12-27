<?php

use Illuminate\Support\Facades\Route;

Route::get('/changes', function () {
    return view('changes');
});

Route::get('/incidents', function () {
    return view('incidents');
});

Route::get('/problem-investigations', function () {
    return view('problem-investigations');
});

Route::get('/work-orders', function () {
    return view('work-orders');
});
