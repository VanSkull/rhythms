<?php

use App\Http\Controllers\FirstController;

Route::get('/', [FirstController::class, 'index']);

Route::get('/favoris', [FirstController::class, 'favoris']);

Route::get('/genres', [FirstController::class, 'genres']);

Route::get('/chanteurs', [FirstController::class, 'chanteurs']);

Route::get('/chanteurs/{id}', [FirstController::class, 'chanteur_single']);

Route::get('/titres', [FirstController::class, 'titres']);

Route::get('/search/{regex}', [FirstController::class, 'search']);

Route::get('/addcontenu', [FirstController::class, 'contenu'])->middleware('auth');

Route::post('/addcontenu/song', [FirstController::class, 'store_song'])->middleware('auth');

Route::post('/addcontenu/singer', [FirstController::class, 'store_singer'])->middleware('auth');

Route::post('/addcontenu/genre', [FirstController::class, 'store_genre'])->middleware('auth');

Auth::routes();