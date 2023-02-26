<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$comics = Comic::all();

		$headerMenu = config('headermenu');

		$footerLists = config('footerlists');

		$socialArray = config('social');

		return view('comics.index', compact('comics', 'headerMenu', 'footerLists', 'socialArray'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$headerMenu = config('headermenu');

		$footerLists = config('footerlists');

		$socialArray = config('social');

		return view('comics.create', compact('headerMenu', 'footerLists', 'socialArray'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$form_data = $request->all();

		$newComic = new Comic();
		$newComic->title = $form_data['title'];
		$newComic->type = $form_data['type'];
		$newComic->series = $form_data['series'];
		$newComic->price = $form_data['price'];
		$newComic->thumb = $form_data['thumb'];
		$newComic->sale_date = $form_data['sale_date'];
		$newComic->description = $form_data['description'];

		$newComic->save();

		return redirect()->route('comics.show', ['comic' => $newComic->id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$headerMenu = config('headermenu');

		$footerLists = config('footerlists');

		$socialArray = config('social');
		// $comic = Comic::findOrFail($id);
		// che è guale a:
		$comic = Comic::find($id);
		if ($comic) {
			$data = [
				'comic' => $comic
			];

			return view('comics.show', $data, compact('headerMenu', 'footerLists', 'socialArray'));
		}
		abort(404);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
