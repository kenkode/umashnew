@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Bookings</h4>

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
          <a class="btn btn-success btn-sm" href="{{ URL::to('bookings/create')}}">New Booking</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Date</th>
        <th>Client</th>
        <th>Hearse</th>
        <th>Destination</th>
        <th>Date Out</th>
        <th>Date Back</th>
        <th>Branch</th>         
        <th>Status</th>
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($bookings as $booking)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $booking->date }}</td>
          <td>{{ $booking->client->surname.' '.$booking->client->firstname.' '.$booking->client->other_names}}</td>
          <td>{{ $booking->car->reg_no }}</td>
          <td>{{ $booking->destination }}</td>
          <td>{{ $booking->date_out }}</td>
          <td>{{ $booking->date_back }}</td>
          <td>{{ $booking->branch}}</td>           
          <td>{{ $booking->status }}</td>
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    

                    <li><a href="{{URL::to('bookings/edit/'.$booking->id)}}">Update</a></li>
                    @if($booking->status == 'active')
                    <li><a href="{{URL::to('bookings/cancel/'.$booking->id)}}"  onclick="return (confirm('Are you sure you want to cancel this booking?'))">Cancel</a></li>
                   @endif
                    <li><a href="{{URL::to('bookings/delete/'.$booking->id)}}"  onclick="return (confirm('Are you sure you want to delete this booking?'))">Delete</a></li>
                    
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