@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Assigned Drivers</h4>  

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
      <td colspan="2"><font color="green">Driver Details</font></td>
    </tr>     

     <tr>
      <!--  <td>Driver Name</td><td>{{$drivers->driver_name}}</td> -->

       <td>Driver Name</td><td>{{ Driver::drivername($drivers->driver_name)}}</td>
     </tr>
      <!-- <tr>
       <td>Driver Contact</td><td>{{$drivers->driver_contact}}</td>
     </tr> -->
     <tr>
       <!-- <td>Attendant Name </td><td>{{$drivers->attendant}}</td> -->

       <td>Attendant Name </td><td>{{ Driver::attendantname($drivers->attendant)}}</td> 
     </tr>



          
      

     <tr>
       <td>Vehicle Reg No</td><td>{{$drivers->reg_no}}</td>
     </tr>
      <tr>
       <td>Date of Departure </td><td>{{$drivers->driver_date}}</td>
     </tr>


     <tr>
       <td>Cross </td><td>{{$drivers->crosstype}}</td>
     </tr>
     <tr>
       <td>Flower</td><td>{{$drivers->flower}}</td>
     </tr>
     <tr>
       <td>Narrative</td><td>{{$drivers->narrative}}</td>
     </tr>
     <tr>
       <td>Status</td><td>{{$drivers->status}}</td>
   </tr>  

     

    </table>
 </div>


  

</div>

@stop