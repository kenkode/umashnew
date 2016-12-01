<?php

class EnquiriesController extends \BaseController {

	/**
	 * Display a listing of enquiries
	 *
	 * @return Response
	 */
	public function index()
	{
		$enquiries = Enquiry::all();

		return View::make('enquiries.index', compact('enquiries'));
	}

	/**
	 * Show the form for creating a new enquiry
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('enquiries.create');
	}

	/**
	 * Store a newly created enquiry in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Enquiry::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$enquiry = new Enquiry;

		$enquiry->date = date('Y-m-d');
		$enquiry->surname = Input::get('surname');
		$enquiry->firstname = Input::get('firstname');
		$enquiry->other_names = Input::get('other_names');
		$enquiry->subject = Input::get('subject');
		$enquiry->contact_details = Input::get('contact_details');
		$enquiry->description = Input::get('description');
		$enquiry->save();

		return Redirect::route('enquiries.index');
	}

	/**
	 * Display the specified enquiry.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$enquiry = Enquiry::findOrFail($id);

		return View::make('enquiries.show', compact('enquiry'));
	}

	/**
	 * Show the form for editing the specified enquiry.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$enquiry = Enquiry::find($id);

		return View::make('enquiries.edit', compact('enquiry'));
	}

	/**
	 * Update the specified enquiry in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$enquiry = Enquiry::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Enquiry::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		
		$enquiry->surname = Input::get('surname');
		$enquiry->firstname = Input::get('firstname');
		$enquiry->other_names = Input::get('other_names');
		$enquiry->subject = Input::get('subject');
		$enquiry->contact_details = Input::get('contact_details');
		$enquiry->description = Input::get('description');
		$enquiry->update();

		return Redirect::route('enquiries.index');
	}

	/**
	 * Remove the specified enquiry from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Enquiry::destroy($id);

		return Redirect::route('enquiries.index');
	}

}
