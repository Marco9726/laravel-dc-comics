<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// //ROTTA PER FILE COMICS
// Route::get('/', function () {
// 	// salvo l'array del database in una variabile 
// 	$comics = config('comics');

// 	$headerMenu = config('headermenu');

// 	$footerLists = config('footerlists');

// 	$socialArray = config('social');

// 	return view('comics', compact('headerMenu', 'footerLists', 'comics', 'socialArray'));
// })->name('comics');

Route::get('/', [PageController::class, 'show'])->name('comics');

//ROTTA PER FILE SINGLE-COMIC
// Route::get('/comics/{id}', function ($id) {
// 	// salvo l'array del database in una variabile 
// 	$comics = config('comics');

// 	$headerMenu = config('headermenu');

// 	$footerLists = config('footerlists');
// 	// $comic = array_filter($comics, function ($item) use ($id) {
// 	// 	return $item['title'] == $id;
// 	// });
// 	$comic = $comics[$id];

// 	$socialArray = config('social');

// 	$date = '';
// 	// funzione per trasformare il formato della data tramite carbon 
// 	function changeDate($saleDate)
// 	{
// 		$date = $saleDate['sale_date'];
// 		return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('M d Y');
// 	}

// 	return view('single_comic', compact('comic', 'headerMenu', 'footerLists', 'date', 'socialArray'));
// })->name('single_comic');
// Route::get('/comics/{id}', [PageController::class, 'comic'])->name('single_comic');
Route::get('/comics/{id}', [PageController::class, 'comic'])->name('single_comic');

//ROTTA PER LE PAGE DELLA NAVBAR
Route::get('/{item}', function ($item) {
	$headerMenu = config('headermenu');

	$li = $headerMenu[$item];

	$footerLists = config('footerlists');

	$socialArray = config('social');

	return view('nav_item', compact('headerMenu', 'footerLists', 'socialArray', 'li'));
})->name('nav_item');


// funzione per trasformare il formato della data tramite carbon 
function changeDate($saleDate)
{
	$date = $saleDate['sale_date'];
	return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('M d Y');
}
