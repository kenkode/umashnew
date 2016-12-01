@extends('layouts.morgue_rep')
@section('content')
<br/>





<div class="row">
    <div class="col-lg-12">
  <h4>Umash Reports</h4>

<hr>
</div>  
</div>


<div class="row">
    <div class="col-lg-12">
      

    <ul>      

       <li>
            <a href="{{ URL::to('umashreports/selectEnquiryPeriod') }}">Enquiries</a>
       </li>      

       <li>
            <a href="{{ URL::to('umashreports/selectAdmissionPeriod') }}">Admissions</a>
       </li>

        <li>
            <a href="{{ URL::to('umashreports/selectBookingPeriod') }}">Bookings</a>
       </li>
       
       <li>
            <a href="{{ URL::to('umashreports/selectCarPeriod') }}">Cars</a>
       </li>

        <li>
            <a href="{{ URL::to('umashreports/selectDriverPeriod') }}">Drivers</a>
       </li>    

       <li>
            <a href="{{ URL::to('umashreports/selectJinsurancePeriod') }}">Jubilee Insurance</a>
       </li>

       
    </ul>
    

  </div>

</div>


@stop