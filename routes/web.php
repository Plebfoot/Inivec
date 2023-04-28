<?php


use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtistCallController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistViewController;


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

/*----------------Normal Routes---------------------*/

Route::get('/', function () { return view('welcome'); });
Route::get('/inschrijven', function () { return view('/pages/inschrijven'); });
Route::get('/artiesten', function () { return view('/pages/artiesten'); });
Route::get('/oproep/new', function () { return view('/pages/oproep'); });
Route::get('/oproep/bedankt', function () { return view('/pages/thankyou'); })->name('artist_calls.thankyou');


/*----------------Controller Routes---------------------*/

Route::get('/',[ArtistViewController::class, 'Index']);
Route::get('/artiesten',[ArtistViewController::class, 'Artists']);
Route::get('/arsitesten/{username}', [ArtistController::class, 'Index']);
Route::post('/oproep/new', [ArtistCallController::class, 'store'])->name('artist_calls.store');
Route::get('/arsitesten/{username}/boeken', [ArtistController::class, 'Index']);
Route::get('/artiesten/{username}', 'App\Http\Controllers\ProfilesController@show')->name('profiles');
Route::get('/artiesten/{username}/boeken', 'App\Http\Controllers\ProfilesController@boek')->name('booking');
Route::get('/events/{eventnaam}', 'App\Http\Controllers\ProfilesController@event')->name('event');
Route::post('/users/profile_management', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update.profile');


/*----------------Auth Routes---------------------*/

Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');;
Route::group(['middleware' => 'auth'], function() {Route::get('/instellingen', function() {return view('/users/profile_management');  }); Route::get('/calls',[ArtistCallController::class, 'index']); });
