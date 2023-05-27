<?php

use App\Http\Controllers\MyTeamController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Roles;

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
});

Route::get('/users', function() {
    $users = User::all();
    // return response($user);
    return view('users', compact('users'));
})->middleware(['auth', 'verified'])->name('users');

// Route::get('/myteam', function() {
//     $roles = Roles::all();
//     dd($roles);
//     return view('myteam', compact('roles'));
// })->middleware(['auth', 'verified'])->name('myteam');

Route::get('/myteam', [MyTeamController::class, 'index'])->middleware(['auth', 'verified'])->name('myteam');
Route::post('/myteam', [MyTeamController::class, 'store'])->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/search', [ProfileController::class, 'search'])->name('search.user');
// Route::delete('/dashboard/{$id}', [ProfileController::class, 'delete'])->name('delete.user');


require __DIR__.'/auth.php';
