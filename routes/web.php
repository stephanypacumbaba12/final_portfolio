<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;



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





Route::get('unreadcount', function () {
    $count = auth()->user()->getMessageCount();
    return response()->json(['count'=>$count]);
   
})->name('unreadcount');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'


])->group(function () {
    Route::get('/dashboard', function () {
        $users = \App\Models\User::all();
        return view('dashboard', compact('users')); // Pass $users to the view
    })->name('dashboard');
});


Route::resource('resumes', ResumeController::class);

Route::get('/users/search', [UserController::class, 'search'])->name('users.search');

Route::get('/logout',  [UserController::class, 'logout'])->name('logout');

