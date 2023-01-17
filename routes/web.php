<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('mainpage');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/add-event', function () {
    return view('add-event');
});

//route after clicking submit button
Route::resource('addevent', EventController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('mainpage');
    })->name('mainpage');

    Route::group(['middleware' => ['authenticate', 'roles']], function (){
        Route::get('/mainpage', 'DashboardController@dashboard')->name('dashboard');
    });
});



Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

