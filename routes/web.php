
<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    $user = App\User::find(7);
    // dd($user->adress);

    $profile = App\Profile::with('user')->where('id', '=', 7)->get('adress');

    $pro = App\Profile::whereBelongsTo($user)->get();
    dd($pro);

});
Auth::routes();

Route::get('/user/home', [UserController::class, 'index'])->name('user.home');

//message
Route::get('/messages/store', [MessageController::class, 'store'])->name('message.store');
Route::get('/messages', [MessageController::class, 'index']);
Route::get('/message/{id}', [MessageController::class, 'show']);
Route::get('/message/update/{id}', [MessageController::class, 'update']);
