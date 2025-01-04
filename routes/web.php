<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

// Default:
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [TodoListController::class, 'index']);

// First example of post route
// Route::post('/saveItem',function(){
//     return view('welcome');
// })->name('saveItem'); // name of route

Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}', [TodoListController::class, 'markComplete'])->name('markComplete');