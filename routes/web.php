<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\adddatacontroller;
use App\Http\Controllers\conducteurController;
use App\Http\Controllers\vehiculeController;
use App\Http\Controllers\SalesController;

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
    return view('layout.acceuil');
});



 Route::get('/conducteur', function () {
    return view('layout.conducteur'); 
});



// Route::get('/vehicule', function () {
//     return view('layout.vehicule'); 
// });
Route::get('/ren', function () {
    return view('layout.ren');
});

// Route::get('/vehicule', [vehiculeController::class,'load']);
Route::post('/vehicule', [vehiculeController::class,'DataInsert']);



Route::get('/vehicule', [DropdownController::class, 'index']);
Route::post('api/fetch-modules', [DropdownController::class, 'fetchmodule']);


Route::get('/add', [adddatacontroller::class,'add']);
Route::post('dataInsert', [adddatacontroller::class,'DataInsert']);



Route::get('/conducteur', [conducteurController::class,'conducteur']);
Route::post('dataInsert1', [conducteurController::class,'DataInsert']);



Route::post('dataInsert2', [vehiculeController::class,'DataInsert']);


Route::get('/ren',[SalesController::class,'show']);


// new code
Route::get('souscripteur/{id}/vehicule', [DropdownController::class, 'index']);