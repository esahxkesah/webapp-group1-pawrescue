<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\Controller;

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

Route::get('/homepage', function () {
    return view('mainpage');
});

//route to page of all events
Route::get('/event', [EventController::class, 'index']);

// //route for individual events
Route::get('/event/{id}', [EventController::class, 'getDetails'])-> name('event.details');

//route to page of all pets for adoption
Route::get('/adopt', [PetController::class, 'index']);

//route for individual pets
Route::get('/adopt/{id}', [PetController::class, 'getDetails'])-> name('pet.details');

//route to add event (ONLY FOR ADMINS)
Route::get('/add-event', function () {
    return view('add-event');
});

//route to add pet for adoption (ONLY FOR ADMINS)
Route::get('/add-pet', function () {
    return view('add-pet');
});

//route after clicking submit button to store the inputs
Route::resource('addevent', EventController::class);
Route::resource('addpet', PetController::class);

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

