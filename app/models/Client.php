<?php

class Client extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'firstname' => 'required',
		 'surname' => 'required',
		 /*'other_names' => 'required',*/	 
		 
		 
		/* 'office_phone' => 'required',*/

	];

    public static function rolesUpdate($id)
    {
        return array(
         'surname' => 'required',
         'firstname' => 'required',
         /*'office_phone' => 'required',*/
		 /*'email_office' => 'email|unique:clients,email,' . $id,
		 'email_personal' => 'email|unique:clients,contact_person_email,' . $id,*/
		 
		 /*'mobile_phone' => 'unique:clients,contact_person_phone,' . $id,
		 'office_phone' => 'unique:clients,phone,' . $id*/
        );
    }

    public static $messages = array(
    	'surname.required'=>'Please insert client Surname!',
    	'firstname.required'=>'Please insert client First Name!',
    	/*'other_names.required'=>'Please insert client Other Names!',*/
        /*'email_office.email'=>'That please insert a vaild email address!',
        'email_office.unique'=>'That office email already exists!',
        'email_personal.email'=>'That please insert a vaild email address!',
        'email_personal.unique'=>'That office email already exists!',*/
       
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function erporders(){

		return $this->hasMany('Erporder');
	}


	public function bookings(){

		return $this->hasMany('Booking');
	}

}