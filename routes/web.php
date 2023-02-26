<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController as PagesController;


Route::get('/', [PagesController::class, 'index'])->name('homepage');

//ROTTA PER LE PAGE DELLA NAVBAR
// Route::get('/{item}', function ($item) {
// 	$headerMenu = config('headermenu');

// 	$li = $headerMenu[$item];

// 	$footerLists = config('footerlists');

// 	$socialArray = config('social');

// 	return view('nav_item', compact('headerMenu', 'footerLists', 'socialArray', 'li'));
// })->name('nav_item');

Route::resource('comics', ComicController::class);
