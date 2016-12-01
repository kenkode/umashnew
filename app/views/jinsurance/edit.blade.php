@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Update Member Details</h4>

<hr>
</div>	
</div>
<font color="red"><i>All fields marked with * are mandatory</i></font>

<div class="row">
	<div class="col-lg-8">

    
		
		 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

		 <form method="POST" action="{{{ URL::to('jinsurance/update/'.$jinsurances->id) }}}" accept-charset="UTF-8">
   
    <fieldset>

      <!-- Nav tabs -->
   <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#member_spouse" aria-controls="member_spouse" role="tab" data-toggle="tab">Member & Spouse Particulars</a></li>
    <li role="presentation"><a href="#dependants" aria-controls="dependants" role="tab" data-toggle="tab">Dependants Particulars</a></li>
    <li role="presentation"><a href="#parents" aria-controls="parents" role="tab" data-toggle="tab">Parents Particulars</a></li>
        
  </ul>



  <!-- Tab panes -->
  <div class="tab-content">

    <hr>
    <div role="tabpanel" class="tab-pane active" id="member_spouse">
      <div class="col-lg-6">

      <div class="form-group">
            <label for="username">Member Name <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="member_name" id="member_name" value="{{$jinsurances->member_name}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="member_bdate" id="member_bdate" value="{{$jinsurances->member_bdate}}">
                        </div>
          </div>

         <div class="form-group">
            <label for="username">Spouse Name:</label>
            <input class="form-control" placeholder="" type="text" name="spouse_name" id="spouse_name" value="{{$jinsurances->spouse_name}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="spouse_bdate" id="spouse_bdate" value="{{$jinsurances->spouse_bdate}}">
                        </div>
          </div>

          <fieldset>
       
       <hr>
        
        
        <div class="form-actions col-lg-2">
        
          <a href="#dependants" aria-controls="dependants" role="tab" data-toggle="tab"><button  class="btn btn-success btn-sm" >Click to Fill Next Details</button></a>
        </div>

    </fieldset>

        </div>
      
      
      </div>
      
    
    <div role="tabpanel" class="tab-pane" id="dependants">


        
        <div class="col-lg-6">


        
       <div class="form-group">
            <label for="username">First Dependant:</label>
            <input class="form-control" placeholder="" type="text" name="first_dependant" id="first_dependant" value="{{$jinsurances->first_dependant}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="first_bdate" id="first_bdate" value="{{$jinsurances->first_bdate}}">
                        </div>
          </div>
      

          

        <div class="form-group">
            <label for="username">Second Dependant:</label>
            <input class="form-control" placeholder="" type="text" name="second_dependant" id="second_dependant" value="{{$jinsurances->second_dependant}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="second_bdate" id="second_bdate" value="{{$jinsurances->second_bdate}}">
                        </div>
          </div>
        </div>
          
        <div class="col-lg-6">
        <div class="form-group">
            <label for="username">Third Dependant:</label>
            <input class="form-control" placeholder="" type="text" name="third_dependant" id="third_dependant" value="{{$jinsurances->third_dependant}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="third_bdate" id="third_bdate" value="{{$jinsurances->third_bdate}}">
                        </div>
          </div>
      

          

        <div class="form-group">
            <label for="username">Fourth Dependant:</label>
            <input class="form-control" placeholder="" type="text" name="fourth_dependant" id="fourth_dependant" value="{{$jinsurances->fourth_dependant}}">
        </div> 

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="fourth_bdate" id="fourth_bdate" value="{{$jinsurances->fourth_bdate}}">
                        </div>
          </div> 

              

        <fieldset>
       
       
        <hr>
        
        <div class="form-actions col-lg-2">
        
          <a href="#parents" aria-controls="parents" role="tab" data-toggle="tab"><button  class="btn btn-success btn-sm" >Click to Fill Next Details</button></a>
        </div>

    </fieldset>

        </div>

        

      
    </div>

      <div role="tabpanel" class="tab-pane" id="parents">


        
        <div class="col-lg-6">


        
       <div class="form-group">
            <label for="username">Name:</label>
            <input class="form-control" placeholder="" type="text" name="parent1_name" id="parent1_name" value="{{$jinsurances->parent1_name}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="parent1_date" id="parent1_date" value="{{$jinsurances->parent1_date}}">
                        </div>
          </div>
      

          <div class="form-group">
            <label for="username">ID No:</label>
            <input class="form-control" placeholder="" type="text" name="parent1_id" id="parent1_id" value="{{$jinsurances->parent1_id}}">
        </div>

        <div class="form-group">
            <label for="username">Name:</label>
            <input class="form-control" placeholder="" type="text" name="parent2_name" id="parent2_name" value="{{$jinsurances->parent2_name}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="parent2_date" id="parent2_date" value="{{$jinsurances->parent2_date}}">
                        </div>
          </div>

          <div class="form-group">
            <label for="username">ID No:</label>
            <input class="form-control" placeholder="" type="text" name="parent2_id" id="parent2_id" value="{{$jinsurances->parent2_id}}">
        </div>

        <fieldset>
       
       <hr>
        
        
        <div class="form-actions col-lg-2">
        
          <button type="submit" class="btn btn-success btn-sm" >Update Details</button>
        </div>

    </fieldset>

        </div>

      <div class="col-lg-6">

        <div class="form-group">
            <label for="username">Name:</label>
            <input class="form-control" placeholder="" type="text" name="parent3_name" id="parent3_name" value="{{$jinsurances->parent3_name}}">
        </div>

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="parent3_date" id="parent3_date" value="{{$jinsurances->parent3_date}}">
                        </div>
          </div>
      

          <div class="form-group">
            <label for="username">ID No:</label>
            <input class="form-control" placeholder="" type="text" name="parent3_id" id="parent3_id" value="{{$jinsurances->parent3_id}}">
        </div> 


        <div class="form-group">
            <label for="username">Name:</label>
            <input class="form-control" placeholder="" type="text" name="parent4_name" id="parent4_name" value="{{$jinsurances->parent4_name}}">
        </div> 

        <div class="form-group">
                        <label for="username">Date of Birth:</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker21"  readonly="readonly" placeholder="" type="text" name="parent4_date" id="parent4_date" value="{{$jinsurances->parent4_date}}">
                        </div>
          </div> 

          <div class="form-group">
            <label for="username">ID No:</label>
            <input class="form-control" placeholder="" type="text" name="parent4_id" id="parent4_id" value="{{$jinsurances->parent4_id}}">
        </div>       

     



      
      </div>     

      </div>


    
  </div>

      </fieldset>
</form>
		

  </div>

</div>

@stop