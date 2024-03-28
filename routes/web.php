<?php

use App\Http\Controllers\BookmarkEventController;
use App\Http\Controllers\BookmarkEventMechanismController;
use App\Http\Controllers\DeleteMessageController;
use App\Http\Controllers\DiscoverEventsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\LikedEventController;
use App\Http\Controllers\LikeMechanismController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RsvpEventsController;
use App\Http\Controllers\RsvpEventsMechanismController;
use App\Http\Controllers\StoreMessageController;
use App\Models\EventCategory;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/events/discover', DiscoverEventsController::class)->name('discover');
    Route::get('/events/info/{id}', EventDetailsController::class)->name('event.details');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/manage/users', UserController::class);
    Route::resource('/manage/events', EventController::class);

    Route::get('/events/upcoming-events', RsvpEventsController::class)->name('events.rsvpEvents');
    Route::get('/events/liked-events', LikedEventController::class)->name('events.likedEvents');
    Route::get('/events/saved-events', BookmarkEventController::class)->name('events.bookmarkEvents');

    Route::post('/events/booked/{id}', RsvpEventsMechanismController::class)->name('events.booking');
    Route::post('/events/liked/{id}', LikeMechanismController::class)->name('events.like');
    Route::post('/events/saved/{id}', BookmarkEventMechanismController::class)->name('events.bookmarkEvent');
    
    Route::post('/events/{id}/messages', StoreMessageController::class)->name('events.messages');
    Route::delete('/events/{id}/messages/{message}', DeleteMessageController::class)->name('events.messages.destroy');

    Route::get('/categories/{category}', function (EventCategory $category) {
        return response()->json($category);
    });
    
});

require __DIR__.'/auth.php';
