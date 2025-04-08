<?php

use App\Http\Controllers\EmailMessageClientController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
// use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('Pages.home');
})->name('home');
Route::get('/services', function () {
    return view('Pages.services');
})->name('services');
Route::post('/saveMessage', [EmailMessageClientController::class, 'saveMessageClient'])->name('saveMessage');

// Route::get('/monnom/{name}',function($name){
//     return "je m'appelle : $name";
// });
// Route::get('/monnom/{nom}/{prenom}',function($nom,$prenom){
//     return "Je m'appelle : $nom $prenom" ;
// });
// Route::get('/controller',[HomeController::class,'index']);
// Route::get('/blog',function(){
//     return [
//         "Link" => \route('blog.show');
//     ];
// })->name('blog.index');
// Route::view('/welcome','welcome');