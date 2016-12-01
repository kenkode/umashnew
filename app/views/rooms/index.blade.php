@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>List Rooms</h4>

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
          <a class="btn btn-success btn-sm" href="{{ URL::to('rooms/create')}}">Click to Create Room</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Room Number</th>        
        <th>Room Type</th>        
        <th>Status</th>
        <th>Capacity(No of People)</th>          
        <th></th>


      </thead>
      <tbody>

        <?php $i = 1; ?>
       
         @foreach($rooms as $room)
        <tr>

          <td> {{ $i }}</td>                          
          <td>{{ $room->room_no }}</td>             
          <td>{{ $room->room_type }}</td>
          <td>{{ $room->status }}</td>
          <td>{{ $room->capacity }}</td>
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    

                    <li><a href="{{URL::to('rooms/edit/'.$room->id)}}">Update</a></li>

                    <li><a href="{{URL::to('rooms/show/'.$room->id)}}">Show</a></li>
                   
                    <!-- <li><a href="{{URL::to('room/delete/'.$room->id)}}"  onclick="return (confirm('Are you sure you want to delete this Room?'))">Delete</a></li> -->
                    
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