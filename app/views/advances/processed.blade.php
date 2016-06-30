
@extends('layouts.payrollp')

{{ HTML::script('media/jquery-1.8.0.min.js') }}

    <?php
function asMoney($value) {
  return number_format($value, 2);
}

?>

@section('content')
<br/>

<div class="alert alert-success">
      <h4>Advance salaries successfully processed!</h4>
     </div>

<div class="row">
  <div class="col-lg-12">
  <h3>Processed Advance Salaries for {{ $period }}</h3>

<hr>
</div>  
</div>


<div class="row" >
  <div class="col-lg-12">

    
    <form method="POST" action="{{{ URL::to('advance') }}}" accept-charset="UTF-8">

      <input type="hidden" name="period" value="{{ $period }}"> 
       <input type="hidden" name="account" value="{{ $account }}"> 


        <div class="panel panel-default">
      
        <div class="panel-body" style="margin-left:-10px;">

    <table id="example3" style="font-size:14px;width:1000px" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
         <th>Payroll Number</th>
         <th>Employee</th>
         <th>Amount</th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($employees as $employee)

        <tr>

          <td> {{ $i }}</td>
          <td >{{ $employee->personal_file_number }}</td>
          <td>{{ $employee->first_name.' '.$employee->last_name }}</td>
          <td align="right">{{ asMoney((double)$employee->deduction_amount) }}</td>
         
        </tr>
         
        <?php $i++; ?>
        @endforeach

      </tbody>

    </table>
     
     

      </form>
    

  </div>

</div>

@stop