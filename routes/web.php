<?php

use App\Http\Livewire\Backend\Chat\ChatComponent;
use App\Http\Livewire\Backend\Dashboard\DashboardComponent;
use App\Http\Livewire\Backend\Request\RequestComponent;
use App\Http\Livewire\Backend\UserManagement\ManageUsersComponent;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified', 'role:Super Admin|Student|Support Agent'])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/chat/{request}', ChatComponent::class)->name('chat');

});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified', 'role:Super Admin'])->group(function () {
    Route::get('/manage-users', ManageUsersComponent::class)->name('manage.users');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified', 'role:Student'])->group(function () {
   Route::get('/submit-request',RequestComponent::class)->name('submit-request');
});

Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');

