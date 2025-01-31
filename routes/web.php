<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\Usuario\Index as usuario;
use App\Http\Livewire\Mapa\Index as mapa;
use App\Http\Livewire\Reporte\Index as reporte;
use App\Http\Livewire\Sessions\Index as sessions;
use App\Http\Livewire\Auditoria\Index as auditoria;
use App\Http\Livewire\Empresa\Index as empresa;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;

Route::get('/', function() {return redirect('/login');});

Route::get('/logout', function() {Auth::logout(); return redirect('/login'); })->name('logout');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');


Route::middleware('auth')->group(function () {
    Route::get('/empresa', empresa::class)->name('empresa');
    Route::get('/auditoria', auditoria::class)->name('auditoria');
    Route::get('/mapa', mapa::class)->name('mapa');
    Route::get('/usuario', usuario::class)->name('usuario');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/perfil', UserProfile::class)->name('perfil');
    Route::get('/reporte', reporte::class)->name('reporte');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    Route::get('/sessions', sessions::class)->name('sessions');
});

