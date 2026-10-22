<?php

use App\Http\Controllers\ContactRequestController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', '/en');

Route::prefix('{locale}')
    ->whereIn('locale', ['en', 'ro', 'de', 'es'])
    ->middleware(\App\Http\Middleware\SetLocale::class)
    ->group(function () {
        /*
        |--------------------------------------------------------------------------
        | Home
        |--------------------------------------------------------------------------
        */

        Route::get('/', function () {
            return Inertia::render('Home', [
                'locale' => app()->getLocale(),
            ]);
        })->name('home');

        /*
        |--------------------------------------------------------------------------
        | Services
        |--------------------------------------------------------------------------
        */

        Route::get('/services', function () {
            return Inertia::render('Services', [
                'locale' => app()->getLocale(),
            ]);
        })->name('services');

        /*
        |--------------------------------------------------------------------------
        | Process
        |--------------------------------------------------------------------------
        */

        Route::get('/process', function () {
            return Inertia::render('Process', [
                'locale' => app()->getLocale(),
            ]);
        })->name('process');

        /*
        |--------------------------------------------------------------------------
        | Portfolio
        |--------------------------------------------------------------------------
        */

        Route::get('/portfolio', function () {
            return Inertia::render('Portfolio', [
                'locale' => app()->getLocale(),
            ]);
        })->name('portfolio');

        /*
        |--------------------------------------------------------------------------
        | About
        |--------------------------------------------------------------------------
        */

        Route::get('/about', function () {
            return Inertia::render('About', [
                'locale' => app()->getLocale(),
            ]);
        })->name('about');

        /*
        |--------------------------------------------------------------------------
        | Contact
        |--------------------------------------------------------------------------
        */

        Route::get('/contact', function () {
            return Inertia::render('Contact', [
                'locale' => app()->getLocale(),
            ]);
        })->name('contact');

      Route::post('/contact', [ContactRequestController::class, 'store'])
    ->middleware('throttle:contact')
    ->name('contact.store');


        /*
        |--------------------------------------------------------------------------
        | Legal pages
        |--------------------------------------------------------------------------
        */

        Route::get('/privacy', function () {
            return Inertia::render('Privacy', [
                'locale' => app()->getLocale(),
            ]);
        })->name('privacy');

        Route::get('/terms', function () {
            return Inertia::render('Terms', [
                'locale' => app()->getLocale(),
            ]);
        })->name('terms');

        Route::get('/cookies', function () {
            return Inertia::render('Cookies', [
                'locale' => app()->getLocale(),
            ]);
        })->name('cookies');
    });
