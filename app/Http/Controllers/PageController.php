<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class PageController extends Controller
{
	public function show()
	{
		$comics = Comic::all();

		$headerMenu = config('headermenu');

		$footerLists = config('footerlists');

		$socialArray = config('social');

		return view('comics', compact('headerMenu', 'footerLists', 'comics', 'socialArray'));
	}
	// RECUPERO CON ID 
	public function comic($id)
	{
		$comics = Comic::find($id);
		$comic = ['comic' => $comics];

		$headerMenu = config('headermenu');

		$footerLists = config('footerlists');

		$socialArray = config('social');

		return view('single_comic', $comic, compact('headerMenu', 'footerLists', 'socialArray'));
	}

	//RECUPERO CON SLUG
	// public function comic($slug)
	// {
	// 	$single = Comic::where('slug', $slug)->get();

	// 	$single = $single[0];
	// 	$comic = ['comic' => $single];

	// 	$headerMenu = config('headermenu');

	// 	$footerLists = config('footerlists');

	// 	$socialArray = config('social');

	// 	return view('single_comic', $comic, compact('headerMenu', 'footerLists', 'socialArray'));
	// }
}
