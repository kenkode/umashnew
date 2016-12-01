@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Admission Details</h4>  <div align="right"><a href="{{URL::to('umashReports/admission/'.$admission->id)}}" class="btn btn-success" target="_blank"> Print Preview</div></a>
<hr>
</div>
</div>	
</div>
<br>
<p>


<div class="row">
	<div class="col-lg-5">

    @if (Session::has('flash_message'))

      <div class="alert alert-success">
      {{ Session::get('flash_message') }}
     </div>
    @endif

    @if (Session::has('delete_message'))

      <div class="alert alert-danger">
      {{ Session::get('delete_message') }}
     </div>
    @endif

    
      
        


    <table  class="table table-condensed table-bordered table-responsive table-hover">

     <tr>
      <td colspan="2"><font color="green">Deceased Details</font></td>
    </tr>
     <tr>
       <td>Admission #</td><td>{{$admission->admission_no}}</td>
     </tr>
      <tr>
       <td>Admission Date </td><td>{{$admission->date}}</td>
     </tr>
     <tr>
       <td>Admission Category </td><td>{{$admission->category}}</td>
     </tr>
     <tr>
       <td>Admission Status</td><td>{{$admission->status}}</td>
     </tr>
      <tr>
       <td>SurName </td><td>{{$admission->surname}}</td>
     </tr>

     <tr>
       <td>First Name </td><td>{{$admission->firstname}}</td>
     </tr>

     <tr>
       <td>Other Names </td><td>{{$admission->other_names}}</td>
     </tr>
     <tr>
       <td>Date of Birth </td><td>{{$admission->date_of_birth}}</td>
     </tr>
     <!-- <tr>
       <td>Marital Status </td><td>{{$admission->marital_status}}</td>
     </tr> -->
      <tr>
       <td>ID / Passport Number </td><td>{{$admission->id_number}}</td>
     </tr>
     <!-- <tr>
       <td>Usual Residence </td><td>{{$admission->usual_residence}}</td>
     </tr> -->
     <tr>
       <td>Level of Education </td><td>{{$admission->level_of_education}}</td>
     </tr>
      <tr>
       <td>Certificate # </td><td>{{$admission->certificate_no}}</td>
     </tr>
      <tr>
       <td>Cause of Death </td><td>{{$admission->cause_of_death}}</td>
     </tr>
     <tr>
       <td>Date of Death </td><td>{{$admission->date_of_death}}</td>
     </tr>
      <tr>
       <td>Place of Death </td><td>{{$admission->place_of_death}}</td>
     </tr>
      <tr>
       <td>Cause of Death </td><td>{{$admission->cause_of_death}}</td>
     </tr>
     <tr>
       <td>Date Released</td><td>{{$admission->date_released}}</td>
     </tr>
     
   </table>
   

   <table  class="table table-condensed table-bordered table-responsive table-hover">

   <div>   
   
   <h5><font color="green">Downloads</font></h5>

     @if(($admission->document1 == null || $admission->document1 == '') && ($admission->document2 == null || $admission->document2 == '') && ($admission->document3 == null || $admission->document3 == '') && ($admission->document4 == null || $admission->document4 == '') && ($admission->document5 == null || $admission->document5 == ''))
     <tr><td>No document(s) to download</td><tr>
     @else
     <tr>
      @if($admission->document1 != null || $admission->document1 != '')
      <td>{{$admission->document1}}</td><td><a href="{{URL::to('admissions/download1/'.$admission->id)}}"><i class="fa fa-download fa-fw"></i></a></td>
      @else
      @endif
     </tr>
     <tr>
     @if($admission->document2 != null || $admission->document2 != '')
      <td>{{$admission->document2}}</td><td><a href="{{URL::to('admissions/download2/'.$admission->id)}}"><i class="fa fa-download fa-fw"></i></a></td>
      @else
      @endif
     </tr>
     <tr>
     @if($admission->document3 != null || $admission->document3 != '')
      <td>{{$admission->document3}}</td><td><a href="{{URL::to('admissions/download3/'.$admission->id)}}"><i class="fa fa-download fa-fw"></i></a></td>
      @else
      @endif
     </tr>
     <tr>
     @if($admission->document4 != null || $admission->document4 != '')
      <td>{{$admission->document4}}</td><td><a href="{{URL::to('admissions/download4/'.$admission->id)}}"><i class="fa fa-download fa-fw"></i></a></td>
      @else
      @endif
     </tr>
     <tr>
     @if($admission->document5 != null || $admission->document5 != '')
      <td>{{$admission->document5}}</td><td><a href="{{URL::to('admissions/download5/'.$admission->id)}}"><i class="fa fa-download fa-fw"></i></a></td>
      @else
      @endif
     </tr>
     @endif

     </div>
     </table>

   </div>

  <div class="col-lg-5"> 
