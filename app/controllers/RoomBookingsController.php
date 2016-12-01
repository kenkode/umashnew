<?php

class RoomBookingsController extends \BaseController {

	/**
	 * Display a listing of bookings
	 *
	 * @return Response
	 */
	public function index()
	{
		$roombookings = RoomBooking::all();

		return View::make('roombookings.index', compact('roombookings'));
	}

	/**
	 * Show the form for creating a new booking
	 *
	 * @return Response
	 */
	public function create()
	{
		$clients = Client::all();
		/*$cars = Car::all();*/

		$rooms = DB::table('rooms')
			  ->where('status','available')->get();

		return View::make('roombookings.create', compact('rooms', 'clients'));
	}

	/**
	 * Store a newly created booking in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), RoomBooking::$rules, RoomBooking::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$client = Client::findOrFail(Input::get('client_id'));
		$room = Room::findOrFail(Input::get('room_id'));

		$roombooking = new RoomBooking;

		$roombooking->client()->associate($client);
		$roombooking->room()->associate($room);
		$roombooking->book_date  = Input::get('book_date');
		/*$roombooking->charges = Input::get('charges');*/		
		
		$roombooking->save();	
		$room->status = 'booked';	
		$room->update();
		return Redirect::route('roombookings.index');

	}

	/**
	 * Display the specified booking.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$roombooking = RoomBooking::findOrFail($id);

		return View::make('roombookings.show', compact('roombooking'));
	}

	/**
	 * Show the form for editing the specified booking.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$roombooking = RoomBooking::find($id);

		$clients = Client::all();
		$rooms = Room::all();

		return View::make('roombookings.edit', compact('roombooking', 'rooms', 'clients'));
	}

	/**
	 * Update the specified booking in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$roombooking = RoomBooking::findOrFail($id);

		$validator = Validator::make($data = Input::all(), RoomBooking::$rules,RoomBooking::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$client = Client::findOrFail(Input::get('client_id'));
		$room = Room::findOrFail(Input::get('room_id'));

		$roombooking->client()->associate($client);
		$roombooking->room()->associate($room);
		$roombooking->book_date = date('Y-m-d');
		$roombooking->book_date  = Input::get('book_date');
		/*$roombooking->charges = Input::get('charges');*/					
		$roombooking->update();

		return Redirect::route('roombookings.index');
	}

	/**
	 * Remove the specified booking from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		RoomBooking::destroy($id);

		return Redirect::route('roombookings.index');
	}


	public function cancel($id)
	{
		$roombooking = RoomBooking::findOrFail($id);
		$roombooking->status = 'cancelled';
		$roombooking->update();

		return Redirect::route('roombookings.index');
	}

}
