<?php

use App\Http\Controllers\NameController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page1');
});

Route::get('page2', [NameController::class, 'getName']);

