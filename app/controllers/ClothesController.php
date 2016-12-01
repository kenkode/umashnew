<?php

class ClothesController extends \BaseController {

	/**
	 * Display a listing of admissions
	 *
	 * @return Response
	 */
	public function index()
	{
		$clothes = Clothe::all();

		return View::make('clothes.index', compact('clothes'));
	}

	/**
	 * Show the form for creating a new admission
	 *
	 * @return Response
	 */
	public function create()
	{
		$admissions = Admission::all();
		return View::make('clothes.create',compact('admissions'));
	}

	/**
	 * Store a newly created admission in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Clothe::$rules, Clothe::$messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$clothe = new Clothe;

		$clothe->crosstype = Input::get('crosstype');
		$clothe->date_of_departure = Input::get('date_of_departure');
		$clothe->date = date('Y-m-d');		
		$clothe->coffin = Input::get('coffin');
		$clothe->adm_id = Input::get('adm');
		$clothe->name = Input::get('name');
		
		

		if(Input::get('suit') != null ){
		$clothe->suit = 'YES';
	    }else{
	    $clothe->suit = 'NO';
	    }

	    if(Input::get('trouser') != null ){
	    $clothe->trouser = 'YES';
	    }else{
	    $clothe->trouser = 'NO';
	    }

	    if(Input::get('coat') != null ){
	    $clothe->coat = 'YES';
	    }else{
	    $clothe->coat = 'NO';
	    }

	    if(Input::get('shirt') != null ){
	    $clothe->shirt = 'YES';
	    }else{
	    $clothe->shirt = 'NO';
	    }

	    if(Input::get('tie') != null ){
	    $clothe->tie = 'YES';
	    }else{
	    $clothe->tie = 'NO';
	    }

	    if(Input::get('vest') != null ){
	    $clothe->vest = 'YES';
	    }else{
	    $clothe->vest = 'NO';
	    }

	    if(Input::get('shoes') != null ){
	    $clothe->shoes = 'YES';
	    }else{
	    $clothe->shoes = 'NO';
	    }

	    if(Input::get('socks') != null ){
	    $clothe->socks = 'YES';
	    }else{
	    $clothe->socks = 'NO';
	    }

	    if(Input::get('underwear') != null ){
	    $clothe->underwear = 'YES';
	    }else{
	    $clothe->underwear = 'NO';
	    }

	    if(Input::get('belt') != null ){
	    $clothe->belt = 'YES';
	    }else{
	    $clothe->belt = 'NO';
	    }

	    if(Input::get('cufflincks') != null ){
	    $clothe->cufflincks = 'YES';
	    }else{
	    $clothe->cufflincks = 'NO';
	    }

	    if(Input::get('boxers') != null ){
	    $clothe->boxers = 'YES';
	    }else{
	    $clothe->boxers = 'NO';
	    }

	    if(Input::get('dress') != null ){
	    $clothe->dress = 'YES';
	    }else{
	    $clothe->dress = 'NO';
	    }

	    if(Input::get('skirt') != null ){
	    $clothe->skirt = 'YES';
	    }else{
	    $clothe->skirt = 'NO';
	    }

	    if(Input::get('trouser_lady') != null ){
	    $clothe->trouser_lady = 'YES';
	    }else{
	    $clothe->trouser_lady = 'NO';
	    }

	    if(Input::get('blouse') != null ){
	    $clothe->blouse = 'YES';
	    }else{
	    $clothe->blouse = 'NO';
	    }

	    if(Input::get('stocking') != null ){
	    $clothe->stocking = 'YES';
	    }else{
	    $clothe->stocking = 'NO';
	    }

	    if(Input::get('headwear') != null ){
	    $clothe->headwear = 'YES';
	    }else{
	    $clothe->headwear = 'NO';
	    }

	    if(Input::get('gloves') != null ){
	    $clothe->gloves = 'YES';
	    }else{
	    $clothe->gloves = 'NO';
	    }

	    if(Input::get('petticoat') != null ){
	    $clothe->petticoat = 'YES';
	    }else{
	    $clothe->petticoat = 'NO';
	    }

	    if(Input::get('shoes_lady') != null ){
	    $clothe->shoes_lady = 'YES';
	    }else{
	    $clothe->shoes_lady = 'NO';
	    }

	    if(Input::get('pantie') != null ){
	    $clothe->pantie = 'YES';
	    }else{
	    $clothe->pantie = 'NO';
	    }

	    if(Input::get('camisol') != null ){
	    $clothe->camisol = 'YES';
	    }else{
	    $clothe->camisol = 'NO';
	    }

	    if(Input::get('coat_lady') != null ){
	    $clothe->coat_lady = 'YES';
	    }else{
	    $clothe->coat_lady = 'NO';
	    }

	    $clothe->baby1 = Input::get('baby1');
		$clothe->baby2 = Input::get('baby2');
		$clothe->baby3 = Input::get('baby3');			
		$clothe->baby4 = Input::get('baby4');
		$clothe->baby5 = Input::get('baby5');
		$clothe->officer = Input::get('officer');
		$clothe->relative = Input::get('relative');	


		$clothe->save();

		return Redirect::route('clothes.index');
	}

	/**
	 * Display the specified admission.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)

	{	

		$admission = Admission::all();
		$clothes = Clothe::findOrFail($id);

		return View::make('clothes.show', compact('clothes','admission'));
	}

	/**
	 * Show the form for editing the specified admission.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clothes = Clothe::find($id);
		$admissions = Admission::all();

		return View::make('clothes.edit', compact('clothes','admissions'));
	}

	/**
	 * Update the specified admission in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$clothe = Clothe::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Clothe::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		/*$cloth = new Cloth;*/

