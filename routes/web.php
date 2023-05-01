<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
//use User;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manis', function(){

   $users = User::all();
    //$users = DB::table('users')->where('id', 1)->first();
    dd($users);
});
/*
Route::get('/{any}', function () {
    return view('archis');
})->where("any",".*");
*/
