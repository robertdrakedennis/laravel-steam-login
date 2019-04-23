<?php
/**
 * Laravel Steam Login.
 *
 * @link      https://www.maddela.org
 * @link      https://github.com/kanalumaddela/laravel-steam-login
 *
 * @author    kanalumaddela <git@maddela.org>
 * @copyright Copyright (c) 2018-2019 Maddela
 * @license   MIT
 */

use Illuminate\Support\Facades\Route;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\SteamLoginController;

$steamLoginConfigClass = config('steam-login.controller', 'App\Http\Controllers\Auth\SteamLoginController');
$steamLoginControllerClass = class_exists($steamLoginConfigClass) ? $steamLoginConfigClass : SteamLoginController::class;

Route::get('login/steam', [$steamLoginControllerClass, 'login'])->name('login.steam');
Route::get('auth/steam', [$steamLoginControllerClass, 'authenticate'])->name('auth.steam');