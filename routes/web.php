<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RouteController::class, 'index']);
Route::get('/dashboard', [RouteController::class, 'loggedin'])->middleware('auth');
Route::get('/dashboard', [NotesController::class, 'index']);

Route::post('/note', [NotesController::class, 'create']);
Route::get('/dashboard/view/{id}', [NotesController::class, 'read']);
Route::get('/dashboard/edit/{id}', [NotesController::class, 'edit']);
Route::patch('/dashboard/patch/{id}', [NotesController::class, 'update']);
Route::delete('/dashboard/delete/{id}', [NotesController::class, 'delete']);