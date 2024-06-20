<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisteredUserController;

//Frontend
Route::get('/', [FrontendController::class, 'index'])->name('home.index');
Route::get('/despre-noi', [FrontendController::class, 'about'])->name('about.index');
Route::get('/cadrul-normativ', [FrontendController::class, 'law'])->name('law.index');
Route::get('/contacte', [FrontendController::class, 'contacts'])->name('contacts.index');
Route::post('/trimite-mesaj', [MessageController::class, 'store'])->name('contact.message');
Route::get('/evenimente', [FrontendController::class, 'event'])->name('event.index');
Route::get('/eveniment-by/{category}', [FrontendController::class, 'category'])->name('event.category');
Route::get('/evenimente/{title}', [FrontendController::class, 'more'])->name('event.show');
Route::get('/echipa-noastra', [FrontendController::class, 'team'])->name('team.index');

Route::get('register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');