<?php

class RoomBooking extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'client_id' => 'required',
		'room_id' => 'required',
		/*'charges' => 'required'*/
		
		
	];

	public static $messages = array(
        'client_id.required'=>'Please Select Client Name!',
        'room_id.required'=>'Please Select room!',
        /*'charges.required'=>'Please Enter Charges!'*/
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function client(){

		return $this->belongsTo('Client');
	}


	public function room(){

		return $this->belongsTo('Room');
	}

}