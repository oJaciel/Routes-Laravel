<?php

use App\Http\Controllers\NameController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [NameController::class, 'getIndex']);

Route::post('/page2', [NameController::class, 'getName']);

