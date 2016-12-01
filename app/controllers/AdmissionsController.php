<?php

class AdmissionsController extends \BaseController {

	/**
	 * Display a listing of admissions
	 *
	 * @return Response
	 */
	public function index()
	{
		$admissions = Admission::all();

		return View::make('admissions.index', compact('admissions'));
	}

	/**
	 * Show the form for creating a new admission
	 *
	 * @return Response
	 */
	public function create()
	{
		$admissions = Admission::all();
		$admission_no = Admission::getAdmissionNumber();
		return View::make('admissions.create', compact('admissions','admission_no'));
	}

	/**
	 * Store a newly created admission in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Admission::$rules, Admission::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$admission = new Admission;

		if ( Input::hasFile('document1')) {

            $file = Input::file('document1');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document1/', $name);
            $input['file'] = '/public/uploads/admissions/document1/'.$name;
            $admission->document1 = $name;
        }

        if ( Input::hasFile('document2')) {

            $file = Input::file('document2');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document2/', $name);
            $input['file'] = '/public/uploads/admissions/document2/'.$name;
            $admission->document2 = $name;
        }

        if ( Input::hasFile('document3')) {

            $file = Input::file('document3');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document3/', $name);
            $input['file'] = '/public/uploads/admissions/document3/'.$name;
            $admission->document3 = $name;
        }

        if ( Input::hasFile('document4')) {

            $file = Input::file('document4');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document4/', $name);
            $input['file'] = '/public/uploads/admissions/document4/'.$name;
            $admission->document4 = $name;
        }

        if ( Input::hasFile('document5')) {

            $file = Input::file('document5');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document5/', $name);
            $input['file'] = '/public/uploads/admissions/document5/'.$name;
            $admission->document5 = $name;
        }


		

		$admission->surname = Input::get('surname');
		$admission->firstname = Input::get('firstname');
		$admission->other_names = Input::get('other_names');
		$admission->date = Input::get('date');
		$admission->date_of_death = Input::get('date_of_death');
		$admission->date_of_birth = Input::get('date_of_birth');
		$admission->id_number = Input::get('id_number');
		$admission->place_of_death = Input::get('place_of_death');
		$admission->cause_of_death = Input::get('cause_of_death');
		$admission->cause_of_death = Input::get('cause_of_death');
		$admission->narration = Input::get('narration');
		$admission->gender = Input::get('gender');
		$admission->category = Input::get('category');
		/*$admission->admission_no = Admission::getAdmissionNumber();*/
		$admission->admission_no = Input::get('admission_no');
		$admission->kin_surname = Input::get('kin_surname');
		$admission->kin_firstname = Input::get('kin_firstname');
		$admission->kin_other_names = Input::get('kin_other_names');
		$admission->kin_phone = Input::get('kin_phone');
		$admission->contact = Input::get('contact');
		$admission->date_of_pathology = Input::get('date_of_pathology');
		$admission->kin_id_number = Input::get('kin_id_number');
		$admission->kin_address = Input::get('kin_address');
		$admission->kin_relationship = Input::get('kin_relationship');
		$admission->kin2_surname = Input::get('kin2_surname');
		$admission->kin2_firstname = Input::get('kin2_firstname');
		$admission->kin2_other_names = Input::get('kin2_other_names');
		$admission->kin2_phone = Input::get('kin2_phone');
		$admission->kin2_id_number = Input::get('kin2_id_number');
		$admission->kin2_address = Input::get('kin2_address');
		$admission->kin2_relationship = Input::get('kin2_relationship');
		$admission->age = Input::get('age');
		/*$admission->usual_residence = Input::get('usual_residence');*/
		/*$admission->level_of_education = Input::get('level_of_education');*/
		/*$admission->pathologist_fee = Input::get('pathologist_fee');*/
		$admission->name_of_doctor = Input::get('name_of_doctor');
		$admission->umash_services_fee = Input::get('umash_services_fee');
		$admission->description = Input::get('description');
		$admission->kin_remarks = Input::get('kin_remarks');
		$admission->kin2_remarks = Input::get('kin2_remarks');

		if(Input::get('pathologist') != null ){
		$admission->pathologist = 'YES';
	    }else{
	    $admission->pathologist = 'NO';
	    }
	    if(Input::get('police_case') != null ){
	    $admission->police_case = 'YES';
	    }else{
	    $admission->police_case = 'NO';
	    }


		$admission->save();

