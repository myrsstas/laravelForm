<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactsController;

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


// CRUD -> Create, Read, Update, Delete
// HTTP Model -> Post, Get, Put, Delete
// Post -> Mutate the backend data (primary, create a new record , change DataBase )
// Get -> Read the backend data (by id or search model)
// Put/Update -> Mutate the backend data (primary, update existing record)
// Delete -> Mutate the backend data (primary, remove existing record)

Route::get('/', [IndexController::class ,'index']);
Route::post('/upload', [ContactsController::class, 'upload']);
Route::post('/startFromZero', [ContactsController::class, 'startFromZero']);
Route::get('/contacts', [ContactsController::class, 'contacts']);
Route::get('/contacts/add', [ContactsController::class, 'addContact']);
Route::post('/contacts/add', [ContactsController::class, 'storeContact']);
Route::get('/contacts/export', [ContactsController::class, 'exportData']);
