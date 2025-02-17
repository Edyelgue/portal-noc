<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;

Route::post('/create', [CreateController::class, 'store']);

Route::get('/create', function () {
    return view('create');
});

Route::get('/list-analists', function () {
    return view('list-analists');
});

Route::get('/changes', function () {
    return view('changes');
});

Route::get('/incidents-n1tme', function () {
    return view('incidents-n1tme');
});

Route::get('/problem-investigations', function () {
    return view('problem-investigations');
});

Route::get('/work-orders', function () {
    return view('work-orders');
});
