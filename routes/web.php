<?php

use Illuminate\Support\Facades\Route;
use App\Student;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TestController;


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

Route::get('/light', 'LightController@index')->name('light');
Route::get('/sales', 'SalesDashboardController@index')->name('sales');
Route::get('/chat', 'ChatController@index')->name('chat')->middleware('auth');
Route::livewire('/blog', 'blog')->name('blog');
Route::livewire('/blog-details', 'blog-details')->name('blog-details');
Route::livewire('/chat/{id}/show', 'chat-show')->name('chat.show')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/formulaire', [FormController::class, 'index']);

Route::post('/formulaire', [FormController::class, 'post']);


route::get('/test',[TestController::class, 'afficher']);
route::post('/test',[TestController::class,'envoyer']);