<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchAutoCompleteController;
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


Route::get('/', [SearchAutoCompleteController::class, 'index']);
Route::get('/autocomplete-search', [SearchAutoCompleteController::class, 'autocompleteSearch']);
