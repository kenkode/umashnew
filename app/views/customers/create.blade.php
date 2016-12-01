@extends('layouts.erp')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>New Customer</h4>

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

		 <form method="POST" action="{{{ URL::to('customers') }}}" accept-charset="UTF-8">
   
    <fieldset>
        <div class="form-group">
            <label for="username">Surname<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="surname" id="surname" value="{{{ Input::old('surname') }}}">
        </div>

        <div class="form-group">
            <label for="username">First Name <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="firstname" id="firstname" value="{{{ Input::old('firstname') }}}">
        </div>

        <div class="form-group">
            <label for="username">Other Names :</label>
            <input class="form-control" placeholder="" type="text" name="other_names" id="other_names" value="{{{ Input::old('other_names') }}}">
        </div>

         <!-- <div class="form-group">
            <label for="username">Email:</label>
            <input class="form-control" placeholder="" type="text" name="email_office" id="email_office" value="{{{ Input::old('email_office') }}}">
        </div> -->

        <div class="form-group">
            <label for="username">Phone<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="office_phone" id="office_phone" value="{{{ Input::old('office_phone') }}}">
        </div>

        <div class="form-group">
            <label for="username">Address:</label>
            <input class="form-control" placeholder="" type="text" name="address" id="address" value="{{{ Input::old('email_personal') }}}">
        </div>        
        

       <!--  <div class="form-group">
        	<label for="username">Type</label><span style="color:red">*</span> :
           <select name="type" class="form-control">
                           <option></option>
                            <option value="Customer"> Customer</option>
                            <option value="Supplier"> Supplier</option>
                        </select>
        </div> -->
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Create Customer</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop