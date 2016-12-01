@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Assigned Drivers/Attendants</h4>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-12">

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

    <div class="panel panel-default">
      <div class="panel-heading">
          <a class="btn btn-success btn-sm" href="{{ URL::to('drivers/create')}}">Click to Assign Driver</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Driver Name</th>
        <!-- <th>Driver Contact</th> -->
        <th>Attendant</th>        
        <th>Vehicle Reg No</th>
        <th>Morgue</th>  
        <th>Date</th>  
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
       
         @foreach($drivers as $driver)
        <tr>

          <td> {{ $i }}</td>
          <td>{{ Driver::drivername($driver->driver_name)}}</td>     
          <td>{{ Driver::attendantname($driver->attendant)}}</td>                   
          <td>{{ $driver->reg_no }}</td>             
          <td>{{ $driver->morgue }}</td>
          <td>{{ $driver->driver_date }}</td>
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    

                    <li><a href="{{URL::to('drivers/edit/'.$driver->id)}}">Update</a></li>

                    <li><a href="{{URL::to('drivers/show/'.$driver->id)}}">Show</a></li>
                   
                    <li><a href="{{URL::to('driver/delete/'.$driver->id)}}"  onclick="return (confirm('Are you sure you want to Delete  this driver assignment?'))">Delete</a></li>
                    
                  </ul>
              </div>

                    </td>



        </tr>

        <?php $i++; ?>
        @endforeach


      </tbody>


    </table>
  </div>


  </div>

</div>

@stop