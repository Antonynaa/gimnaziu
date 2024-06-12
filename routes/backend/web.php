<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\SlideshowController;
    use App\Http\Controllers\EventController;
    use App\Http\Controllers\SettingController;
    use App\Http\Controllers\TeamController;
    use App\Http\Controllers\LawController;
    use App\Http\Controllers\SectionController;
    use App\Http\Controllers\EventCategoryController;
 
    Route::middleware('auth')->group(function() {
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::resource('slideshows', SlideshowController::class);
        Route::resource('events', EventController::class);
        Route::resource('settings', SettingController::class);
        Route::resource('teams', TeamController::class);
        Route::resource('laws', LawController::class);
        Route::resource('sections', SectionController::class);
        Route::resource('event-category', EventCategoryController::class);
    });