@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Jubilee Insurance Member Details</h4>  <div align="right"><a href="{{URL::to('umashReports/jinsurance/'.$jinsurance->id)}}" class="btn btn-success" target="_blank"> Print Preview</div></a>

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
      <td colspan="2"><font color="green">Member and Spouse Details</font></td>
    </tr>
     <tr>
       <td>Member Name</td><td>{{$jinsurance->member_name}}</td>
     </tr>
      <tr>
       <td>Member Date of Birth</td><td>{{$jinsurance->member_bdate}}</td>
     </tr>
     <tr>
       <td>Spouse Name</td><td>{{$jinsurance->spouse_name}}</td>
     </tr>
     <tr>
       <td>Spouse Date of Birth</td><td>{{$jinsurance->spouse_bdate}}</td>
     </tr>
      


     <tr>
      <td colspan="2"><font color="green">Dependants' Details</font></td>
    </tr>
     <tr>
       <td colspan = "2">1: {{$jinsurance->first_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth:</td><td>{{$jinsurance->first_bdate}}</td>
     </tr>
     <tr>
       <td colspan = "2">2: {{$jinsurance->second_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->second_bdate}}</td>
     </tr>
     <tr>
       <td colspan = "2">3: {{$jinsurance->third_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->third_bdate}}</td>
     </tr>
     <tr>
       <td colspan = "2">4: {{$jinsurance->fourth_dependant}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->fourth_bdate}}</td>
     </tr>     
     
     
   </table>

   </div>

  <div class="col-lg-5"> 
<table  class="table table-condensed table-bordered table-responsive table-hover">
   
     
    

     <tr>
      <td colspan="2"><font color="green">Parents' Details</font></td>
    </tr>
     <tr>
       <td colspan = "2">1: {{$jinsurance->parent1_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent1_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent1_id}}</td>
     </tr>
     <tr>
       <td colspan = "2">2: {{$jinsurance->parent2_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent2_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent2_id}}</td>
     </tr>
     <tr>
       <td colspan = "2">3: {{$jinsurance->parent3_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent3_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent3_id}}</td>
     </tr>
     <tr>
       <td colspan = "2">4: {{$jinsurance->parent4_name}}</td>
     </tr>
     <tr>
       <td>Date of Birth</td><td>{{$jinsurance->parent4_date}}</td>
     </tr>
     <tr>
       <td>ID No</td><td>{{$jinsurance->parent4_id}}</td>
     </tr>
         

    </table>
 </div>


  

</div>

@stop