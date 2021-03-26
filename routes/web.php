<?php

use App\Http\Controllers\FirstController;

Route::get('/', [FirstController::class, 'index']);

Route::get('/favoris', [FirstController::class, 'favoris']);

Route::get('/genres', [FirstController::class, 'genres']);

Route::get('/chanteurs', [FirstController::class, 'chanteurs']);

Route::get('/chanteurs/{nom}', [FirstController::class, 'chanteur_single']);

Route::get('/titres', [FirstController::class, 'titres']);

Route::get('/search/{regex}', [FirstController::class, 'search']);

Auth::routes();

