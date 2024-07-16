<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'show']);

Route::get('/insert', function() {
    return view('insertBox');
});