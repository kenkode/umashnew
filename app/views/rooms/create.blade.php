@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-10">
  <h4>Create Room</h4>

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

		 <form method="POST" action="{{{ URL::to('rooms') }}}" accept-charset="UTF-8">
   
    <fieldset>


        <div class="form-group">
            <label for="username">Room Number:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="room_no" id="room_no" value="{{$room_no}}" readonly>
        </div>

       <div class="form-group">
            <label for="username">Room Type:<span style="color:red">*</label>
          <select name="room_type" class="form-control">
              <option></option>
              <option value="viewing">Viewing</option>
              <option value="Chapel">Chapel</option>
              
          </select>
        </div>


        <div class="form-group">
            <label for="username">Capacity:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="capacity" id="capacity" value="{{{ Input::old('capacity') }}}">
        </div>         
            
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Save details</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop