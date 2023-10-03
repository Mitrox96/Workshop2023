<?php

use App\Route;

Route::get(['/', 'App\Controllers\HomeController@index'])->name('Accueil');

// Route Authentification


Route::get(['/login', 'App\Controllers\AuthentificationController@login'])->name('Login');
Route::get(['/logout', 'App\Controllers\AuthentificationController@logout'])->name('Logout');
Route::get(['/register', 'App\Controllers\AuthentificationController@register'])->name('Register');
Route::get(['/new-password', 'App\Controllers\AuthentificationController@ResetPassword'])->name('ResetPassword');
Route::get(['/product_list', 'App\Controllers\ProductListController@product_list'])->name('ProductList');


// Route Profil
Route::get(['/profil', 'App\Controllers\ProfilController@index'])->name('Profil');

