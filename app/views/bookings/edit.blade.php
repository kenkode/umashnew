@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Booking</h4>

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

		 <form method="POST" action="{{{ URL::to('bookings/update/'.$booking->id) }}}" accept-charset="UTF-8">
   
    <fieldset>

         <div class="form-group">
            <label for="username">Client <span style="color:red">*</span> :</label>
            <select class="form-control" name="client_id">         
            <option></option>
               @foreach($clients as $client)
              <option value="{{$client->id}}"<?= ($booking->client_id==$client->id)?'selected="selected"':''; ?>> {{$client->surname.' '.$client->firstname.' '.$client->other_names}}</option>
              @endforeach


            </select>
        </div>


        <div class="form-group">
            <label for="username">Car <span style="color:red">*</span> :</label>
            <select class="form-control" name="car_id">
            <option></option>
            <option value="{{$booking->car->id}}">{{$booking->car->reg_no}}</option>
            @foreach($cars as $car)
                @if($car->status == 'available')
                <option value="{{$car->id}}">{{$car->reg_no}}</option>
                @endif
            @endforeach


            <option></option>
               @foreach($cars as $car)
              <option value="{{$car->id}}"<?= ($booking->car_id==$car->id)?'selected="selected"':''; ?>> {{$car->reg_no}}</option>
              @endforeach





            </select>
        </div>


       <div class="form-group">
                        <label for="username">Date Out</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input required class="form-control datepicker"   placeholder="" type="text" name="date_out" id="date_out" value="{{$booking->date_out}}">
                        </div>
          </div>


          <div class="form-group">
                        <label for="username">Date Back</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input required class="form-control datepicker"   placeholder="" type="text" name="date_back" id="date_back" value="{{$booking->date_back}}">
                        </div>
          </div>

         <div class="form-group">
            <label for="username">Destination:</label>
            <input class="form-control" placeholder="" type="text" name="destination" id="destination" value="{{$booking->destination}}">
        </div>

        <div class="form-group">
            <label for="username">Return Branch / Location:</label>
            <input class="form-control" placeholder="" type="text" name="branch" id="branch" value="{{$booking->branch}}">
        </div>
       
        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Update Booking</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop