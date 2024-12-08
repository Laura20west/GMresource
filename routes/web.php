<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Con;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
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
    return view('index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/mid', function () {
    return view('mid');
});
Route::get('/part', function () {
    return view('part');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/feature', function () {
    return view('feature');
});
Route::get('/track', function () {
    return view('track');
});
Route::get('/subsidiaries', function () {
    return view('subsidiaries');
});
Route::get('/career', function () {
    return view('career');
});


Route::post('/addcontact', [ContactController::class, 'add']);
Route::post('/addcareer', [CareerController::class, 'add']);

Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers','middleware' => ['auth', 'permission']], function()
{
    Route::get('/dashboard', [Con\HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [Con\HomeController::class, 'profile'])->name('users.profile');
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');
    Route::get('/display', [CareerController::class, 'index'])->name('display');
    Route::get('/displays', [ContactController::class, 'index'])->name('displays');
    Route::get('/del/{id}', [ContactController::class, 'delete']);

    Route::get('/delete/{id}', [ProjectController::class, 'delete']);
    Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('dedit');
    Route::post('/edit/{id}', [ProjectController::class, 'update']);
    Route::post('/addproject', [ProjectController::class, 'add']);

    Route::resources([
        'roles' => Con\RoleController::class,
        'users' => Con\UserController::class,
        'permissions'=>Con\PermissionController::class
    ]);
});
