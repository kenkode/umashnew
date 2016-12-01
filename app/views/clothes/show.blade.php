@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h4>Dressing Details</h4>  <div align="right"><a href="{{URL::to('umashReports/clothe/'.$clothes->id)}}" class="btn btn-success" target="_blank"> Print Preview</div></a>

<hr>
</div>
</div>
	
</div>
<br>
<p>


<div class="row">
	<div class="col-lg-5">

    @if (Session::has('flash_message'))

      <div class="alert alert-success">
      {{ Session::get('flash_message') }}
     </div>
    @endif

    @if (Session::has('delete_message'))

      <div class="alert alert-danger">
      {{ Session::get('delete_message') }}
     </div>
    @endif

    
      
        


    <table  class="table table-condensed table-bordered table-responsive table-hover">

     <tr>
      <td colspan="2"><font color="green">Deceased Details</font></td>
    </tr>
     <tr>
       <td>Name</td><td>{{$clothes->name}}</td>
     </tr>
      <tr>
       <td>Date Recorded</td><td>{{$clothes->date}}</td>
     </tr>
     <tr>
       <td>Cross Type </td><td>{{$clothes->crosstype}}</td>
     </tr>
     <tr>
       <td>Coffin Type</td><td>{{$clothes->coffin}}</td>
     </tr>
      <tr>
       <td>Date of Departure </td><td>{{$clothes->date_of_departure}}</td>
     </tr>


     <tr>
      <td colspan="2"><font color="green">Men's Wear Details</font></td>
    </tr>
     <tr>
       <td>Suit </td><td>{{$clothes->suit}}</td>
     </tr>
     <tr>
       <td>Trouser</td><td>{{$clothes->trouser}}</td>
     </tr>
     <tr>
       <td>Coat</td><td>{{$clothes->coat}}</td>
     </tr>
     <tr>
       <td>Shirt</td><td>{{$clothes->shirt}}</td>
     </tr>
     <tr>
       <td>Tie</td><td>{{$clothes->tie}}</td>
     </tr>
     <tr>
       <td>Vest</td><td>{{$clothes->vest}}</td>
     </tr>
     <tr>
       <td>Shoes</td><td>{{$clothes->shoes}}</td>
     </tr>
     <tr>
       <td>Socks</td><td>{{$clothes->socks}}</td>
     </tr>
     <tr>
       <td>Underwear</td><td>{{$clothes->underwear}}</td>
     </tr>
     <tr>
       <td>Belt</td><td>{{$clothes->belt}}</td>
     </tr>
     <tr>
       <td>Cufflincks</td><td>{{$clothes->cufflincks}}</td>
     </tr>
     <tr>
       <td>Boxers</td><td>{{$clothes->boxers}}</td>
     </tr>
     
     
   </table>

   </div>

  <div class="col-lg-5"> 
<table  class="table table-condensed table-bordered table-responsive table-hover">
   
     
    

     <tr>
      <td colspan="2"><font color="green">Ladies' wear Details</font></td>
    </tr>
     <tr>
       <td>Dress </td><td>{{$clothes->dress}}</td>
     </tr>
     <tr>
       <td>Trouser</td><td>{{$clothes->trouser_lady}}</td>
     </tr>
     <tr>
       <td>Coat</td><td>{{$clothes->coat_lady}}</td>
     </tr>
     <tr>
       <td>Skirt</td><td>{{$clothes->skirt}}</td>
     </tr>
     <tr>
       <td>Blouse</td><td>{{$clothes->blouse}}</td>
     </tr>
     <tr>
       <td>Stocking</td><td>{{$clothes->stocking}}</td>
     </tr>
     <tr>
       <td>Headwear</td><td>{{$clothes->headwear}}</td>
     </tr>
     <tr>
       <td>Gloves</td><td>{{$clothes->gloves}}</td>
     </tr>
     <tr>
       <td>Petticoat</td><td>{{$clothes->petticoat}}</td>
     </tr>
     <tr>
       <td>Pantie</td><td>{{$clothes->pantie}}</td>
     </tr>
     <tr>
       <td>Camisol</td><td>{{$clothes->camisol}}</td>
     </tr>
     <tr>
       <td>Shoes</td><td>{{$clothes->shoes_lady}}</td>
     </tr>

     <tr>
      <td colspan="2"><font color="green">Baby's Wear / Other Details</font></td>
    </tr>
     <tr>
       <td>1: </td><td>{{$clothes->baby1}}</td>
     </tr>
     <tr>
       <td>2: </td><td>{{$clothes->baby2}}</td>
     </tr>
     <tr>
       <td>3: </td><td>{{$clothes->baby3}}</td>
     </tr>
     <tr>
       <td>4: </td><td>{{$clothes->baby4}}</td>
     </tr>
     <tr>
       <td>5: </td><td>{{$clothes->baby5}}</td>
     </tr>

      <tr>
      <td colspan="2"><font color="green">Extra Details</font></td>
    </tr>
     <tr>
       <td>Receiving Officer </td><td>{{$clothes->officer}}</td>
     </tr>
     <tr>
       <td>Delivering Relative </td><td>{{$clothes->relative}}</td>
     </tr>


     

    </table>
 </div>


  

</div>

@stop