<?php

class RoomsController extends \BaseController {

	/**
	 * Display a listing of rooms
	 *
	 * @return Response
	 */
	public function index()
	{
		$rooms = Room::all();

		return View::make('rooms.index', compact('rooms'));
	}

	/**
	 * Show the form for creating a new room
	 *
	 * @return Response
	 */
	public function create()
	{
		$count = DB::table('rooms')->count();
		$rooms = Room::all();
		$room_no = str_pad($count+1, 4, "0", STR_PAD_LEFT);
		return View::make('rooms.create',compact('rooms','room_no'));
	}

	/**
	 * Store a newly created room in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Room::$rules,Room::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$room = new Room;

		$room->room_no = Input::get('room_no');
		$room->room_type = Input::get('room_type');
		$room->date = date('Y-m-d');		
		$room->status = 'available';
		$room->capacity = Input::get('capacity');
		
		$room->save();

		return Redirect::route('rooms.index');
	}

	/**
	 * Display the specified room.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$rooms = Room::findOrFail($id);

		return View::make('rooms.show', compact('rooms'));
	}

	/**
	 * Show the form for editing the specified room.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$room = Room::find($id);

		return View::make('rooms.edit', compact('room'));
	}

	/**
	 * Update the specified room in storage.	
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$room = Room::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Room::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$room->room_id = Input::get('room_id');
		$room->room_type = Input::get('room_type');
		$room->date = date('Y-m-d');		
		$room->status = 'available';
		$room->capacity = Input::get('capacity');	
		$room->update();

		return Redirect::route('rooms.index');
	}

	/**
	 * Remove the specified room from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Room::destroy($id);

		return Redirect::route('rooms.index');
	}

}


