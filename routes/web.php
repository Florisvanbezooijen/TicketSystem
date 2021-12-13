<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\PageController;
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
    return view('welcome');
});

Route::get('/testroute', function () {
    return view('testroute');
})->name('testroute');

Route::get('/testroute2', function () {
    return view('testroute2');
})->name('testroute2');

Route::get('/events', [PageController::class, 'events'])->name('events');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::resource('events', EventsController::class);
});

route::get('events/{id}/order', [\App\http\Controllers\TicketController::class, 'order'])
    ->middleware(['auth'])
    ->name('events.orderTicket');

route::post('events/{id}/order', [\App\http\Controllers\TicketController::class, 'store'])
    ->middleware(['auth'])
    ->name('events.storeOrderTicket');




require __DIR__.'/auth.php';
