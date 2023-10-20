<?php

use App\Http\Controllers\GitHubController;
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

Route::get('/api/github/{owner}/{name}', [GitHubController::class, 'show']);
Route::get('/api/github/delete/{owner}/{name}', [GitHubController::class, 'delete']);
Route::get('/api/github/{owner}/{name}/languages', [GitHubController::class, 'showLanguages']);




Route::get('/', function () {
    return view('welcome');
});
