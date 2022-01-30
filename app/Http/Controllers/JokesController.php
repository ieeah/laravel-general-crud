<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Joke;

class JokesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$jokes = Joke::all();
		return view('Jokes.index', compact('jokes'));
		// $jokes = Joke::paginate(5);
		// return view('Jokes.index', compact('jokes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('Jokes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$data = $request->all();
		$new_joke = new Joke;
		$new_joke->fill($data);
		$new_joke->save();
		return redirect()->route('Jokes.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$joke = Joke::find($id);
		return view('Jokes.show', compact('joke'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$joke = Joke::find($id);
		if ($joke) {
			return view('Jokes.edit', compact('joke'));
		}
		abort(404);
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
		$data = $request->all();
		$edited = Joke::find($id);
		$edited->update($data);

		return redirect()->route('Jokes.show', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$delete = Joke::find($id);
		$delete->delete();
		return redirect()->route('Jokes.index')->with('deleted', $delete->title);
	}
}
