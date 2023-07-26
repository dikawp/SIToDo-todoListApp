<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WorkspaceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});


// Workspaces
Route::middleware(['auth'])->group(function () {
    Route::get('/workspace', [WorkspaceController::class, 'index'])->name('workspace');
    Route::get('getWorkspaces', [WorkspaceController::class, 'getData'])->name('workspaces.getData');
});

// Tasks
Route::middleware(['auth'])->group(function () {
    Route::get('/task', [TaskController::class, 'index'])->name('task');
});