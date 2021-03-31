<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [ManagementUserController::class, 'index']);
//Route::get('/home', [ManagementUserController::class, 'home']);

//Route::resource('user', 'ManagementUserController');

/*Route::get("/home", function(){
    return view("home");
});*/

/*Route::get("/home", function(){
    return view("frontend.home");
});*/

/*Route::group(['namespace' => 'Frontend'], function()
{
    Route::resource('home', 'HomeController');
});*/

/*Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('dashboard', 'DashboardController');
});*/

Route::get("/dashboard", function(){
    return view("backend.dashboard");
});