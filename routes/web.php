<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\MailController;

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


Route::get('/projects',function(){
    return view('projects');
});

Route::get('/','CategoriesController@index');
Route::get('/test','CategoriesController@test');

Route::post('mail', [MailController::class,'store'])->name('mail');
