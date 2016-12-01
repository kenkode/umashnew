@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Assigned Driver</h4>

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

		 <form method="POST" action="{{{ URL::to('drivers/update/'.$driver->id) }}}" accept-charset="UTF-8">
   
    <fieldset>


        <div class="form-group">
            <label for="username">Driver Name:<span style="color:red">*</label>
            <select name="driver_name" id="driver_name" class="form-control" > 
               <option></option>
               @foreach($employees as $employee)
              <option value="{{$employee->id}}"<?= ($driver->driver_name==$employee->id)?'selected="selected"':''; ?>> {{$employee->last_name.' '.$employee->first_name}}</option>
              @endforeach
                 
          </select>
        </div>

        <!-- <div class="forms-group">
            <label for="username">Driver Contact:</label>
            <input class="form-control" placeholder="" type="text" name="driver_contact" id="driver_contact" value="{{{ Input::old('driver_contact') }}}">
        </div> -->

       
        <div class="form-group">
            <label for="username">Vehicle Reg No:<span style="color:red">*</label>
            <select name="vehicle_reg_no" id="vehicle_reg_no" class="form-control">
                <option></option>

              @foreach($cars as $car)          
              <option value="{{$car->id}}"<?= ($driver->vehicle_reg_no==$car->id)?'selected="selected"':''; ?>> {{$car->reg_no}}</option>
              @endforeach
                
          </select>
        </div>

         <div class="form-group">
            <label for="username">Morgue:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="morgue" id="morgue" value="{{$driver->morgue}}" required>
        </div>

        <div class="form-group">
                        <label for="username">Date:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="date" id="date" value="{{$driver->driver_date}}" required>
                        </div>
          </div>


           <div class="form-group">
            <label for="username">Attendant Name:</label>
            <select name="attendant" id="attendant" class="form-control">
                <option></option>
                
                 @foreach($employees as $employee)
              <option value="{{$employee->id}}"<?= ($driver->attendant==$employee->id)?'selected="selected"':''; ?>> {{$employee->last_name.' '.$employee->first_name}}</option>
              @endforeach
                
          </select>
        </div>

        <div class="checkbox">
          <label>
          @if($driver->crosstype == 'YES')
              <input type="checkbox" name="crosstype" id="crosstype" checked>
                    Cross
            @else
            <input type="checkbox" name="crosstype" id="crosstype">
                    Cross
              </label>
            @endif
        </div>

        <div class="checkbox">
          <label>
          @if($driver->flower == 'YES')
              <input type="checkbox" name="flower" id="flower" checked>
                    Flower
              @else
            <input type="checkbox" name="flower" id="flower">
                    Flower
              </label>

            @endif

        </div>

        <div class="form-group">
            <label for="username">Narrative:</label>
            <textarea rows="5" class="form-control" name="narrative" id="narrative" value="{{$driver->narrative}}"></textarea>
        </div>


        
        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Update details</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop