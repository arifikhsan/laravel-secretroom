<?php

use Arifikhsan\LaravelSecretroom\app\Http\Controllers\SecretroomController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
  Route::get('secretroom', [SecretroomController::class, 'overview'])->name('secretroom-overview');
});
