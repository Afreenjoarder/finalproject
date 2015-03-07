<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Voter;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Http\Requests\StoreVoterRequest;

use Illuminate\Http\Request;

class VotersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()

	{
		$voters = Voter::all();

		return view('voters.index', compact('voters'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('voters.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()

	{
		//$this->validate($request, $this->rules);
		$input = Input::all();
		Voter::create( $input );

		return Redirect::route('voters.index')->with('message', 'voter created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Voter $voter)
	{
		return view('voters.show', compact('voter'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Voter $voter)
	{
		return view('voters.edit', compact('voter'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Voter $voter )
	{
		//$this->validate($request, $this->rules);
		$input = array_except(Input::all(), '_method');
		$voter->update($input);

		return Redirect::route('voters.index', $voter->voter_id)->with('message', 'voter added.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Voter $voter)
	{
		$voter->delete();

		return Redirect::route('voters.index')->with('message', 'voter deleted.');
	}

}
