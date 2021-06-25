<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodosController;
use Illuminate\Routing\RouteRegistrar;
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
    return view('welcome');
});

Route::get('/about',[AboutController::class,'index']);
Route::get('/todos',[TodosController::class,'index']);
Route::get('todos/{todo}',[TodosController::class,'show']);
Route::get('/create',[TodosController::class,'create']);
Route::post('store-todos',[TodosController::class,'store']);

Route::get('/todos/{todo}/edit',[TodosController::class,'edit']);
Route::post('/todos/{todo}/update-todos',[TodosController::class,'update']);
Route::get('/todos/{todo}/delete',[TodosController::class,'delete']);
Route::get('todos/{todo}/complete',[TodosController::class,'complete']);
