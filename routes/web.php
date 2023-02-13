<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return 'ngak ngik ngok gomenasai 🐷🐷🐷🐷';
});
Route::get('/user', [UserController::class, "index"]);
Route::get('/server', [ProvisionServer::class, "__invoke"]);
Route::get('/photo', [PhotoController::class, "create"]);