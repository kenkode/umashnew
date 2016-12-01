@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Room Booking</h4>

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

		 <form method="POST" action="{{{ URL::to('roombookings/update/'.$roombooking->id) }}}" accept-charset="UTF-8">
   
    <fieldset>

         <div class="form-group">
            <label for="username">Client <span style="color:red">*</span> :</label>
            <select class="form-control" name="client_id">
           <!--  <option value="{{$roombooking->client->id}}">{{$roombooking->client->surname.' '.$roombooking->client->firstname.' '.$roombooking->client->other_names}}</option>
            @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->surname.' '.$client->firstname.' '.$client->other_names}}</option>
            @endforeach -->


            <option></option>
               @foreach($clients as $client)
              <option value="{{$client->id}}"<?= ($roombooking->client_id==$client->id)?'selected="selected"':''; ?>> {{$client->surname.' '.$client->firstname.' '.$client->other_names}}</option>
              @endforeach


            </select>
        </div>


        <div class="form-group">
            <label for="username">Room <span style="color:red">*</span> :</label>
            <select class="form-control" name="room_id">
            
        <option></option>
               @foreach($rooms as $room)
              <option value="{{$room->id}}"<?= ($roombooking->room_id==$room->id)?'selected="selected"':''; ?>> {{$room->room_no}}</option>
              @endforeach
            </select>
        </div>


       <div class="form-group">
                        <label for="username">Date </label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker45"  readonly="readonly" placeholder="" type="text" name="book_date" id="book_date" value="{{$roombooking->book_date}}">
                        </div>
          </div>
         <!-- <div class="form-group">
            <label for="username">Charges:</label>
            <input class="form-control" placeholder="" type="text" name="charges" id="charges" value="{{$roombooking->charges}}">
        </div> -->

              
        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Update Booking</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop