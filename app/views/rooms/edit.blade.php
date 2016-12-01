@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Rooms</h4>

<hr>
</div>	
</div>
<font color="red"><i>All fields marked with * are mandatory</i></font>

<div class="row">
	<div class="col-lg-5">

    
		
		 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

		 <form method="POST" action="{{{ URL::to('rooms/update/'.$room->id) }}}" accept-charset="UTF-8">
   
    <fieldset>


        <div class="form-group">
            <label for="username">Room Number:</label>
            <input class="form-control" placeholder="" type="text" name="room_no" id="room_no" value="{{$room->room_no}}">
        </div>

       <div class="form-group">
            <label for="username">Room Type:</label>
          <select name="room_type" class="form-control">
              <option value="{{$room->room_type}}">{{$room->room_type}}</option>
              <option></option>

              <option value="viewing">Viewing</option>
              <option value="Chapel">Chapel</option>
              
          </select>
        </div>


        <div class="form-group">
            <label for="username">Capacity:</label>
            <input class="form-control" placeholder="" type="text" name="capacity" id="capacity" value="{{$room->capacity}}">
        </div>         
            
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Update details</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop