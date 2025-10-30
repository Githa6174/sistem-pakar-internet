<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertSystemController;

Route::get('/', [ExpertSystemController::class, 'index']);
Route::get('/start', [ExpertSystemController::class, 'start']);
Route::post('/diagnose', [ExpertSystemController::class, 'process']);
Route::get('/result/{diagnosis}', [ExpertSystemController::class, 'showResult'])->name('result');