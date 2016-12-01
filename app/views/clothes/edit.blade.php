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
  <h4>Update Dressing</h4>

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

         <form method="POST" action="{{{ URL::to('clothes/update/'.$clothes->adm_id) }}}" accept-charset="UTF-8">
   
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
            <label for="username">Admission Number:</label>
            <select name="adm" id="adm" class="form-control">
                <option></option>
                 @foreach($admissions as $admission)
              <option value="{{$admission->id}}"<?= ($clothes->adm_id==$admission->id)?'selected="selected"':''; ?>> {{$admission->admission_no}}</option>
              @endforeach
          </select>
        </div>
    


      
         <div class="col-lg-5">
            <label for="username">Name<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="name" id="name" value="{{$clothes->name}}">
        </div>

        <div class="col-lg-5">
                        <label for="username">Date: </label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="date" id="date" value="{{$clothes->date}}">
                        </div>
          </div>

        <div class="col-lg-5">
            <label for="username">Cross Type and Color:</label>
            <input class="form-control" placeholder="" type="text" name="crosstype" id="crosstype" value="{{$clothes->crosstype}}">
        </div>      

        

        <div class="col-lg-5">
            <label for="username">Coffin Type and Color:</label>
            <input class="form-control" placeholder="" type="text" name="coffin" id="coffin" value="{{$clothes->coffin}}">
        </div>

    

               
        <div class="col-lg-5">
                        <label for="username">Date of Departure</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="date_of_departure" id="date_of_departure" value="{{$clothes->date_of_departure}}">
                        </div>
          </div>

        

      <!-- <fieldset>
       
       <hr>
        
        
        <div class="form-actions col-lg-2">
        
          <a href="#mens_wear" aria-controls="mens_wear" role="tab" data-toggle="tab"><button  class="btn btn-success btn-sm" >Click to Fill Next Details</button></a>
        </div>

    </fieldset> -->
      
      </div>
      
    
    <div role="tabpanel" class="tab-pane" id="mens_wear">


        
        <div class="col-lg-5">


        
        <h5><font color ="green">Men Wear Details:</font></h5>

         <div class="checkbox">
            <label>
            @if($clothes->suit == 'YES')
                      
              <input type="checkbox" name="suit" id="suit" checked>
                    SUIT

                    @else
              <input type="checkbox" name="suit" id="suit" >
                    SUIT
            @endif


            
            </label>

        </div> 

        <div class="checkbox">
          <label>
            @if($clothes->trouser == 'YES')
              <input type="checkbox" name="trouser" id="trouser" checked>
                    TROUSER

              @else
              <input type="checkbox" name="trouser" id="trouser" >
                    TROUSER
              
              @endif

              </label>
        </div>


        <div class="checkbox">
          <label>
            @if($clothes->coat == 'YES')
              <input type="checkbox" name="coat" id="coat" checked>
                    COAT              
           @else
              <input type="checkbox" name="coat" id="coat">
                    COAT
              </label>
            @endif
        </div>


        <div class="checkbox">
          <label>

            @if($clothes->shirt == 'YES')
              <input type="checkbox" name="shirt" id="shirt" checked>
                    SHIRT
              @else
              <input type="checkbox" name="shirt" id="shirt">
                    SHIRT
              </label>
              @endif
        </div>


        <div class="checkbox">
          <label>
            @if($clothes->tie=='YES')
              <input type="checkbox" name="tie" id="tie" checked>
                    TIE
              @else
              <input type="checkbox" name="tie" id="tie">
                    TIE
              </label>
               @endif

        </div>  

        <div class="checkbox">
          <label>
            @if($clothes->vest == 'YES')
              <input type="checkbox" name="vest" id="vest" checked>
                    VEST
              @else
              <input type="checkbox" name="vest" id="vest">
                    VEST
              </label>
              @endif

        </div>  

        <div class="checkbox">
          <label>
            @if($clothes->shoes == 'YES')
              <input type="checkbox" name="shoes" id="shoes" checked>
                    SHOES
              @else
              <input type="checkbox" name="shoes" id="shoes">
                    SHOES
              </label>
              @endif

        </div>  

        <div class="checkbox">
          <label>
            @if($clothes->socks == 'YES')
              <input type="checkbox" name="socks" id="socks" checked>
                    SOCKS
              @else
              <input type="checkbox" name="socks" id="socks">
                    SOCKS
              </label>
              @endif


        </div>  

        <div class="checkbox">
          <label>
            @if($clothes->underwear == 'YES')
              <input type="checkbox" name="underwear" id="underwear" checked>
                    UNDERWEAR
              @else
              <input type="checkbox" name="underwear" id="underwear" >
                    UNDERWEAR
              </label>
              @endif

        </div>  

        <div class="checkbox">
          <label>
            @if($clothes->belt == 'YES')
              <input type="checkbox" name="belt" id="belt" checked>
                    BELT
              @else
              <input type="checkbox" name="belt" id="belt">
                    BELT
              </label>
              @endif

        </div>    

        <div class="checkbox">
          <label>

            @if($clothes->cufflincks == 'YES')
              <input type="checkbox" name="cufflincks" id="cufflincks" checked>
                    CUFFLINCKS
             @else
              <input type="checkbox" name="cufflincks" id="cufflincks">
                    CUFFLINCKS
              </label>
              @endif

        </div>    

        <div class="checkbox">
          <label>
            @if($clothes->boxers == 'YES')
              <input type="checkbox" name="boxers" id="boxers" checked>
                    BOXERS
              @else
              <input type="checkbox" name="boxers" id="boxers">
                    BOXERS
              </label>
              @endif

        </div>    








       <!--  <fieldset>
       
       
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

            @if($clothes->dress == 'YES')
              <input type="checkbox" name="dress" id="dress" checked>
                    DRESS
             @else
              <input type="checkbox" name="dress" id="dress">
                    DRESS
              </label>
              @endif

        </div>



        <div class="checkbox">
          <label>

            @if($clothes->trouser_lady == 'YES')
              <input type="checkbox" name="trouser_lady" id="trouser_lady" checked>
                    TROUSER
             @else
              <input type="checkbox" name="trouser_lady" id="trouser_lady">
                    TROUSER
              </label>
              @endif

        </div>



        <div class="checkbox">
          <label>

            @if($clothes->coat_lady == 'YES')
              <input type="checkbox" name="coat_lady" id="coat_lady" checked>
                    COAT
             @else
              <input type="checkbox" name="coat_lady" id="coat_lady">
                    COAT
              </label>
              @endif

        </div>



        <div class="checkbox">
          <label>
           @if($clothes->skirt == 'YES')
              <input type="checkbox" name="skirt" id="skirt" checked>
                    SKIRT
              @else

              <input type="checkbox" name="skirt" id="skirt">
                    SKIRT
          </label>
          @endif

        </div>  


        <div class="checkbox">
          <label>
           @if($clothes->blouse == 'YES')
              <input type="checkbox" name="blouse" id="blouse" checked>
                    BLOUSE
              @else

            <input type="checkbox" name="blouse" id="blouse">
                    BLOUSE

              </label>
          @endif

        </div>  

        <div class="checkbox">
          <label>
          @if($clothes->stocking == 'YES')
              <input type="checkbox" name="stocking" id="stocking" checked>
                    STOCKING
            @else
              <input type="checkbox" name="stocking" id="stocking">
                    STOCKING
              </label>
            @endif
        </div>  

        
        <div class="checkbox">
          <label>
          @if($clothes->headwear == 'YES')
              <input type="checkbox" name="headwear" id="headwear" checked>
                    HEADWEAR
            @else
            <input type="checkbox" name="headwear" id="headwear">
                    HEADWEAR
              </label>
            @endif
        </div>  

        <div class="checkbox">
          <label>
          @if($clothes->gloves == 'YES')
              <input type="checkbox" name="gloves" id="gloves" checked>
                    GLOVES
            @else
             <input type="checkbox" name="gloves" id="gloves">
                    GLOVES
              </label>
          @endif
        </div>  

        <div class="checkbox">
          <label>
          @if($clothes->petticoat == 'YES')
              <input type="checkbox" name="petticoat" id="petticoat" checked>
                    PETTICOAT

                @else
                <input type="checkbox" name="petticoat" id="petticoat">
                    PETTICOAT
              </label>
              @endif
        </div>


        <div class="checkbox">
          <label>
          @if($clothes->pantie == 'YES')
              <input type="checkbox" name="pantie" id="pantie" checked>
                    PANTIE
                @else
               <input type="checkbox" name="pantie" id="pantie">
                    PANTIE
              </label>
              @endif
        </div>    

        <div class="checkbox">
          <label>
          @if($clothes->camisol == 'YES')
              <input type="checkbox" name="camisol" id="camisol" checked>
                    CAMISOL
                @else
               <input type="checkbox" name="camisol" id="camisol">
                    CAMISOL
              </label>
              @endif
        </div>    

        <div class="checkbox">
          <label>
          @if($clothes->shoes_lady == 'YES')
              <input type="checkbox" name="shoes_lady" id="shoes_lady" checked>
                    SHOES
              @else
              <input type="checkbox" name="shoes_lady" id="shoes_lady">
                    SHOES
              </label>
            
            @endif
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
            <input class="form-control" placeholder="" type="text" name="baby1" id="baby1" value="{{$clothes->baby1}}">
        </div>

        <div class="form-group">
            <label for="username">2:</label>
            <input class="form-control" placeholder="" type="text" name="baby2" id="baby2" value="{{$clothes->baby2}}">
        </div>

        <div class="form-group">
            <label for="username">3:</label>
            <input class="form-control" placeholder="" type="text" name="baby3" id="baby3" value="{{$clothes->baby3}}">
        </div>

        <div class="form-group">
            <label for="username">4:</label>
            <input class="form-control" placeholder="" type="text" name="baby4" id="baby4" value="{{$clothes->baby4}}">
        </div>

        <div class="form-group">
            <label for="username">5:</label>
            <input class="form-control" placeholder="" type="text" name="baby5" id="baby5" value="{{$clothes->baby5}}">
        </div>

        <!-- <fieldset>
       
       <hr>
        
        
        <div class="form-actions col-lg-2">
        
          <a href="#extra_details" aria-controls="extra_details" role="tab" data-toggle="tab"><button  class="btn btn-success btn-sm" >Click to Fill Next Details</button></a>
        </div>

    </fieldset> -->

</div>
</div>
        
       




      <div role="tabpanel" class="tab-pane" id="extra_details">

        <div class="col-lg-5">
        
        <h5><font color ="green">Extra Details:</font></h5>


        <div class="form-group">
            <label for="username">Receiving Officer:</label>
            <input class="form-control" placeholder="" type="text" name="officer" id="officer" value="{{$clothes->officer}}">
        </div>

        <div class="form-group">
            <label for="username">Delivering Relative:</label>
            <input class="form-control" placeholder="" type="text" name="relative" id="relative" value="{{$clothes->relative}}">
        </div>



      <fieldset>
       
       <hr>
        
        
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


