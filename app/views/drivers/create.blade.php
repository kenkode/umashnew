@extends('layouts.morgue')


<script type="text/javascript">
$(document).ready(function() {
  
    $('#driver_name').change(function(){
      
        $.get("{{ url('api/getcontact')}}", 
        { option: $(this).val() }, 
        function(data) {
            /*console.log('hi');*/
                $('#driver_contact').val(data);
            });
        });
   });
</script>

@section('content')

<br><div class="row">
	<div class="col-lg-10">
  <h4>Assign Driver</h4>

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

		 <form method="POST" action="{{{ URL::to('drivers') }}}" accept-charset="UTF-8">
   
    <fieldset>


        <div class="form-group">
            <label for="username">Driver Name:<span style="color:red">*</label>
            <select name="driver_name" id="driver_name" class="form-control">
                <option></option>
                 @foreach($employees as $employee)
              <option value="{{$employee->id}}">{{$employee->last_name.' '.$employee->first_name}}</option>
              @endforeach
                
          </select>
        </div>

       <!-- <div class="form-group">
            <label for="username">Driver Contact:</label>
            <input class="form-control" placeholder="" type="text" name="driver_contact" id="driver_contact" value="{{{ Input::old('driver_contact') }}}">
        </div> -->

        
        <div class="form-group">
            <label for="username">Vehicle Reg No:<span style="color:red">*</label>
            <select name="vehicle_reg_no" id="vehicle_reg_no" class="form-control">
                <option></option>

                @foreach($cars as $car)
              <option value="{{$car->id}}">{{$car->reg_no}}</option>
              @endforeach
                
          </select>
        </div>

         <div class="form-group">
            <label for="username">Morgue:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="morgue" id="morgue" value="{{{ Input::old('morgue') }}}">
        </div>

        <div class="form-group">
                        <label for="username">Date:<span style="color:red">*</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="date" id="date" value="" required>
                        </div>
          </div>

          <div class="form-group">
            <label for="username">Attendant Name:</label>
            <select name="attendant" id="attendant" class="form-control">
                <option></option>
                 @foreach($employees as $employee)
              <option value="{{$employee->id}}">{{$employee->last_name.' '.$employee->first_name}}</option>
              @endforeach
                
          </select>
        </div>

        <div class="checkbox">
          <label>
              <input type="checkbox" name="cross" id="cross">
                    Cross
              </label>

        </div>

        <div class="checkbox">
          <label>
              <input type="checkbox" name="flower" id="flower">
                    Flower
              </label>

        </div>

        <div class="form-group">
            <label for="username">Narrative:</label>
            <textarea rows="5" class="form-control" name="narrative" id="narrative" >{{ Input::old('email_office') }}</textarea>
        </div>


        
        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Save details</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop