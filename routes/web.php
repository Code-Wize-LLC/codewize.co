<?php

use App\Http\Controllers\SitemapController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::view('/', 'website.home')->name('home');
Route::view('/services', 'website.services')->name('services');
Route::view('/services/it-support', 'website.it-support')->name('it-support');
Route::view('/services/network-security', 'website.network-security')->name('network-security');
Route::view('/services/cloud-email', 'website.cloud-email')->name('cloud-email');
Route::view('/services/voip', 'website.voip')->name('voip');
Route::view('/services/custom-software', 'website.custom-software')->name('custom-software');
Route::view('/services/web-apps', 'website.web-apps')->name('web-apps');
Route::view('/services/dashboards', 'website.dashboards')->name('dashboards');
Route::view('/contact', 'website.contact')->name('contact');
Route::get('/sitemap', SitemapController::class)->name('sitemap');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
