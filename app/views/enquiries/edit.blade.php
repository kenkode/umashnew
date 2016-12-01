@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Enquiry</h4>

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

		 <form method="POST" action="{{{ URL::to('enquiries/update/'.$enquiry->id) }}}" accept-charset="UTF-8">
   
    <fieldset>
        <div class="form-group">
            <label for="username">Surname <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="surname" id="surname" value="{{$enquiry->surname}}">
        </div>

        <div class="form-group">
            <label for="username">First Name <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="firstname" id="firstname" value="{{$enquiry->firstname}}">
        </div>

        <div class="form-group">
            <label for="username">Other Name :</label>
            <input class="form-control" placeholder="" type="text" name="other_names" id="other_names" value="{{$enquiry->other_names}}">
        </div>

        <div class="form-group">
            <label for="username">Contact details:</label>
            <input class="form-control" placeholder="" type="text" name="contact_details" id="contact_details" value="{{$enquiry->contact_details}}">
        </div>

         <div class="form-group">
            <label for="username">Subject:<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="subject" id="subject" value="{{$enquiry->subject}}">
        </div>

       

        <div class="form-group">
            <label for="username">Description:</label>
            <textarea class="form-control" name="description">{{$enquiry->description}}</textarea>
        </div>

        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Update Enquiry</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop