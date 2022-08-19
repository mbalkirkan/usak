<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\Pages\IndexController::class, 'index'])->name('index');


Route::controller(\App\Http\Controllers\Auth\AuthController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'login')->name('login');
});

Route::middleware([Authenticate::class])->group(function () {
    Route::controller(\App\Http\Controllers\Admin\Pages\IndexController::class)->group(function () {

        /**
         * Slider
         */
        Route::get('/s-admin/pages/index/slider', 'slider')->name('admin.pages.index.slider');
        Route::post('/s-admin/pages/index/slider-create', 'sliderCreate')->name('admin.pages.index.slider-create');
        Route::post('/s-admin/pages/index/slider-delete', 'sliderDelete')->name('admin.pages.index.slider-delete');
        Route::post('/s-admin/pages/index/slider-update', 'sliderUpdate')->name('admin.pages.index.slider-update');


        /**
         * About
         */

        Route::get('/s-admin/pages/index/about', 'about')->name('admin.pages.index.about');
        Route::post('/s-admin/pages/index/about-update', 'aboutUpdate')->name('admin.pages.index.about-update');


        /**
         * Numbers
         */

        Route::get('/s-admin/pages/index/numbers', 'numbers')->name('admin.pages.index.numbers');
        Route::post('/s-admin/pages/index/numbers-update', 'numbersUpdate')->name('admin.pages.index.numbers-update');


    });

    Route::controller(\App\Http\Controllers\Admin\Pages\NewsController::class)->group(function () {

        /**
         * News
         */

        Route::get('/s-admin/pages/news', 'index')->name('admin.pages.news');
        Route::post('/s-admin/pages/news-create', 'newsCreate')->name('admin.pages.news-create');
        Route::post('/s-admin/pages/news-delete', 'newsDelete')->name('admin.pages.news-delete');
        Route::post('/s-admin/pages/news-update', 'newsUpdate')->name('admin.pages.news-update');
    });


    Route::controller(\App\Http\Controllers\Admin\Helpers\UploadController::class)->group(function () {
        Route::post('/s-admin/slider/upload', 'sliderUpload')->name('admin.slider.upload');
        Route::post('/s-admin/slider/delete', 'sliderDelete')->name('admin.slider.delete');

        Route::post('/s-admin/about/upload', 'aboutUpload')->name('admin.about.upload');

        Route::post('/s-admin/ckeditor/upload', 'ckeditorUpload')->name('admin.ckeditor.upload');
        Route::post('/s-admin/news/upload', 'newsUpload')->name('admin.news.upload');
        Route::post('/s-admin/news/delete', 'newsDelete')->name('admin.news.delete');
    });

});
