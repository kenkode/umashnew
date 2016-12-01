<?php

class UmashReportsController extends \BaseController {


	

    public function clothe($id){

        $organization = Organization::find(1);

        $clothes = Clothe::findOrFail($id);
        

        $pdf = PDF::loadView('umashreports.Clothe', compact('organization','clothes'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Dressing Details.pdf');



      }



 public function jinsurance($id){

        $organization = Organization::find(1);

        $jinsurance = Jinsurance::findOrFail($id);
        

        $pdf = PDF::loadView('umashreports.Jinsurance', compact('organization','jinsurance'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Jubilee Insurance.pdf');



}


public function enquiries(){



        $from = Input::get("from");
        $to= Input::get("to");


        /*$enquiries = Enquiry::all();*/

        $enquiries = DB::table('enquiries')
                    ->whereBetween('date', array(Input::get("from"), Input::get("to")))->get();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('umashreports.enquiryReport', compact('enquiries', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Enquiry List.pdf');
        
    }

    public function admissions(){

         $from = Input::get("from");
         $to= Input::get("to");


       // $admissions = Admission::all();

        $admissions = DB::table('admissions')
                    ->whereBetween('date', array(Input::get("from"), Input::get("to")))->get();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('umashreports.admissionsReport', compact('admissions', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Admissions List.pdf');
        
    }

    public function bookings(){

         $from = Input::get("from");
         $to= Input::get("to");


        /*$bookings = Booking::all();*/

        $bookings = DB::table('bookings')
                    ->whereBetween('date', array(Input::get("from"), Input::get("to")))->get();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('umashreports.bookingsReport', compact('bookings', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Booking List.pdf');
        
    }


    public function cars(){

         $from = Input::get("from");
         $to= Input::get("to");


        /*$cars = Car::all();*/

        $cars = DB::table('cars')
                    ->whereBetween('date', array(Input::get("from"), Input::get("to")))->get();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('umashreports.carsReport', compact('cars', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Vehicles List.pdf');
        
    }


     public function jinsurances(){
         $from = Input::get("from");
         $to= Input::get("to");


        /*$jinsurances = Jinsurance::all();*/

        $jinsurances = DB::table('jinsurances')
                    ->whereBetween('date', array(Input::get("from"), Input::get("to")))->get();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('umashreports.jinsuranceReport', compact('jinsurances', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Jubilee Insurance Members List.pdf');
        
    }


    public function drivers(){

         $from = Input::get("from");
         $to= Input::get("to");


        /*$drivers = Driver::all();*/

        $drivers = DB::table('drivers')
                    ->whereBetween('driver_date', array(Input::get("from"), Input::get("to")))->get();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('umashreports.driversReport', compact('drivers', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');
    
        return $pdf->stream('Drivers assignment List.pdf');
        
    }


    public function selectAdmissionPeriod()
    {
       $admissions = Admission::all();
        return View::make('umashreports.selectAdmissionPeriod',compact('admissions'));
    }

    public function selectEnquiryPeriod()
    {
       $enquiries = Enquiry::all();
        return View::make('umashreports.selectEnquiryPeriod',compact('enquiries'));
    }

    public function selectBookingPeriod()
    {
       $bookings = Booking::all();
        return View::make('umashreports.selectBookingPeriod',compact('bookings'));
    }

    public function selectCarPeriod()
    {
       $cars = Car::all();
        return View::make('umashreports.selectCarPeriod',compact('cars'));
    }

    public function selectDriverPeriod()
    {
       $drivers = Driver::all();
        return View::make('umashreports.selectDriverPeriod',compact('drivers'));
    }

    public function selectJinsurancePeriod()
    {
       $jinsurances = Jinsurance::all();
        return View::make('umashreports.selectJinsurancePeriod',compact('jinsurances'));
    }



}
