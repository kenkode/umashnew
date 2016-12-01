
@extends('layouts.payrollp')
{{ HTML::script('media/jquery-1.12.0.min.js') }}


    <?php
function asMoney($value) {
  return number_format($value, 2);
}

?>


<script type="text/javascript">
    $(function () {

        $(".wmd-view-topscroll").scroll(function () {
            $(".wmd-view")
            .scrollLeft($(".wmd-view-topscroll").scrollLeft());
        });

        $(".wmd-view").scroll(function () {
            $(".wmd-view-topscroll")
            .scrollLeft($(".wmd-view").scrollLeft());
        });

    });

    $(window).load(function () {
        $('.scroll-div').css('width', $('.dynamic-div').outerWidth() );
    });
</script>

        <style type="text/css">
    .wmd-view-topscroll, .wmd-view
{
    overflow-x: auto;
    overflow-y: hidden;
    width: 1040px;
}

.wmd-view-topscroll
{
    height: 16px;
}

.dynamic-div
{
    display: inline-block;
}

        </style>

@section('content')

<br/>

<div class="alert alert-success">
      <h4>Payroll successfully processed!</h4>
     </div>

<form method="POST" action="{{{ URL::to('payroll') }}}" accept-charset="UTF-8">

      <div align="right" style="margin-top:50px;" class="form-actions form-group">

        <input type="hidden" value="{{ $period }}" name="period"/>
        
     
  <h3 align="left">Processed Payroll for {{ $period }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="blank" href="{{URL::to('payrollReports/selectRemittance/'.$period)}}" style="background-color:orange;color:white;font-size:16px;padding:10px;border-radius:5px;text-decoration:none">Bank Remittance Report</a>&nbsp;&nbsp;&nbsp;<a target="blank" href="{{URL::to('payrollReports/selectSummary/'.$period)}}" style="color:white;font-size:16px;background-color:green;padding:10px;border-radius:5px;text-decoration:none">Payroll Summary Report</a></h3>
</div>
<hr>



<div class="row" >
  <div class="col-lg-12">

    <div class="wmd-view-topscroll">
       <div class="scroll-div">
        &nbsp;
       </div>
      </div>

    <div class="panel panel-default wmd-view">
      
        <div class="panel panel-body dynamic-div" style="margin-left:-10px;">
    

      <input type="hidden" name="period" value="{{ $period }}"> 
       <input type="hidden" name="account" value="{{ $account }}"> 

    <table id="example1" data-show-refresh="true" style="font-size:10px;width:1000px" class="table table-condensed table-bordered table-responsive table-hover nowrap">


      <thead>

        <th>#</th>
         <th>PF Number</th>
         <th>Employee</th>
         <th>Basic Pay</th>
         @foreach($earnings as $earning)
         <th>{{$earning->earning_name}}</th>
         @endforeach
         <th>Overtime-Hourly</th>
         <th>Overtime-Daily</th>
         @foreach($allowances as $allowance)
         <th>{{$allowance->allowance_name}}</th>
         @endforeach
         <th>Gross Pay</th>
         @foreach($nontaxables as $nontaxable)
         <th>{{$nontaxable->name}}</th>
         @endforeach
         <th>Total Tax</th>
         <th>Tax Relief</th>
         @foreach($reliefs as $relief)
         <th>{{$relief->relief_name}}</th>
         @endforeach
         <th>Paye</th>
         <th>Nssf</th>
         <th>Nhif</th>
         @foreach($deductions as $deduction)
         <th>{{$deduction->deduction_name}}</th>
         @endforeach
         <th>Total Deductions</th>
         <th>Net Pay</th>

      </thead>
      <tbody class="displayrecord">

        <?php $i = 1; 
         $totalsalary = 0.00;
         $totalearning = 0.00;
         $totalhourly = 0.00;
         $totaldaily = 0.00;
         $totalallowance = 0.00;
         $totalnontaxable = 0.00;
         $totalrelief = 0.00;
         $totalgross = 0.00;
         $totaltax = 0.00;
         $totaltaxrelief = 0.00;
         $totalpaye = 0.00;
         $totalnssf = 0.00;
         $totalnhif = 0.00;
         $otherdeduction = 0.00;
         $totaldeduction = 0.00;
         $totalnet = 0.00;
        ?>
        @foreach($employees as $employee)

        <tr>

          <td> {{ $i }}</td>
          <td >{{ $employee->personal_file_number }}</td>
          <td>{{ $employee->first_name.' '.$employee->last_name }}</td>
          <?php
           $totalsalary = $totalsalary + (double)$employee->basic_pay;
          ?>
          <td align="right">{{ asMoney((double)$employee->basic_pay) }}</td>
          @foreach($earnings as $earning)
          <td align="right">{{ asMoney((double)Payroll::earnings($employee->id,$earning->id,$period)) }}</td>
          @endforeach
          <?php
           $totalhourly = $totalhourly + (double)Payroll::overtimes($employee->id,'Hourly',$period);
          ?>
          <?php
           $totaldaily = $totaldaily + (double)Payroll::overtimes($employee->id,'Daily',$period);
          ?>
          <td align="right">{{ asMoney((double)Payroll::overtimes($employee->id,'Hourly',$period)) }}</td>
          <td align="right">{{ asMoney((double)Payroll::overtimes($employee->id,'Daily',$period)) }}</td>
          @foreach($allowances as $allowance)
          <td align="right">{{ asMoney((double)Payroll::allowances($employee->id,$allowance->id,$period)) }}</td>
          @endforeach
          
          <?php
           $totalgross = $totalgross + (double)Payroll::gross($employee->id,$period);
          ?>
          <?php
           $totaltax = $totaltax + (double)Payroll::totaltax($employee->id,$period);
          ?>
          <?php
          if($employee->income_tax_applicable == 1 && (double)Payroll::gross($employee->id,$period)>=11135.67 && $employee->income_tax_relief_applicable == 1){
           $totaltaxrelief = $totaltaxrelief + 1162;
          }
          ?>
          <?php
           $totalpaye = $totalpaye + (double)Payroll::tax($employee->id,$period);
          ?>
          <?php
           $totalnssf = $totalnssf + (double)Payroll::nssf($employee->id,$period);
          ?>

          <?php
           $totalnhif = $totalnhif + (double)Payroll::nhif($employee->id,$period);
          ?>
          
          <td align="right"><strong>{{ asMoney((double)Payroll::gross($employee->id,$period)) }}</strong></td>
          @foreach($nontaxables as $nontaxable)
          <td align="right">{{ asMoney((double)Payroll::nontaxables($employee->id,$nontaxable->id,$period)) }}</td>
          @endforeach
          <td align="right">{{ asMoney((double)Payroll::totaltax($employee->id,$period)) }}</td>
          @if($employee->income_tax_applicable == 1 && (double)Payroll::gross($employee->id,$period)>=11135.67 && $employee->income_tax_relief_applicable == 1)
          <td align="right">{{ asMoney('1162') }}</td>
          @else
          <td align="right">{{ asMoney('0.00') }}</td>
          @endif
          @foreach($reliefs as $relief)
          <td align="right">{{ asMoney((double)Payroll::reliefs($employee->id,$relief->id,$period)) }}</td>
          @endforeach
          <td align="right">{{ asMoney((double)Payroll::tax($employee->id,$period)) }}</td>
          <td align="right">{{ asMoney((double)Payroll::nssf($employee->id,$period)) }}</td>
          <td align="right">{{ asMoney((double)Payroll::nhif($employee->id,$period)) }}</td>
          @foreach($deductions as $deduction)
          <td align="right">{{ asMoney((double)Payroll::deductions($employee->id,$deduction->id,$period)) }}</td>
          @endforeach
          <?php
           $totaldeduction = $totaldeduction + (double)Payroll::total_deductions($employee->id,$period);
          ?>
          <?php
           $totalnet = $totalnet + (double)Payroll::net($employee->id,$period);
          ?>
          <td align="right"><strong>{{ asMoney((double)Payroll::total_deductions($employee->id,$period)) }}</strong></td>
          <td align="right"><strong>{{ asMoney((double)Payroll::net($employee->id,$period)) }}</strong></td>
          
        </tr>
         
        <?php $i++; ?>
        @endforeach


        <tr style="background:#EEE;">
          <td style="border-right:0 #FFF;"><span style="display:none">{{$i}}</span></td>
          <td></td>
          <td align='right'><strong>Totals</strong></td>
          <td align='right'><strong>{{asMoney($totalsalary)}}</strong></td>
           @foreach($earnings as $earning)
          <?php
           $totalearning.$earning->id = $totalearning + (double)Payroll::totalearnings($earning->id,$period);
          ?>
          <td align='right'><strong>{{asMoney($totalearning.$earning->id)}}</strong></td>
          @endforeach
          <td align='right'><strong>{{asMoney($totalhourly)}}</strong></td>
          <td align='right'><strong>{{asMoney($totaldaily)}}</strong></td>
          @foreach($allowances as $allowance)
          <?php
           $totalallowance.$allowance->id = $totalallowance + (double)Payroll::totalallowances($allowance->id,$period);
          ?>
          <td align='right'><strong>{{asMoney($totalallowance.$allowance->id)}}</strong></td>
          @endforeach
          
          <td align='right'><strong>{{asMoney($totalgross)}}</strong></td>
           @foreach($nontaxables as $nontaxable)
          <?php
           $totalnontaxable.$nontaxable->id = $totalnontaxable + (double)Payroll::totalnontaxable($nontaxable->id,$period);
          ?>
          <td align='right'><strong>{{asMoney($totalnontaxable.$nontaxable->id)}}</strong></td>
          @endforeach
          <td align='right'><strong>{{asMoney($totaltax)}}</strong></td>
          <td align='right'><strong>{{asMoney($totaltaxrelief)}}</strong></td>
          @foreach($reliefs as $relief)
          <?php
           $totalrelief.$relief->id = $totalrelief + (double)Payroll::totalreliefs($relief->id,$period);
          ?>
          <td align='right'><strong>{{asMoney($totalrelief.$relief->id)}}</strong></td>
          @endforeach
          <td align='right'><strong>{{asMoney($totalpaye)}}</strong></td>
          <td align='right'><strong>{{asMoney($totalnssf)}}</strong></td>
          <td align='right'><strong>{{asMoney($totalnhif)}}</strong></td>
          @foreach($deductions as $deduction)
          <?php
           $otherdeduction.$deduction->id = $otherdeduction + (double)Payroll::totaldeductions($deduction->id,$period);
          ?>
          <td align='right'><strong>{{asMoney($otherdeduction.$deduction->id)}}</strong></td>
          @endforeach
          <td align='right'><strong>{{asMoney($totaldeduction)}}</strong></td>
          <td align='right'><strong>{{asMoney($totalnet)}}</strong></td>
        </tr>

      </tbody>

    </table>
     
     </div>

  </div>


  </div>

</div>

</form>

@stop