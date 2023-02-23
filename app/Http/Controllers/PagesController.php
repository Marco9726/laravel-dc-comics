<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$headerMenu = config('headermenu');

		$footerLists = config('footerlists');

		$socialArray = config('social');

		return view('homepage', compact('headerMenu', 'footerLists', 'socialArray'));
	}
}
