<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'role:manager']], function () { // Роуты для менеджера
    Route::get('/manager/home', [ManagerController::class, 'home'])->name('manager.home');
    Route::get('/manager/history', [ManagerController::class, 'history'])->name('manager.history');
    // Route::post('/manager/updateRequest', function () {
    //     return 'Jora';
    // })->name('manager.updateRequest');
    Route::post('/manager/updateRequest', [ManagerController::class, 'updateRequest'])->name('manager.updateRequest');
});

Route::group(['middleware' => ['auth', 'role:client']], function () { // Роуты для клиента
    Route::get('/client/home', [ClientController::class, 'home'])->name('client.home');
    Route::get('/client/history', [ClientController::class, 'history'])->name('client.history');
    Route::post('/client/createRrequest', [ClientController::class, 'createRequest'])->name('client.createRequest');
});
