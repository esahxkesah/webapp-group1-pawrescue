<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ParticipateController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DonateController;


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

//homepage
Route::get('/', function () {
    return view('mainpage');
});

//homepage
Route::get('/home', function () {
    return view('mainpage');
});

// DONATION
Route::resource( 'donate',  DonateController::class);


//EVENT
//route to page of all events
Route::get('/event', [EventController::class, 'index']);

// //route for individual events
Route::get('/event/{id?}', [EventController::class, 'getDetails'])-> name('event.details');

//route after clicking submit button to store the inputs
Route::resource('addevent', EventController::class);

//route to add event (ONLY FOR ADMINS)
Route::get('/add-event', function () {
    return view('add-event');
});


//ADOPTION
//route to page of all pets for adoption
Route::get('/adopt', [PetController::class, 'index']);

//route for individual pets
Route::get('/adopt/{id}', [PetController::class, 'getDetails'])-> name('pet.details');

//route to add pet for adoption (ONLY FOR ADMINS)
Route::get('/add-pet', function () {
    return view('add-pet');
});

//route after clicking submit button to store the inputs
Route::resource('addpet', PetController::class);

//REPORT
//add report open to every members
Route::get('/add-report',function(){
    return view('add-report');
});

Route::resource('report', ReportController::class);



//AUTH
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/mainpage', function () {
        return view('mainpage');
    })->name('mainpage');

    Route::group(['middleware' => ['authenticate', 'roles']], function (){
        Route::get('/profile', 'DashboardController@dashboard')->name('dashboard');
    });
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

