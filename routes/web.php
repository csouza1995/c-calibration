<?php

use App\Livewire\Home;
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

// home
Route::get('/', Home::class)->name('home');

// versions
Route::name('versions.')->prefix('versions')->group(base_path('routes/web/info/versions.php'));

// instructions
Route::name('instructions.')->prefix('instructions')->group(base_path('routes/web/info/instructions.php'));
