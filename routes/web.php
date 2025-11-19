<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    // Home Page
    Route::get(
        '/',
        fn() =>
        view('pages.home')
    )->name('home');
    // About Page
    Route::get(
        'about',
        fn() =>
        view('pages.about')
    )->name('about');
    // Contact Page
    Route::get(
        'contact',
        fn() =>
        view('pages.contact')
    )->name('contact');
    // Gallery Page
    Route::get(
        'gallery',
        fn() =>
        view('pages.gallery')
    )->name('gallery');
    // Welcome Page
    Route::get(
        'welcome',
        fn() =>
        view('welcome')
    )->name('welcome');
    // Redirect Page
    Route::get(
        'redirect',
        fn() =>
        view('pages.redirect')
    )->name('redirect');

});

// Login Redirect Route
Route::redirect('/login', '/redirect')->name('login');

// Fallback Route
Route::fallback(
    fn() =>
    view('pages.fallback')
)->name('fallback');