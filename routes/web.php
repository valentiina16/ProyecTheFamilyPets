<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/', function (){
    return view('interfazprincipal');
})->name('interfazprincipal');

Route::get('/home', function () {
  return view('home');
})->middleware(['auth'])->name('home');

//Route::get('/home', function () {
 //   return view('home');
//});

//Route::middleware(['auth:sanctum','verified'])->get('/home',function(){
//    return view('home');
//})->middleware(['verified'])->name('home');

//Route::get('/email/verify', function () {
 //   return view('auth.verify-email');
//})->middleware('auth')->name('verification.notice');

//Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  //  $request->fulfill();
 
 //   return redirect('/home');
///})->middleware(['auth', 'signed'])->name('verification.verify');

//Route::post('/email/verification-notification', function (Request $request) {
  //  $request->user()->sendEmailVerificationNotification();
 
  //  return back()->with('message', 'Verification link sent!');
//})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/interfazprincipal', [App\Http\Controllers\MainInterfaceController::class, 'index'])->name('interfazprincipal');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adopcion', [App\Http\Controllers\AdoptController::class, 'index'])->name('adopcion');

Route::get('/ayuda', [App\Http\Controllers\AidController::class, 'index'])->name('ayuda');
//Route::get('/informacionmasc', [App\Http\Controllers\PetInformationController::class, 'index'])->name('informacionmasc');


//Route::get('/{id}', [App\Http\Controllers\PetInformationController::class, 'informacionmasc'])->name('informacionmasc');


Route::group(['middleware' => ['auth']], function() {

    

//Admin
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

//userperfil
Route::get('editUser', [\App\Http\Controllers\UserController::class, 'editUser'])->name('perfil.edit');
Route::get('getUser', [\App\Http\Controllers\UserController::class, 'getUser'])->name('perfil.show');
Route::put('updateUser', [\App\Http\Controllers\UserController::class, 'updateUser'])->name('perfil.update');

//useradmin
Route::get('getAdmin', [\App\Http\Controllers\UserController::class, 'getAdmin'])->name('perfiladmin.show');

//MASCOTA

Route::resource('pets', App\Http\Controllers\PetController::class);

//FUNDACION
Route::get('getFundation', [App\Http\Controllers\UserController::class, 'getFundation'])->name('foundations.index');
//Route::resource('foundations', App\Http\Controllers\FoundationController::class);
//Route::get('getFundation',[\App\Http\Controllers\UserController::class,'getFundation'] )->name('foundations.index');

//calendario
Route::resource('calendars', App\Http\Controllers\CalendarController::class);



//Preadopción
Route::resource('preadoption', App\Http\Controllers\PreadoptionController::class);
Route::get('getPet/{pet}',[App\Http\Controllers\PreadoptionController::class,'getPet'])->name('getPet')->middleware('auth');



//Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);



});
