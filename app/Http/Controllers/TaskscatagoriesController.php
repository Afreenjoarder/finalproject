<?php namespace App\Http\Controllers;
//use App\TaskC;
use Input;
use Redirect;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TaskscatagoriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasksCatagories = DB::table('tasksCatagories')->get();
		return view('tasksCatagories.index', compact('tasksCatagories'));
		//$projects = Project::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tasksCatagories.create');	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		DB::table($input)->create();
		//Project::create( $input );

		return Redirect::route('tasksCatagories.index')->with('message', 'Catagory created');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tasksCatagories = DB::table('tasksCatagories')->find($id);

		return view('tasksCatagories.show', compact('tasksCatagory'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('tasksCatagories.edit', compact('tasksCatagory'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id )
	{
		$input = array_except(Input::all(), '_method');
		DB::table($input)->update();
		//$tasksCatagory->update($input);

		return Redirect::route('tasksCatagories.show', $tasksCatagory->id)->with('message', 'catagory updated.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy( )
	{
		$tasksCatagories->delete();

		return Redirect::route('tasksCatagories.index')->with('message', 'catagory deleted.');
	}

}
