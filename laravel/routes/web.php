<?php

use App\Http\Controllers\Auth\AdministratorSessionController;
use App\Http\Controllers\ProfileController;
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

Route::group(['prefix' => 'admins'], function () {
    Route::get('/', function () {
        return view('admins.top');
    })->name('admins.top');

    Route::get('login', [AdministratorSessionController::class, 'create'])->name('admins.login');
    Route::post('login', [AdministratorSessionController::class, 'store'])->name('admins.authentication');
    Route::post('logout', [AdministratorSessionController::class, 'destroy'])->name('admins.logout');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/index', function () {
            return view('admins.index');
        })->name('admins.index');
    });
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', function () {
        return view('users.top');
    })->name('users.top');

    Route::middleware('auth')->group(function () {
        Route::get('/index', function () {
            return view('users.index');
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
