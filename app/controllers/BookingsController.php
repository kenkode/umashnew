<?php

class BookingsController extends \BaseController {

	/**
	 * Display a listing of bookings
	 *
	 * @return Response
	 */
	public function index()
	{
		$bookings = Booking::all();

		return View::make('bookings.index', compact('bookings'));
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

		$cars = DB::table('cars')
			  ->where('status','available')->get();

		return View::make('bookings.create', compact('cars', 'clients'));
	}

	/**
	 * Store a newly created booking in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Booking::$rules, Booking::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$client = Client::findOrFail(Input::get('client_id'));
		$car = Car::findOrFail(Input::get('car_id'));

		$booking = new Booking;

		$booking->client()->associate($client);
		$booking->car()->associate($car);
		$booking->date = date('Y-m-d');
		$booking->destination = Input::get('destination');
		/*$booking->distance = Input::get('distance');*/
		$booking->date_out = Input::get('date_out');
		$booking->date_back = Input::get('date_back');
		$booking->branch = Input::get('branch');
		$booking->status = 'active';

		$booking->save();


		$car->status = 'booked';
		$car->update();
		return Redirect::route('bookings.index');

	}

	/**
	 * Display the specified booking.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$booking = Booking::findOrFail($id);

		return View::make('bookings.show', compact('booking'));
	}

	/**
	 * Show the form for editing the specified booking.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$booking = Booking::find($id);

		$clients = Client::all();
		$cars = Car::all();

		return View::make('bookings.edit', compact('booking', 'cars', 'clients'));
	}

	/**
	 * Update the specified booking in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$booking = Booking::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Booking::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$client = Client::findOrFail(Input::get('client_id'));
		$car = Car::findOrFail(Input::get('car_id'));

		$booking->client()->associate($client);
		$booking->car()->associate($car);
		$booking->destination = Input::get('destination');
		$booking->date_out = Input::get('date_out');
		$booking->date_back = Input::get('date_back');
		$booking->branch = Input::get('branch');
		$booking->update();

		return Redirect::route('bookings.index');
	}

	/**
	 * Remove the specified booking from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Booking::destroy($id);

		return Redirect::route('bookings.index');
	}


	public function cancel($id)
	{
		$booking = Booking::findOrFail($id);
		$booking->status = 'cancelled';
		$booking->update();

		return Redirect::route('bookings.index');
	}

}
