<?php

use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});

Route::get('/polls/create', [PollController::class, 'create'])->name('polls.create');
Route::get('/polls', [PollController::class, 'index'])->name('polls.index');
Route::get('/polls/show/{poll}', [PollController::class, 'show'])->name('polls.show');

require __DIR__.'/auth.php';
