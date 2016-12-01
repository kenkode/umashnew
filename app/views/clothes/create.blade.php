{{HTML::script('media/jquery-1.8.0.min.js') }}

@extends('layouts.morgue')

<script type="text/javascript">
$(document).ready(function() {
  
    $('#adm').change(function(){
      
        $.get("{{ url('api/getname')}}", 
        { option: $(this).val() }, 
        function(data) {
            /*console.log('hi');*/
                $('#name').val(data);
            });
        });
   });
</script>

@section('content')

<br><div class="row">
    <div class="col-lg-12">
  <h4>Clothing and Coffin</h4>

<hr>
</div>  
</div>
<font color="red"><i>All fields marked with * are mandatory</i></font>

<div class="row">
    <div class="col-lg-10">

    
        
         @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

         <form method="POST" action="{{{ URL::to('clothes') }}}" accept-charset="UTF-8">
   
    <fieldset>

      <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#main" aria-controls="main" role="tab" data-toggle="tab">Main</a></li>
    <li role="presentation"><a href="#mens_wear" aria-controls="mens_wear" role="tab" data-toggle="tab">Mens Wear</a></li>
    <li role="presentation"><a href="#ladies_wear" aria-controls="ladies_wear" role="tab" data-toggle="tab">Ladies Wear</a></li>
    <li role="presentation"><a href="#baby_wear" aria-controls="baby_wear" role="tab" data-toggle="tab">Baby Wear/Others</a></li>
    <li role="presentation"><a href="#extra_details" aria-controls="extra_details" role="tab" data-toggle="tab">Extra Details</a></li>
  </ul>


  <!-- Tab panes -->
  <div class="tab-content">

    <hr>
    <div role="tabpanel" class="tab-pane active" id="main">
      

      <h5><font color ="green">Deceased Details:</font></h5>

     
         <div class="col-lg-5">
            <label for="username">Admission Number:<span style="color:red">*</label>
            <select name="adm" id="adm" class="form-control">
                <option></option>
                 @foreach($admissions as $admission)
              <option value="{{$admission->id}}">{{$admission->admission_no}}</option>
              @endforeach
          </select>
        </div>
    


      
         <div class="col-lg-5">
            <label for="username">Name<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="name" id="name" value="{{{ Input::old('name') }}}">
        </div>

        <div class="col-lg-5">
                        <label for="username">Date: <span style="color:red">*</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="date" id="date" value="{{date('Y-M-d')}}">
                        </div>
          </div>

        <div class="col-lg-5">
            <label for="username">Cross Type and Color:</label>
            <input class="form-control" placeholder="" type="text" name="crosstype" id="crosstype" value="{{{ Input::old('crosstype') }}}">
        </div>      

        

        <div class="col-lg-5">
            <label for="username">Coffin Type and Color:</label>
            <input class="form-control" placeholder="" type="text" name="coffin" id="coffin" value="{{{ Input::old('coffin') }}}">
        </div>

    

               
        <div class="col-lg-5">
                        <label for="username">Date of Departure</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker45"  readonly="readonly" placeholder="" type="text" name="date_of_departure" id="date_of_departure" value="{{date('Y-M-d')}}">
                        </div>
          </div>

        

      <fieldset>
       
       
        
        
       <!--  <div class="form-actions col-lg-2">
        
          <a href="#mens_wear" aria-controls="mens_wear" role="tab" data-toggle="tab"><button  class="btn btn-success btn-sm" >Click to Fill Next Details</button></a>
        </div> -->

    </fieldset>
      
      </div>
      
    
    <div role="tabpanel" class="tab-pane" id="mens_wear">


        
        <div class="col-lg-5">


        
        <h5><font color ="green">Men Wear Details:</font></h5>

         <div class="checkbox">
          <label>
              <input type="checkbox" name="suit" id="suit">
                    SUIT
              </label>

        </div> 

        <div class="checkbox">
          <label>
              <input type="checkbox" name="trouser" id="trouser">
                    TROUSER
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="coat" id="coat">
                    COAT
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="shirt" id="shirt">
                    SHIRT
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="tie" id="tie">
                    TIE
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="vest" id="vest">
                    VEST
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="shoes" id="shoes">
                    SHOES
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="socks" id="socks">
                    SOCKS
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="underwear" id="underwear">
                    UNDERWEAR
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="belt" id="belt">
                    BELT
              </label>

        </div>    

        <div class="checkbox">
          <label>
              <input type="checkbox" name="cufflincks" id="cufflincks">
                    CUFFLINCKS
              </label>

        </div>    

        <div class="checkbox">
          <label>
              <input type="checkbox" name="boxers" id="boxers">
                    BOXERS
              </label>

        </div>    








        <!-- <fieldset>
       
       
        <hr>
        
        <div class="form-actions col-lg-2">
        
          <a href="#ladies_wear" aria-controls="ladies_wear" role="tab" data-toggle="tab"><button  class="btn btn-success btn-sm" >Click to Fill Next Details</button></a>
        </div>

    </fieldset> -->

        </div>

        

      
    </div>

      <div role="tabpanel" class="tab-pane" id="ladies_wear">


        <div class="col-lg-5">
        
        <h5><font color ="green">Ladys' Wear Details:</font></h5>

            <div class="checkbox">
          <label>
              <input type="checkbox" name="dress" id="dress">
                    DRESS
              </label>

        </div> 

        <div class="checkbox">
          <label>
              <input type="checkbox" name="trouser_lady" id="trouser_lady">
                    TROUSER
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="coat_lady" id="coat_lady">
                    COAT
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="skirt" id="skirt">
                    SKIRT
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="blouse" id="blouse">
                    BLOUSE
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="stocking" id="stocking">
                    STOCKING
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="headwear" id="headwear">
                    HEADWEAR
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="gloves" id="gloves">
                    GLOVES
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="petticoat" id="petticoat">
                    PETTICOAT
              </label>

        </div>  

        <div class="checkbox">
          <label>
              <input type="checkbox" name="pantie" id="pantie">
                    PANTIE
              </label>

        </div>    

        <div class="checkbox">
          <label>
              <input type="checkbox" name="camisol" id="camisol">
                    CAMISOL
              </label>

        </div>    

        <div class="checkbox">
          <label>
              <input type="checkbox" name="shoes_lady" id="shoes_lady">
                    SHOES
              </label>

        </div>    

            <!-- <fieldset>
       
       <hr>
        
        
        <div class="form-actions col-lg-2">
        
          <a href="#baby_wear" aria-controls="baby_wear" role="tab" data-toggle="tab"><button  class="btn btn-success btn-sm" >Click to Fill Next Details</button></a>
        </div>

    </fieldset> -->
        </div>

        



      </div>

      <div role="tabpanel" class="tab-pane" id="baby_wear">

        <div class="col-lg-5">
        
        <h5><font color ="green">Baby Wear/Other Details:</font></h5>


        <div class="form-group">
            <label for="username">1:</label>
            <input class="form-control" placeholder="" type="text" name="baby1" id="baby1" value="{{{ Input::old('baby1') }}}">
        </div>

        <div class="form-group">
            <label for="username">2:</label>
            <input class="form-control" placeholder="" type="text" name="baby2" id="baby2" value="{{{ Input::old('baby2') }}}">
        </div>

        <div class="form-group">
            <label for="username">3:</label>
            <input class="form-control" placeholder="" type="text" name="baby3" id="baby3" value="{{{ Input::old('baby3') }}}">
        </div>

        <div class="form-group">
            <label for="username">4:</label>
            <input class="form-control" placeholder="" type="text" name="baby4" id="baby4" value="{{{ Input::old('baby4') }}}">
        </div>

        <div class="form-group">
            <label for="username">5:</label>
            <input class="form-control" placeholder="" type="text" name="baby5" id="baby5" value="{{{ Input::old('baby5') }}}">
        </div>

        <!-- <fieldset>
       
       <hr>
        
        
        <div class="form-actions col-lg-2">
        
          <a href="#extra_details" aria-controls="extra_details" role="tab" data-toggle="tab"><button  class="btn btn-primary btn-sm" >Click to Fill Next Details</button></a>
        </div>

    </fieldset> -->

</div>
</div>
        
       




      <div role="tabpanel" class="tab-pane" id="extra_details">

        <div class="col-lg-5">
        
        <h5><font color ="green">Extra Details:</font></h5>


        <div class="form-group">
            <label for="username">Receiving Officer:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="officer" id="officer" value="{{{ Confide::user()->username}}}" readonly>
        </div>

        <div class="form-group">
            <label for="username">Delivering Relative:<span style="color:red">*</label>
            <input class="form-control" placeholder="" type="text" name="relative" id="relative" value="{{{ Input::old('relative') }}}">
        </div>



      <fieldset>   
       
              
        <div class="form-actions col-lg-2">
        
          <button type="submit" class="btn btn-success btn-sm" >Save Details</button>
        </div>

    </fieldset>

      </div>     

      </div>

    
  </div>

      </fieldset>
      
</form>
        

  </div>

</div>

@stop