		return Redirect::route('admissions.index');
	}

	/**
	 * Display the specified admission.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$admission = Admission::findOrFail($id);

		return View::make('admissions.show', compact('admission'));
	}

	/**
	 * Show the form for editing the specified admission.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$admission = Admission::find($id);

		return View::make('admissions.edit', compact('admission'));
	}

	/**
	 * Update the specified admission in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$admission = Admission::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Admission::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}


		if ( Input::hasFile('document1')) {

            $file = Input::file('document1');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document1/', $name);
            $input['file'] = '/public/uploads/admissions/document1/'.$name;
            $admission->document1 = $name;
        }

        if ( Input::hasFile('document2')) {

            $file = Input::file('document2');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document2/', $name);
            $input['file'] = '/public/uploads/admissions/document2/'.$name;
            $admission->document2 = $name;
        }

        if ( Input::hasFile('document3')) {

            $file = Input::file('document3');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document3/', $name);
            $input['file'] = '/public/uploads/admissions/document3/'.$name;
            $admission->document3 = $name;
        }

        if ( Input::hasFile('document4')) {

            $file = Input::file('document4');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document4/', $name);
            $input['file'] = '/public/uploads/admissions/document4/'.$name;
            $admission->document4 = $name;
        }

        if ( Input::hasFile('document5')) {

            $file = Input::file('document5');
            $name = $file->getClientOriginalName();
            $file = $file->move('public/uploads/admissions/document5/', $name);
            $input['file'] = '/public/uploads/admissions/document5/'.$name;
            $admission->document5 = $name;
        }

		$admission->surname = Input::get('surname');
		$admission->firstname = Input::get('firstname');
		$admission->other_names = Input::get('other_names');
		$admission->date = Input::get('date');
		$admission->date_of_death = Input::get('date_of_death');
		$admission->date_of_birth = Input::get('date_of_birth');
		$admission->id_number = Input::get('id_number');
		$admission->place_of_death = Input::get('place_of_death');
		$admission->narration = Input::get('narration');
		$admission->cause_of_death = Input::get('cause_of_death');
		$admission->certificate_no = Input::get('certificate_no');
		$admission->gender = Input::get('gender');
		$admission->category = Input::get('category');
		$admission->admission_no = Input::get('admission_no');
		$admission->kin_surname = Input::get('kin_surname');
		$admission->kin_firstname = Input::get('kin_firstname');
		$admission->kin_other_names = Input::get('kin_other_names');
		$admission->kin_phone = Input::get('kin_phone');
		$admission->kin_id_number = Input::get('kin_id_number');
		$admission->kin_address = Input::get('kin_address');
		$admission->kin_relationship = Input::get('kin_relationship');
		$admission->kin2_surname = Input::get('kin2_surname');
		$admission->kin2_firstname = Input::get('kin2_firstname');
		$admission->kin2_other_names = Input::get('kin2_other_names');
		$admission->kin2_phone = Input::get('kin2_phone');
		$admission->kin2_id_number = Input::get('kin2_id_number');
		$admission->kin2_address = Input::get('kin2_address');
		$admission->kin2_relationship = Input::get('kin2_relationship');
		$admission->age = Input::get('age');
		// $admission->usual_residence = Input::get('usual_residence');
		/*$admission->level_of_education = Input::get('level_of_education');*/
		/*$admission->pathologist_fee = Input::get('pathologist_fee');*/
		$admission->name_of_doctor = Input::get('name_of_doctor');
		$admission->umash_services_fee = Input::get('umash_services_fee');
		$admission->description = Input::get('description');
		$admission->pathologist= Input::get('pathologist');
		$admission->contact = Input::get('contact');
		$admission->date_of_pathology = Input::get('date_of_pathology');
		$admission->police_case= Input::get('police_case');
		$admission->kin_remarks = Input::get('kin_remarks');
		$admission->kin2_remarks = Input::get('kin2_remarks');


		
		$admission->update();


		return Redirect::route('admissions.index');
	}

	/**
	 * Remove the specified admission from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Admission::destroy($id);

		return Redirect::route('admissions.index');
	}


	public function release($id)
	{
		$admission = Admission::find($id);

		$admission->date_released = date('Y-m-d');
		$admission->status = 'released';
		$admission->update();

		return Redirect::route('admissions.index');
	}

	 public function getDownload1($id){
        //PDF file is stored under project/public/download/info.pdf
        $document1 = Admission::findOrFail($id);
        $file= public_path(). "/uploads/admissions/document1/".$document1->document1;
        
        return Response::download($file, $document1->document1);
}
 public function getDownload2($id){
        //PDF file is stored under project/public/download/info.pdf
        $document2 = Admission::findOrFail($id);
        $file= public_path(). "/uploads/admissions/document2/".$document2->document_path;
        
        return Response::download($file, $document2->document2);
}
 public function getDownload3($id){
        //PDF file is stored under project/public/download/info.pdf
        $document3 = Admission::findOrFail($id);
        $file= public_path(). "/uploads/admissions/document3/".$document3->document_path;
        
        return Response::download($file, $document3->document3);
}
 public function getDownload4($id){
        //PDF file is stored under project/public/download/info.pdf
        $document4 = Admission::findOrFail($id);
        $file= public_path(). "/uploads/admissions/document4/".$document4->document_path;
        
        return Response::download($file, $document4->document4);
}
 public function getDownload5($id){
        //PDF file is stored under project/public/download/info.pdf
        $document5 = Admission::findOrFail($id);
        $file= public_path(). "/uploads/admissions/document5/".$document5->document_path;
        
        return Response::download($file, $document5->document5);
}

}


