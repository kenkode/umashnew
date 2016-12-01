@extends('layouts.morgue')
@section('content')

<br><div class="row">
  <div class="col-lg-12">
  <h4>Hearse </h4>  

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
      <td colspan="2"><font color="green">Hearse Details</font></td>
    </tr>     

     <tr>
       <td>Hearse Reg. Number</td><td>{{$car->reg_no}}</td>       
     </tr>
      <tr>
       <td>Hearse Make</td><td>{{$car->make}}</td>
     </tr>
     <tr>
       <td>Tank Capacity </td><td>{{$car->tank_capacity}}</td>       
     </tr>   
     <tr>
       <td>Status</td><td>{{$car->status}}</td>
     </tr>
      
    </table>
 </div>


  

</div>

@stop