<table  class="table table-condensed table-bordered table-responsive table-hover">
   
     <tr>
      <td colspan="2"><font color="green">First Next Of Kin Details</font></td>
    </tr>
     <tr>
       <td>SurName </td><td>{{$admission->kin_surname}}</td>
     </tr>

     <tr>
       <td>First Name </td><td>{{$admission->kin_firstname}}</td>
     </tr>

     <tr>
       <td>Other Names </td><td>{{$admission->kin_other_names}}</td>
     </tr>
     <tr>
       <td>Phone Number</td><td>{{$admission->kin_phone}}</td>
     </tr>
     <tr>
       <td>ID / Passport Number</td><td>{{$admission->kin_id_number}}</td>
     </tr>
     <tr>
       <td>Kin Address</td><td>{{$admission->kin_address}}</td>
     </tr>
     <tr>
       <td>Kin Relationship</td><td>{{$admission->kin_relationship}}</td>
     </tr>

     <tr>
       <td>Remarks</td><td>{{$admission->kin_remarks}}</td>
     </tr>  
    

     <tr>
      <td colspan="2"><font color="green">Second Next Of Kin Details</font></td>
    </tr>
     <tr>
       <td>SurName </td><td>{{$admission->kin2_surname}}</td>
     </tr>

     <tr>
       <td>First Name </td><td>{{$admission->kin2_firstname}}</td>
     </tr>

     <tr>
       <td>Other Names </td><td>{{$admission->kin2_other_names}}</td>
     </tr>
     <tr>
       <td>Phone Number</td><td>{{$admission->kin2_phone}}</td>
     </tr>
     <tr>
       <td>ID / Passport Number</td><td>{{$admission->kin2_id_number}}</td>
     </tr>
     <tr>
       <td>Kin Address</td><td>{{$admission->kin2_address}}</td>
     </tr>
     <tr>
       <td>Kin Relationship</td><td>{{$admission->kin2_relationship}}</td>
     </tr>

     <tr>
       <td>Remarks</td><td>{{$admission->kin2_remarks}}</td>
     </tr>  


     <tr>
      <td colspan="2"><font color="green">Other Details</font></td>
    </tr>
     <tr>
       <td>Require Pathologist </td><td>{{$admission->pathologist}}</td>
     </tr>
     <!-- <tr>
       <td>Pathologist Fee</td><td>{{$admission->pathologist_fee}}</td>
     </tr> -->
     <tr>
       <td>Doctor Contact</td><td>{{$admission->contact}}</td>
     </tr>

     <tr>
       <td>Date of Pathology</td><td>{{$admission->date_of_pathology}}</td>
     </tr>

     <tr>
       <td>Umash Service Fee</td><td>{{$admission->umash_services_fee}}</td>
     </tr>
     <tr>
       <td>Name of Doctor</td><td>{{$admission->name_of_doctor}}</td>
     </tr>
     <tr>
       <td>Police Case</td><td>{{$admission->police_case}}</td>
     </tr>   



    </table>
 </div>  

</div>

@stop