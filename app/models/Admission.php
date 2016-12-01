<?php

class Admission extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'surname' => 'required',
		'firstname' => 'required',
		'kin_phone' => 'required',
		'kin_id_number' => 'required',
		'kin_surname' => 'required',
		'kin_firstname' => 'required',
		

	];

	public static $messages = array(
        'surname.required'=>'Please insert deceased surname!',
        'firstname.required'=>'Please insert deceased First Name!',
        'age.required'=>'Please insert deceased Age!',
        'kin_surname.required'=>'Please insert Next of Kin Surame!',
        'kin_firstname.required'=>'Please insert Next of Kin First Name!',        
        'kin_phone.required'=>'Please insert Next of Kin Phone Number!',
        'kin_id_number.required'=>'Please insert Next of Kin ID/Passport Number!'
    );

	// Don't forget to fill this array
	protected $fillable = [];



	public static function getAdmissionNumber(){

		$last_code = DB::table('admissions')->orderBy('admission_no', 'DESC')->pluck('admission_no');

		if($last_code){
			return $last_code + 1;
		} else {
			return 1000 +1;
		}

		
	}

	

}