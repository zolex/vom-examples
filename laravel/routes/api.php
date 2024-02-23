<?php

use Illuminate\Support\Facades\Route;

Route::get('/example/normalize', [\App\Http\Controllers\ExampleController::class, 'normalizePerson']);
