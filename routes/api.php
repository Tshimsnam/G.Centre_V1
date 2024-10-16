<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActiviteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




require __DIR__.'/api_activites.php';
require __DIR__.'/api_employabilite.php';

require __DIR__.'/api_candidats.php';

require __DIR__.'/api_login.php';

