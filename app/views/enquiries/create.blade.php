@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>New Enquiry</h4>

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

		 <form method="POST" action="{{{ URL::to('enquiries') }}}" accept-charset="UTF-8">
   
    <fieldset>
        <div class="form-group">
            <label for="username">Surname <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="surname" id="surname" value="{{{ Input::old('surname') }}}">
        </div>

        <div class="form-group">
            <label for="username">First Name <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="firstname" id="firstname" value="{{{ Input::old('firstname') }}}">
        </div>

        <div class="form-group">
            <label for="username">Other Names <!-- <span style="color:red">*</span>  -->:</label>
            <input class="form-control" placeholder="" type="text" name="other_names" id="surname" value="{{{ Input::old('other_names') }}}">
        </div>

        <div class="form-group">
            <label for="username">Contact Details <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="contact_details" id="contact_details" value="{{{ Input::old('contact_details') }}}">
        </div>

         <div class="form-group">
            <label for="username">Subject:<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="subject" id="subject" value="{{{ Input::old('subject') }}}">
        </div>

       

        <div class="form-group">
            <label for="username">Description:</label>
           <textarea class="form-control" name="description"></textarea>
        </div>

        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Create Enquiry</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop