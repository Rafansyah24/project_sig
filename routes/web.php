<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\EmployeController;


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
    return view('login');
});


// Route::get('/table', function () {
//     return view('table');
// });
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

Route::group(['middleware' => ['auth', 'level:admin']], function() {
    Route::get('/dashboard', [ViewController::class, 'dashboard'])->name('dashboard');
    Route::get('/table',[MonitoringController::class,'table']);
});

Route::group(['middleware' => ['auth', 'level:user']], function() {
    Route::get('/dashboard/user', [ViewController::class, 'dashboarduser'])->name('dashboarduser');
    Route::get('/table/user',[MonitoringController::class,'tableuser']);
});



