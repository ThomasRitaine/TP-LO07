<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VinsController;

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

Route::view('/','welcome');

//Route::get('/vin', 'VinsController@index');
// le premier argument de la méthode get de la classe Route est l'URL après le "nom_de_l'appli.test",
// le deuxième est ce qui doit être fait, ici appeler la méthode "index" du controlleur "VinsController"
// Pour pouvoir utiliser le controlleur, il faut ajouter "use App\Http\Controllers\VinsController;" au début du fichier


/*  Routes des vins     */

Route::get('vins', 'VinsController@index');
Route::get('vins/create', 'VinsController@create');
Route::post('vins', 'VinsController@store');
Route::get('vins/{vin}', 'VinsController@show');
Route::delete('vins/{vin}', 'VinsController@destroy');