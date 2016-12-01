<?php

class SuppliersController extends \BaseController {

	/**
	 * Display a listing of clients
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = DB::table('clients')
				->where('type','=','Supplier')
        		->get();  

		return View::make('suppliers.index', compact('clients'));
	}

	/**
	 * Show the form for creating a new client
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('suppliers.create');
	}

	/**
	 * Store a newly created client in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Client::$rules, Client::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$client = new Client;

		$client->surname = Input::get('surname');
		$client->firstname = Input::get('firstname');
		$client->other_names = Input::get('other_names');
		$client->date = date('Y-m-d');
		/*$client->email = Input::get('email_office');
		$client->contact_person_email = Input::get('email_personal');*/
		/*$client->contact_person_phone = Input::get('mobile_phone');*/
		$client->phone = Input::get('office_phone');
		$client->address = Input::get('address');
		$client->type = 'Supplier';
		$client->save();

		return Redirect::route('suppliers.index')->withFlashMessage('Suppliers successfully created!');
	}

	/**
	 * Display the specified client.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$client = Client::findOrFail($id);

		return View::make('suppliers.show', compact('client'));
	}

	/**
	 * Show the form for editing the specified client.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::find($id);

		return View::make('suppliers.edit', compact('client'));
	}

	/**
	 * Update the specified client in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$client = Client::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Client::rolesUpdate($client->id), Client::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$client->surname = Input::get('surname');
		$client->firstname = Input::get('firstname');
		$client->other_names = Input::get('other_names');
		/*$client->email = Input::get('email_office');
		$client->contact_person_email = Input::get('email_personal');*/
		/*$client->contact_person_phone = Input::get('mobile_phone');*/
		$client->phone = Input::get('office_phone');
		$client->address = Input::get('address');
		$client->type = 'Supplier';
		$client->save();

		$client->update();

		return Redirect::route('suppliers.index')->withFlashMessage('Supplier successfully updated!');
	}

	/**
	 * Remove the specified client from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Client::destroy($id);

		return Redirect::route('customers.index')->withDeleteMessage('Supplier successfully deleted!');
	}

}
