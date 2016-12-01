<?php

class Room extends \Eloquent {

	public static $rules = [
		'room_no' => 'required',
		'room_type' => 'required',
		'capacity' => 'required'		
		
	];

	public static $messages = array(
        'room_no.required'=>'Enter Room Number!',
        'room_type.required'=>'Please Select Room Type!',
        'capacity.required'=>'Please Enter Room Capacity!'
        
        
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function bookings(){

		return $this->hasMany('Booking');
	}

}