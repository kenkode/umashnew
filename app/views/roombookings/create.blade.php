@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>New Booking</h4>

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

		 <form method="POST" action="{{{ URL::to('roombookings') }}}" accept-charset="UTF-8">
   
    <fieldset>

         <div class="form-group">
            <label for="username">Client <span style="color:red">*</span> :</label>
            <select class="form-control" name="client_id" id = "client_id">
            @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->surname.' '.$client->firstname.' '.$client->other_names}}</option>
            @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="username">Room :</label>
            <select class="form-control" name="room_id" id = "room_id">
            @foreach($rooms as $room)
                @if($room->status == 'available')
                <option value="{{$room->id}}">{{$room->room_no}}</option>
                @endif
            @endforeach
            </select>
        </div>


        <div class="form-group">
                        <label for="username">Date </label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="book_date" id="book_date" value="">
                        </div>
          </div>


        <!-- <div class="form-group">
            <label for="username">Charges<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="charges" id="charges" value="{{{ Input::old('charges') }}}">
        </div> -->


       <!-- <div class="form-group">
                        <label for="username">Date Out<span style="color:red">*</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input  class="form-control datepicker3"   placeholder="" type="text" name="date_out" id="date_out" value="">
                        </div>
          </div>


          <div class="form-group">
                        <label for="username">Date Back<span style="color:red">*</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input  class="form-control datepicker3"   placeholder="" type="text" name="date_back" id="date_back" value="">
                        </div>
          </div> -->

         

      <!--  <div class="form-group">
            <label for="username">Distance(kms):</label>
            <input class="form-control" placeholder="" type="text" name="distance" id="distance" value="{{{ Input::old('distance') }}}">
        </div> -->

        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Create Booking</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop