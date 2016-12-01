<?php

class DriversController extends \BaseController {

	/**
	 * Display a listing of cars
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$drivers = DB::table('drivers')
		   ->join('employee','drivers.driver_name','=','employee.id')
           ->join('departments','employee.department_id','=','departments.id')
           ->join('cars','drivers.vehicle_reg_no','=','cars.id')
           ->where('department_name','Transport')

           /*->select('drivers.id as id','drivers.date as date','driver_name','attendant','reg_no','morgue')*/
                  
           ->get();


		return View::make('drivers.index', compact('drivers'));
	}

	/**
	 * Show the form for creating a new car
	 *
	 * @return Response
	 */
	public function create()

	{
		$employees = DB::table('employee')
           ->join('departments','employee.department_id','=','departments.id')
           
           ->where('department_name','Transport')

           ->select('employee.id as id','first_name','last_name')

           ->get();

        $cars = Car::all();

		return View::make('drivers.create', compact('employees','cars'));
	}

	/**
	 * Store a newly created car in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Driver::$rules, Driver::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$driver = new Driver;

		$driver->driver_name = Input::get('driver_name');
		/*$driver->driver_contact = Input::get('driver_contact');*/
		$driver->attendant = Input::get('attendant');
		$driver->vehicle_reg_no = Input::get('vehicle_reg_no');
		$driver->morgue = Input::get('morgue');
		$driver->driver_date = Input::get('date');


		if(Input::get('cross') != null ){
		$driver->crosstype = 'YES';
	    }else{
	    $driver->crosstype = 'NO';
	    }
	    if(Input::get('flower') != null ){
	    $driver->flower = 'YES';
	    }else{
	    $driver->flower = 'NO';
	    }		
		$driver->narrative = Input::get('narrative');
		$driver->status = 'assigned';		
		$driver->save();

		return Redirect::route('drivers.index');
	}

	/**
	 * Display the specified car.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

   $drivers = DB::table('drivers')
		   ->join('employee','drivers.driver_name','=','employee.id')
           ->join('departments','employee.department_id','=','departments.id')
           ->join('cars','drivers.vehicle_reg_no','=','cars.id')
           ->where('department_name','Transport')
           ->where('drivers.id',$id)
           ->first();

	return View::make('drivers.show', compact('drivers'));
	}

	/**
	 * Show the form for editing the specified car.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$driver = Driver::find($id);
		$employees = DB::table('employee')
           ->join('departments','employee.department_id','=','departments.id')
           
           ->where('department_name','Transport')

           ->select('employee.id as id','first_name','last_name')

           ->get();

        $cars = Car::all();

		return View::make('drivers.edit', compact('employees','cars','driver'));

		/*return View::make('drivers.edit', compact('driver'));*/
	}

	/**
	 * Update the specified car in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$driver = Driver::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Driver::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$driver->driver_name = Input::get('driver_name');
		/*$driver->driver_contact = Input::get('driver_contact');*/
		$driver->attendant = Input::get('attendant');
		$driver->vehicle_reg_no = Input::get('vehicle_reg_no');
		$driver->morgue = Input::get('morgue');
		$driver->driver_date = Input::get('date');


		if(Input::get('cross') != null ){
		$driver->crosstype = 'YES';
	    }else{
	    $driver->crosstype = 'NO';
	    }
	    if(Input::get('flower') != null ){
	    $driver->flower = 'YES';
	    }else{
	    $driver->flower = 'NO';
	    }		
		$driver->narrative = Input::get('narrative');
		$driver->status = 'assigned';
		

		$driver->update();

		return Redirect::route('drivers.index');
	}

	/**
	 * Remove the specified car from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Driver::destroy($id);

		return Redirect::route('drivers.index');
	}

}
