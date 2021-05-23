<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\UserController;
use App\Models\Verificator;
use App\Http\Controllers\VerificatorController;
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
    $verificator = Verificator::all()->first();
    return view('welcome', compact('verificator'));
});
Route::get('/register', [UserController::class, 'create'])->name('register.user');
Route::post('/register/action', [UserController::class, 'store'])->name('store.user');
Route::post('/login/action', [UserController::class, 'validateLogin'])->name('validate.user');
Route::get('/login',[UserController::class, 'loginPage'])->name('login');
Route::get('/user', [UserController::class, 'userPage'])->name('user');
Route::get('/user/registerEnterprise', [EnterpriseController::class, 'create'])->name('register.enterprise');
Route::get('/user/search-enterprise-by-federation', [EnterpriseController::class, 'showByFederation'])->name('searchByF.enterprise');
Route::get('/user/search-enterprise-by-name', [EnterpriseController::class, 'showByName'])->name('searchByN.enterprise');
Route::post('/user/registerEnterprise/action', [EnterpriseController::class, 'store'])->name('store.enterprise');
Route::get('/user/logout', [VerificatorController::class, 'destroy'])->name('user.logout');
Route::get('/user/configuration', [UserController::class, 'configPage'])->name('user.config');
Route::post('user/configuration/action-delete', [UserController::class, 'destroy'])->name('user.destroy');
Route::post('/user/configuration/action-up-email', [UserController::class, 'updateEmail'])->name('user.alter.email');
Route::post('/user/configuration/action-up-password', [UserController::class, 'updatePassword'])->name('user.alter.password');
Route::post('/user/delete-enterprise', [EnterpriseController::class, 'destroy'])->name('enterprise.delete');
Route::get('/enterprise/edit', [EnterpriseController::class, 'pageEdit'])->name('enterprise.edit');
Route::post('/enterprise/edit-name', [EnterpriseController::class, 'updateName'])->name('enterprise.alter.name');
Route::post('/enterprise/edit-federation', [EnterpriseController::class, 'updateFederation'])->name('enterprise.alter.federation');