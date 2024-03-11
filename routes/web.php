<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OffcanvasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/admin', function () {
//     // Only users with the 'admin' role can access this route
// })->middleware('auth', 'role:admin');
////:::
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', [EventController::class,'show'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/events',[EventController::class,'Myevents'])->name('events');
// Route::post('/dashboard',[EventController::class,'store'])->name('NewEvent');
// Route::patch('/dashboard/update/{id}',[EventController::class,'update'])->name('UpdateEvent');
// Route::delete('/dashboard/{id}/deletevent',[EventController::class,'distroy'])->name('DeleteEvent');
// // Route::get('/offcanvas',[OffcanvasController::class,'show'])->name('offcanvas');
// Route::get('/eventdetails/{id}', [EventController::class,'showeventdetails'])->middleware(['auth', 'verified'])->name('eventdetails');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// here admin
Route::get('/adminhome',[CategoryController::class,'index'])->name('adminhome');
Route::post('/adminhome',[CategoryController::class,'store'])->name('add_category');
Route::put('/adminhome/{category}', [CategoryController::class, 'update'])->name('update_category');
Route::delete('/adminhome/{category}/destroy', [CategoryController::class, 'destroy'])->name('destroy_category');

//her orga
Route::get('/events', [EventController::class, 'index'])->name('organisteurhome');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}/destroy',[EventController::class,'destroy'])->name('events.delete');

require __DIR__.'/auth.php';



