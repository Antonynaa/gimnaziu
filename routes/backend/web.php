<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\SlideshowController;
    use App\Http\Controllers\EventController;
 
    Route::middleware('auth')->group(function() {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::resource('slideshows', SlideshowController::class);
        Route::resource('events', EventController::class);
    });