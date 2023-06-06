<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\User\Http\Controllers\Back\UserController;

Route::resource('users', UserController::class)->except(['show']);
Route::prefix('users')->as('users.')->group(function () {
    Route::get('trashed/list', [UserController::class, 'trashed'])->name('trashed.index');
    Route::patch('trashed/restore/{user}', [UserController::class, 'trashedRestore'])->name('trashed.restore');
    Route::delete('trashed/destroy/{user}', [UserController::class, 'trashedDestroy'])->name('trashed.destroy');
});
