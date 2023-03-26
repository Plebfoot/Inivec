<?php


use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistViewController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\admin\ArtistControllerAdmin;

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



/*----------------Controller Routes---------------------*/
Route::get('/',[ArtistViewController::class, 'Index']);
Route::get('/artiesten',[ArtistViewController::class, 'Artists']);
Route::get('/arsitesten/{username}', [ArtistController::class, 'Index']);
Route::get('/arsitesten/{username}/boeken', [ArtistController::class, 'Index']);
Route::get('/artiesten/{username}', 'App\Http\Controllers\ProfilesController@show')->name('profiles');
Route::get('/artiesten/{username}/boeken', 'App\Http\Controllers\ProfilesController@boek')->name('booking');
Route::post('/users/profile_management', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update.profile');


/*----------------Auth Routes---------------------*/
Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');;
Route::group(['middleware' => 'auth'], function() {Route::get('/instellingen', function() {return view('/users/profile_management'); }); });
