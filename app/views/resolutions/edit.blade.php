@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>Update Resolution</h3>

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

		 <form method="POST" action="{{{ URL::to('resolutions/update/'.$resolution->id) }}}" accept-charset="UTF-8">

         <input type="hidden" name="enquiry_id" value="{{$resolution->enquiry->id}}">
   
    <fieldset>
        

        
       

        <div class="form-group">
            <label for="username">Resolution:</label>
           <textarea class="form-control" name="resolution">{{$resolution->resolution}}</textarea>
        </div>

        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-success btn-sm">Update Resolution</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop