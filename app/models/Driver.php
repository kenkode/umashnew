<?php

class Driver extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		/*'driver_name' => 'required',
		'vehicle_reg_no' => 'required',
		'morgue' => 'required',
		'date' => 'required'*/		
		
	];

	public static $messages = array(
       /* 'driver_name.required'=>'Enter Driver Name!',
        'vehicle_reg_no.required'=>'Please Enter Vehicle Registration Number!',
        'morgue.required'=>'Please Enter Morgue!',
        'date.required'=>'Please Enter Date!'
        */
        
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function bookings(){

		return $this->hasMany('Booking');
	}

	public function employee(){

		return $this->belongsTo('Employee');
	}

	public function client(){

		return $this->belongsTo('Client');
	}

	public static function drivername($id){
      $driver = DB::table('drivers')
		   ->join('employee','drivers.driver_name','=','employee.id')
           ->join('departments','employee.department_id','=','departments.id')
           ->where('department_name','Transport')
           ->where('driver_name',$id)
           ->first();

      return $driver->first_name.' '.$driver->last_name;
	}

	public static function attendantname($id){
      $driver = DB::table('drivers')
		   ->join('employee','drivers.attendant','=','employee.id')
           ->join('departments','employee.department_id','=','departments.id')
           ->where('department_name','Transport')
           ->where('attendant',$id)
           ->first();

      return $driver->first_name.' '.$driver->last_name;
	}

}