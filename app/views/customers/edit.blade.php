@extends('layouts.erp')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Customer</h4>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-5">

    
		
		 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

		 <form method="POST" action="{{{ URL::to('customers/update/'.$client->id) }}}" accept-charset="UTF-8">
   
    <fieldset>       

        <div class="form-group">
            <label for="username">Surname<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="surname" id="surname" value="{{$client->surname}}">
        </div>

        <div class="form-group">
            <label for="username">First Name <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="firstname" id="firstname" value="{{$client->firstname}}">
        </div>

        <div class="form-group">
            <label for="username">Other Names <!-- <span style="color:red">*</span>  -->:</label>
            <input class="form-control" placeholder="" type="text" name="other_names" id="other_names" value="{{$client->other_names}}">
        </div>

         <!-- <div class="form-group">
            <label for="username">Email:</label>
            <input class="form-control" placeholder="" type="text" name="email_office" id="email_office" value="{{$client->email}}">
        </div> -->

         <div class="form-group">
            <label for="username">Phone <span style="color:red">*</span>:</label>
            <input class="form-control" placeholder="" type="text" name="office_phone" id="office_phone" value="{{$client->phone}}">
        </div>

        <div class="form-group">
            <label for="username">Address:</label>
            <input class="form-control" placeholder="" type="text" name="address" id="address" value="{{$client->address}}">
        </div>

       

        

        <!-- <div class="form-group">
            <label for="username">Contact Name :</label>
            <input class="form-control" placeholder="" type="text" name="cname" id="cname" value="{{$client->contact_person}}">
        </div>
        
        <div class="form-group">
            <label for="username">Contact Personal Email:</label>
            <input class="form-control" placeholder="" type="text" name="email_personal" id="email_personal" value="{{$client->contact_person_email}}">
        </div>
 -->
       <!--  <div class="form-group">
            <label for="username">Contact Personal Contact:</label>
            <input class="form-control" placeholder="" type="text" name="mobile_phone" id="mobile_phone" value="{{$client->contact_person_phone}}">
        </div> -->
       
          
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Update Customer</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop