<?php
Auth::routes();
Route::get('register', function () {
    return redirect('register');
});
Route::get('password/reset', function () {
    return redirect('login');
});
require_once 'frontend/web.php';
require_once 'backend/web.php';

