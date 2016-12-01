<?php

class Jinsurance extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'member_name' => 'required',
		'member_bdate' => 'required'
		
	];

	public static $messages = array(
        'member_name.required'=>'Please Enter Member Name!',
        'member_bdate.required'=>'Please Select Member Birth Date!'
        
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function bookings(){

		return $this->hasMany('Booking');
	}

}