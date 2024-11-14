<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', function () {
//     return 'Welcome to Admin Page';
// })->middleware('role:manager');
// Route::middleware(['auth'])->group(function () {

// });
Route::group(['middleware' => ['auth', 'role:manager']], function () { // Роуты для менеджера
    Route::get('/manager/home', [ManagerController::class, 'home'])->name('manager.home');
    Route::get('/manager/history', [ManagerController::class, 'history'])->name('manager.history');
});

Route::group(['middleware' => ['auth', 'role:client']], function () { // Роуты для клиента
    Route::get('/client/home', [ClientController::class, 'home'])->name('client.home');
    Route::get('/client/history', [ClientController::class, 'history'])->name('client.history');
});
