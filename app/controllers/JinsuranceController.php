<?php

class JinsuranceController extends \BaseController {

	/**
	 * Display a listing of cars
	 *
	 * @return Response
	 */
	public function index()
	{
		$jinsurances = Jinsurance::all();

		return View::make('jinsurance.index', compact('jinsurances'));
	}

	/**
	 * Show the form for creating a new car
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('jinsurance.create');
	}

	/**
	 * Store a newly created car in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Jinsurance::$rules, Jinsurance::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$jinsurance = new Jinsurance;

		
		$jinsurance->date = date('Y-m-d');
		$jinsurance->member_name = Input::get('member_name');
		$jinsurance->member_bdate = Input::get('member_bdate');
		$jinsurance->spouse_bdate = Input::get('spouse_bdate');
		$jinsurance->spouse_name = Input::get('spouse_name');
		$jinsurance->first_dependant = Input::get('first_dependant');
		$jinsurance->first_bdate = Input::get('first_bdate');		
		$jinsurance->second_dependant = Input::get('second_dependant');
		$jinsurance->second_bdate = Input::get('second_bdate');		
		$jinsurance->third_dependant = Input::get('third_dependant');
		$jinsurance->third_bdate = Input::get('third_bdate');		
		$jinsurance->fourth_dependant = Input::get('fourth_dependant');
		$jinsurance->fourth_bdate = Input::get('fourth_bdate');
		$jinsurance->parent1_name = Input::get('parent1_name');
		$jinsurance->parent2_name = Input::get('parent2_name');
		$jinsurance->parent3_name = Input::get('parent3_name');
		$jinsurance->parent4_name = Input::get('parent4_name');
		$jinsurance->parent1_date = Input::get('parent1_date');
		$jinsurance->parent2_date = Input::get('parent2_date');
		$jinsurance->parent3_date = Input::get('parent3_date');
		$jinsurance->parent4_date = Input::get('parent4_date');
		$jinsurance->parent1_id = Input::get('parent1_id');
		$jinsurance->parent2_id = Input::get('parent2_id');
		$jinsurance->parent3_id = Input::get('parent3_id');
		$jinsurance->parent4_id = Input::get('parent4_id');


		/*$jinsurance->status = 'available';*/		
		$jinsurance->save();

		return Redirect::route('jinsurance.index');
	}

	/**
	 * Display the specified car.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	/*public function show($id)
	{
		$jinsurance = Jinsurance::findOrFail($id);

		return View::make('jinsurance.show', compact('jinsurance'));
	}*/

	/**
	 * Show the form for editing the specified car.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jinsurances = Jinsurance::find($id);

		return View::make('jinsurance.edit', compact('jinsurances'));
	}

	/**
	 * Update the specified car in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$jinsurance = Jinsurance::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Jinsurance::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$jinsurance->member_name = Input::get('member_name');
		$jinsurance->member_bdate = Input::get('member_bdate');
		$jinsurance->spouse_bdate = Input::get('spouse_bdate');
		$jinsurance->spouse_name = Input::get('spouse_name');
		$jinsurance->first_dependant = Input::get('first_dependant');
		$jinsurance->first_bdate = Input::get('first_bdate');		
		$jinsurance->second_dependant = Input::get('second_dependant');
		$jinsurance->second_bdate = Input::get('second_bdate');		
		$jinsurance->third_dependant = Input::get('third_dependant');
		$jinsurance->third_bdate = Input::get('third_bdate');		
		$jinsurance->fourth_dependant = Input::get('fourth_dependant');
		$jinsurance->fourth_bdate = Input::get('fourth_bdate');
		$jinsurance->parent1_name = Input::get('parent1_name');
		$jinsurance->parent2_name = Input::get('parent2_name');
		$jinsurance->parent3_name = Input::get('parent3_name');
		$jinsurance->parent4_name = Input::get('parent4_name');
		$jinsurance->parent1_date = Input::get('parent1_date');
		$jinsurance->parent2_date = Input::get('parent2_date');
		$jinsurance->parent3_date = Input::get('parent3_date');
		$jinsurance->parent4_date = Input::get('parent4_date');
		$jinsurance->parent1_id = Input::get('parent1_id');
		$jinsurance->parent2_id = Input::get('parent2_id');
		$jinsurance->parent3_id = Input::get('parent3_id');
		$jinsurance->parent4_id = Input::get('parent4_id');
	
		$jinsurance->update();

		return Redirect::route('jinsurance.index');
	}

	/**
	 * Remove the specified car from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Jinsurance::destroy($id);

		return Redirect::route('jinsurance.index');
	}

}
