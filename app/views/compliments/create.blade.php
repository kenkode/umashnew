@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>New Hearse</h4>

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

		 <form method="POST" action="{{{ URL::to('cars') }}}" accept-charset="UTF-8">
   
    <fieldset>
        <div class="form-group">
            <label for="username">Registration Number <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="reg_no" id="reg_no" value="{{{ Input::old('reg_no') }}}">
        </div>

         <div class="form-group">
            <label for="username">Make:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="make" id="make" value="{{{ Input::old('make') }}}">
        </div>

        <div class="form-group">
            <label for="username">Tank  Capacity:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="tank_capacity" id="tank_capacity" value="{{{ Input::old('tank_capacity') }}}">
        </div>

        
        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Create Car</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop