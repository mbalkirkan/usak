<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


Route::controller(\App\Http\Controllers\Auth\AuthController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'login')->name('login');

    Route::get('/auth/kimlik', 'redirect2kimlik');
    Route::get('/auth/callback', "kimlik_callback");
});


Route::get('/', [\App\Http\Controllers\Pages\IndexController::class, 'index'])->name('index');
Route::get('/tr', [\App\Http\Controllers\Pages\IndexController::class, 'index'])->name('tr.index');
Route::get('/en', [\App\Http\Controllers\Pages\IndexController::class, 'en_index'])->name('en.index');


Route::controller(\App\Http\Controllers\Pages\NewsController::class)->group(function () {
    Route::get('/pages/news', 'index')->name('pages.news');
    Route::get('/pages/news/{id?}', 'news')->name('pages.news.single');

    Route::get('/en/pages/news', 'en_index')->name('en.pages.news');
    Route::get('/en/pages/news/{id?}', 'en_news')->name('en.pages.news.single');
});


Route::controller(\App\Http\Controllers\Pages\CollaborationController::class)->group(function () {
    Route::get('/pages/collaboration', 'index')->name('pages.collaboration');
    Route::get('/pages/collaboration/{id?}', 'collaboration')->name('pages.collaboration.single');

    Route::get('/en/pages/collaboration', 'en_index')->name('en.pages.collaboration');
    Route::get('/en/pages/collaboration/{id?}', 'en_collaboration')->name('en.pages.collaboration.single');
});


Route::controller(\App\Http\Controllers\Pages\ActivityController::class)->group(function () {
    Route::get('/pages/activity', 'index')->name('pages.activity');
    Route::get('/pages/activity/{id?}', 'activity')->name('pages.activity.single');


    Route::get('/en/pages/activity', 'en_index')->name('en.pages.activity');
    Route::get('/en/pages/activity/{id?}', 'en_activity')->name('en.pages.activity.single');
});


Route::controller(\App\Http\Controllers\Pages\DynamicPageController::class)->group(function () {

    Route::get('/pages/dynamic/{slug?}', 'index')->name('pages.dynamic');

    Route::get('/en/pages/dynamic/{slug?}', 'en_index')->name('en.pages.dynamic');
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

        Route::controller(\App\Http\Controllers\Admin\Pages\TeamController::class)->group(function () {

            /**
             * Team
             */

            Route::get('/s-admin/pages/team', 'index')->name('admin.pages.team');
            Route::post('/s-admin/pages/team-create', 'teamCreate')->name('admin.pages.team-create');
            Route::post('/s-admin/pages/team-delete', 'teamDelete')->name('admin.pages.team-delete');
            Route::post('/s-admin/pages/team-update', 'teamUpdate')->name('admin.pages.team-update');
        });


        Route::controller(\App\Http\Controllers\Admin\Pages\CollaborationController::class)->group(function () {

            /**
             * Collaboration
             */
            Route::get('/s-admin/pages/collaboration', 'index')->name('admin.pages.collaboration');
            Route::post('/s-admin/pages/collaboration-create', 'collaborationCreate')->name('admin.pages.collaboration-create');
            Route::post('/s-admin/pages/collaboration-delete', 'collaborationDelete')->name('admin.pages.collaboration-delete');
            Route::post('/s-admin/pages/collaboration-update', 'collaborationUpdate')->name('admin.pages.collaboration-update');
        });


        Route::controller(\App\Http\Controllers\Admin\Pages\ActivityController::class)->group(function () {
            /**
             * Activity
             */
            Route::get('/s-admin/pages/activity', 'index')->name('admin.pages.activity');
            Route::post('/s-admin/pages/activity-create', 'activityCreate')->name('admin.pages.activity-create');
            Route::post('/s-admin/pages/activity-delete', 'activityDelete')->name('admin.pages.activity-delete');
            Route::post('/s-admin/pages/activity-update', 'activityUpdate')->name('admin.pages.activity-update');


            Route::post('/s-admin/pages/activity-category-create', 'activityCategoryCreate')->name('admin.pages.activity-category-create');
            Route::post('/s-admin/pages/activity-category-delete', 'activityCategoryDelete')->name('admin.pages.activity-category-delete');
            Route::post('/s-admin/pages/activity-category-update', 'activityCategoryUpdate')->name('admin.pages.activity-category-update');

        });

        Route::controller(\App\Http\Controllers\Admin\PageSettingController::class)->group(function () {
            /**
             * Page Setting
             */
            Route::get('/s-admin/pages/setting', 'index')->name('admin.pages.setting');
            Route::post('/s-admin/pages/setting-update', 'settingUpdate')->name('admin.pages.setting-update');
        });

        Route::controller(\App\Http\Controllers\Admin\Pages\DynamicPageController::class)->group(function () {
            /**
             * Dynamic Page
             */
            Route::get('/s-admin/pages/dynamic', 'index')->name('admin.pages.dynamic');
            Route::post('/s-admin/pages/dynamic-create', 'dynamicCreate')->name('admin.pages.dynamic-create');
            Route::post('/s-admin/pages/dynamic-delete', 'dynamicDelete')->name('admin.pages.dynamic-delete');
            Route::post('/s-admin/pages/dynamic-update', 'dynamicUpdate')->name('admin.pages.dynamic-update');

            Route::post('/s-admin/pages/dynamic-menu-create', 'dynamicMenuCreate')->name('admin.pages.dynamic-menu-create');
            Route::post('/s-admin/pages/dynamic-menu-delete', 'dynamicMenuDelete')->name('admin.pages.dynamic-menu-delete');
            Route::post('/s-admin/pages/dynamic-menu-update', 'dynamicMenuUpdate')->name('admin.pages.dynamic-menu-update');

        });


    });





