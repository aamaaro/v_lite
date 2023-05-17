<?php

use App\Http\Livewire\PosController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CoinsController;
use App\Http\Livewire\RolesController;
use App\Http\Livewire\UsersController;
use App\Http\Livewire\AssignController;
use App\Http\Livewire\CashoutController;
use App\Http\Livewire\ReportsController;
use App\Http\Livewire\ProductsController;
use App\Http\Controllers\ExportController;
use App\Http\Livewire\CategoriesController;
use App\Http\Livewire\PermissionsController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', CategoriesController::class)->name('categories');
Route::get('/products', ProductsController::class)->name('products');
Route::get('/coins', CoinsController::class)->name('coins');
Route::get('/pos', PosController::class)->name('pos');
Route::get('/roles', RolesController::class)->name('roles');
Route::get('/permissions', PermissionsController::class)->name('permissions');
Route::get('/assign', AssignController::class)->name('assign');
Route::get('/users', UsersController::class)->name('users');
Route::get('/cashout', CashoutController::class)->name('cashout');
Route::get('/reports', ReportsController::class)->name('reports');
Route::get('/report/pdf/{user}/{type}/{f1}/{f2}', [ExportController::class, 'reportPDF'])->name('reportpdf');
Route::get('/report/pdf/{user}/{type}', [ExportController::class, 'reportPDF'])->name('reportpdf');
