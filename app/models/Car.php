<?php

class Car extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'reg_no' => 'required',
		'make' => 'required',
		'tank_capacity' => 'required'		
		
	];

	public static $messages = array(
        'reg_no.required'=>'Enter Vehicle Registration Number!',
        'make.required'=>'Please Enter Vehicle Make!',
        'tank_capacity.required'=>'Please Enter Vehicle Tank Capacity!'
        
        
    );
	protected $fillable = [];


	public function bookings(){

		return $this->hasMany('Booking');
	}

}