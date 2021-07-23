<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\SessionController;

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

Route::get('/', [ExampleController::class, 'index']);
// Route::get('/board', [BoardController::class, 'index']);
// Route::get('/example', [ExampleController::class, 'index']);
// Route::get('/session', [SessionController::class, 'ses_get']);
// Route::post('/session', [SessionController::class, 'ses_put']);
// Route::get('/example', [ExampleController::class, 'index'])->middleware('auth');
Route::get('example/auth', [ExampleController::class, 'getAuth']);
Route::post('example/auth', [ExampleController::class, 'postAuth']);


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
