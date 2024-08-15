<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () use ($router) {
    // return view('welcome');
    $user = User::all();
    return $user;
    // dd($router);
});

Route::get('/version', function () {
    return app()->version();
});

Route::get('/users', [UserController::class, 'index']);

Route::group(['prefix' => 'api/v1/'], function () {
    Route::get('test', function () {
        return 'hello';
    });

    Route::get('/users', [UserController::class, 'index']);
});
