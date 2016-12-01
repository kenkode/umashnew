@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Room Details</h4>  

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
      <td colspan="2"><font color="green">Room Details</font></td>
    </tr>     

     <tr>
       <td>Room Number </td><td>{{$rooms->room_no}}</td>

      
     </tr>
      
     <tr>
       <td>Room Type </td><td>{{$rooms->room_type}}</td>

       
     </tr> 
      

     <tr>
       <td>Status</td><td>{{$rooms->status}}</td>
     </tr>
      <tr>
       <td>Capacity </td><td>{{$rooms->capacity}}</td>
     </tr>     

    </table>
 </div> 

</div>

@stop