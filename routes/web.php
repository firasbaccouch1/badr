<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Lang;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware(Lang::class);

Route::get('/changeAr', function () {
    session(['my_locale' => 'ar']);
    Artisan::call('optimize:clear');
    return redirect()->back();
})->name('changeAr');

Route::get('/changeEn', function () {
    session(['my_locale' => 'en']);
    Artisan::call('optimize:clear');
    return redirect()->back();
})->name('changeEn');


Route::get('/blog/{category}',[CategoryController::class,'index'])->name('blog')->middleware(Lang::class);
