<?php


use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistViewController;
use App\Http\Controllers\ProfilesController;

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
Route::get('/inschrijven', function () { return view('inschrijven'); });
Route::get('/artiesten', function () { return view('artiesten'); });



/*----------------Artist Routes---------------------*/
Route::get('/',[ArtistViewController::class, 'Index']);
Route::get('/arsitesten/{username}', [ArtistController::class, 'Index']);
Route::get('/artiesten/{username}', 'App\Http\Controllers\ProfilesController@show')->name('profiles');


/*----------------Auth Routes---------------------*/
Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function() {Route::get('/instellingen', function() {return view('/users/profile_management'); }); });