		$clothe->crosstype = Input::get('crosstype');
		$clothe->date_of_departure = Input::get('date_of_departure');
		$clothe->date = date('Y-m-d');			
		$clothe->coffin = Input::get('coffin');
		$clothe->name = Input::get('name');
		
		

		if(Input::get('suit') != null ){
		$clothe->suit = 'YES';
	    }else{
	    $clothe->suit = 'NO';
	    }

	    if(Input::get('trouser') != null ){
	    $clothe->trouser = 'YES';
	    }else{
	    $clothe->trouser = 'NO';
	    }

	    if(Input::get('coat') != null ){
	    $clothe->coat = 'YES';
	    }else{
	    $clothe->coat = 'NO';
	    }

	    if(Input::get('shirt') != null ){
	    $clothe->shirt = 'shirt';
	    }else{
	    $clothe->shirt = 'shirt';
	    }

	    if(Input::get('tie') != null ){
	    $clothe->tie = 'YES';
	    }else{
	    $clothe->tie = 'NO';
	    }

	    if(Input::get('vest') != null ){
	    $clothe->vest = 'YES';
	    }else{
	    $clothe->vest = 'NO';
	    }

	    if(Input::get('shoes') != null ){
	    $clothe->shoes = 'YES';
	    }else{
	    $clothe->shoes = 'NO';
	    }

	    if(Input::get('socks') != null ){
	    $clothe->socks = 'YES';
	    }else{
	    $clothe->socks = 'NO';
	    }

	    if(Input::get('underwear') != null ){
	    $clothe->underwear = 'YES';
	    }else{
	    $clothe->underwear = 'NO';
	    }

	    if(Input::get('belt') != null ){
	    $clothe->belt = 'YES';
	    }else{
	    $clothe->belt = 'NO';
	    }

	    if(Input::get('cufflincks') != null ){
	    $clothe->cufflincks = 'YES';
	    }else{
	    $clothe->cufflincks = 'NO';
	    }

	    if(Input::get('boxers') != null ){
	    $clothe->boxers = 'YES';
	    }else{
	    $clothe->boxers = 'NO';
	    }

	    if(Input::get('dress') != null ){
	    $clothe->dress = 'YES';
	    }else{
	    $clothe->dress = 'NO';
	    }

	    if(Input::get('skirt') != null ){
	    $clothe->skirt = 'YES';
	    }else{
	    $clothe->skirt = 'NO';
	    }

	    if(Input::get('trouser_lady') != null ){
	    $clothe->trouser_lady = 'YES';
	    }else{
	    $clothe->trouser_lady = 'NO';
	    }

	    if(Input::get('blouse') != null ){
	    $clothe->blouse = 'YES';
	    }else{
	    $clothe->blouse = 'NO';
	    }

	    if(Input::get('stocking') != null ){
	    $clothe->stocking = 'YES';
	    }else{
	    $clothe->stocking = 'NO';
	    }

	    if(Input::get('headwear') != null ){
	    $clothe->headwear = 'YES';
	    }else{
	    $clothe->headwear = 'NO';
	    }

	    if(Input::get('gloves') != null ){
	    $clothe->gloves = 'YES';
	    }else{
	    $clothe->gloves = 'NO';
	    }

	    if(Input::get('petticoat') != null ){
	    $clothe->petticoat = 'YES';
	    }else{
	    $clothe->petticoat = 'NO';
	    }

	    if(Input::get('shoes_lady') != null ){
	    $clothe->shoes_lady = 'YES';
	    }else{
	    $clothe->shoes_lady = 'NO';
	    }

	    if(Input::get('pantie') != null ){
	    $clothe->pantie = 'YES';
	    }else{
	    $clothe->pantie = 'NO';
	    }

	    if(Input::get('camisol') != null ){
	    $clothe->camisol = 'YES';
	    }else{
	    $clothe->camisol = 'NO';
	    }

	    if(Input::get('coat_lady') != null ){
	    $clothe->coat_lady = 'YES';
	    }else{
	    $clothe->coat_lady = 'NO';
	    }


	    $clothe->baby1 = Input::get('baby1');
		$clothe->baby2 = Input::get('baby2');
		$clothe->baby3 = Input::get('baby3');			
		$clothe->baby4 = Input::get('baby4');
		$clothe->baby5 = Input::get('baby5');
		$clothe->officer = Input::get('officer');
		$clothe->relative = Input::get('relative');			
		

		
		$clothe->update();


		return Redirect::route('clothes.index');
	}

	/**
	 * Remove the specified admission from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Clothe::destroy($id);

		return Redirect::route('clothes.index');
	}


	

}


