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

		 <form method="POST" action="{{{ URL::to('bookings') }}}" accept-charset="UTF-8">
   
    <fieldset>

         <div class="form-group">
            <label for="username">Client <span style="color:red">*</span> :</label>
            <select class="form-control" name="client_id">
            @foreach($clients as $client)
                <option></option>
                <option value="{{$client->id}}">{{$client->surname.' '.$client->firstname.' '.$client->other_names}}</option>
            @endforeach
            </select>
        </div>



        <div class="form-group">
            <label for="username">Hearse <span style="color:red">*</span> :</label>
            <select class="form-control" name="car_id">
            @foreach($cars as $car)
                @if($car->status == 'available')
                <option></option>
                <!-- <option>New Car</option> -->
                <option value="{{$car->id}}">{{$car->reg_no}}</option>

                @endif
            @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="username">Destination <span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="destination" id="destination" value="{{{ Input::old('destination') }}}">
        </div>


       <div class="form-group">
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
          </div>

         

       <div class="form-group">
            <label for="username">Return Branch / Location:</label>
            <input class="form-control" placeholder="" type="text" name="branch" id="branch" value="{{{ Input::old('branch') }}}">
        </div>

        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Create Booking</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop