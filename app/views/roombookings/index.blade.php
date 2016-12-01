@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Room Bookings</h4>

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
          <a class="btn btn-success btn-sm" href="{{ URL::to('roombookings/create')}}">New Room Booking</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Date</th>
        <th>Client</th>
        <th>Room</th>
        <!-- <th>Charges</th>               
        <th>Status</th> -->
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($roombookings as $roombooking)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $roombooking->book_date }}</td>
          <td>{{ $roombooking->client->surname.' '.$roombooking->client->firstname.' '.$roombooking->client->other_names}}</td>
          <td>{{ $roombooking->room->room_no }}</td>
          <!-- <td>{{ $roombooking->charges }}</td>                   
          <td>{{ $roombooking->status }}</td> -->
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    

                    <li><a href="{{URL::to('roombookings/edit/'.$roombooking->id)}}">Update</a></li>
                    @if($roombooking->status == 'active')
                    <li><a href="{{URL::to('roombookings/cancel/'.$roombooking->id)}}"  onclick="return (confirm('Are you sure you want to cancel this booking?'))">Cancel</a></li>
                   @endif
                    <li><a href="{{URL::to('roombookings/delete/'.$roombooking->id)}}"  onclick="return (confirm('Are you sure you want to delete this booking?'))">Delete</a></li>
                    
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