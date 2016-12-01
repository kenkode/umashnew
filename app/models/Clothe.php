<?php

class Clothe extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'adm' => 'required',
		'name' => 'required',
		'date' => 'required',
		'relative' => 'required',
		'officer' => 'required'
		
		
	];

	public static $messages = array(
        'adm.required'=>'Please Select admission Number!',
        'name.required'=>'Please Enter Name!',
        'date.required'=>'Please Select Date!',
        'relative.required'=>'Please Enter Delivering Relative!',
        'officer.required'=>'Please Enter Receiving Officer!'
        
        
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