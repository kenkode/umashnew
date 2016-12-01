<?php

class Booking extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'client_id' => 'required',
		'car_id' => 'required',
		'date_out' => 'required',
		'date_back' => 'required',
		'destination' => 'required'
		
	];

	public static $messages = array(
        'client_id.required'=>'Please Select Client Name!',
        'car_id.required'=>'Please Select vehicle!',
        'date_out.required'=>'Please Choose the Date of Travel!',
        'date_back.required'=>'Please Choose the date the vehicle will be back!',
        'destination.required'=>'Please Fill the Destination Field!',
        
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function client(){

		return $this->belongsTo('Client');
	}


	public function car(){

		return $this->belongsTo('Car');
	}

}