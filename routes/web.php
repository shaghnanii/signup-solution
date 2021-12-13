<?php

use App\Facades\Base\WidgetPackFacade;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Widget\WidgetController;
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

//Route::get('/test', function() {
//   return WidgetPackFacade::calculate();
//});

Route::redirect('/', 'home');
Route::resource('/home', HomeController::class)->only(
    [
        'index'
    ]
);

Route::resource('/packs', WidgetController::class)->only(
    [
        'index',
        'store'
    ]);
