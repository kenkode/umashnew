@extends('layouts.ports')
@section('content')
<br/>


<div class="row">
	<div class="col-lg-12">
  <h3> Reports</h3>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-12">

	<div role="tabpanel">

	<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#hrrep" aria-controls="hrrep" role="tab" data-toggle="tab">HR Reports</a></li>
    <li role="presentation"><a href="#leave" aria-controls="leave" role="tab" data-toggle="tab">Leave Reports</a></li>
    <li role="presentation"><a href="#advance" aria-controls="advance" role="tab" data-toggle="tab">Salary Advance Reports</a></li>
    <li role="presentation"><a href="#payroll" aria-controls="payroll" role="tab" data-toggle="tab">Payroll Reports</a></li>
    <li role="presentation"><a href="#statutory" aria-controls="statutory" role="tab" data-toggle="tab">Statutory Reports</a></li>
    <li role="presentation"><a href="#erp" aria-controls="erp" role="tab" data-toggle="tab">ERP Reports</a></li>
    <li role="presentation"><a href="#morgue" aria-controls="morgue" role="tab" data-toggle="tab">Morgue Reports</a></li>
    
  </ul>

		<div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="hrrep">

      <br>

    <ul>

       <li>

        <a href="{{ URL::to('employee/select') }}"> Individual Employee report</a>

      </li>

      <li>

        <a href="{{ URL::to('reports/selectEmployeeStatus') }}"> Employee List report</a>

      </li>

      <li>
            <a href="{{ URL::to('reports/nextofkin/selectEmployee') }}" >Next of Kin Report</a>
        </li>

       <li>
            <a href="{{ URL::to('reports/selectEmployeeOccurence') }}" >Employee Occurence report </a>
        </li>

        <li>
            <a href="{{ URL::to('reports/CompanyProperty/selectPeriod') }}" >Company Property report </a>
        </li>

         <li>
            <a href="{{ URL::to('reports/Appraisals/selectPeriod') }}" >Appraisal report </a>
        </li>



    </ul>

</div>

    <div role="tabpanel" class="tab-pane" id="leave">
      <br>

    <ul>

    <li>
            <a href="{{ URL::to('leaveReports/selectApplicationPeriod') }}"> Leave Application</a>
       </li>

       <li>
          <a href="{{ URL::to('leaveReports/selectApprovedPeriod') }}">Leaves Approved</a>
       </li>

       <li>
          <a href="{{ URL::to('leaveReports/selectRejectedPeriod') }}">Leaves Rejected</a>
       </li>

       <li>
          <a href="{{ URL::to('leaveReports/selectLeave') }}">Leaves Balances</a>
       </li>
    
       <li>
          <a href="{{ URL::to('leaveReports/selectLeaveType') }}"> Employees on Leave</a>
       </li>  

       <li>
         <a href="{{ URL::to('leaveReports/selectEmployee') }}"> Individual Employee </a>     
       </li>  
     </ul>

     </div>

     <div role="tabpanel" class="tab-pane" id="advance">
     <br>
      <ul>

       <li>
          <a href="{{ URL::to('advanceReports/selectSummaryPeriod') }}">Advance Summary</a>
       </li>

       <li>
          <a href="{{ URL::to('advanceReports/selectRemittancePeriod') }}">Advance Remittance</a>
       </li>
    
    </ul>

    </div>

     <div role="tabpanel" class="tab-pane" id="payroll">
     <br>
      <ul>

       <li>
            <a href="{{ URL::to('payrollReports/selectPeriod') }}"> Monthly Payslips</a>
       </li>

       <li>
          <a href="{{ URL::to('payrollReports/selectSummaryPeriod') }}">Payroll Summary</a>
       </li>

       <li>
          <a href="{{ URL::to('payrollReports/selectRemittancePeriod') }}">Pay Remittance</a>
       </li>

       <li>
          <a href="{{ URL::to('payrollReports/selectEarning') }}"> Earning Report</a>
       </li> 

       <li>
          <a href="{{ URL::to('payrollReports/selectOvertime') }}"> Overtime Report</a>
       </li> 
    
       <li>
          <a href="{{ URL::to('payrollReports/selectAllowance') }}"> Allowance Report</a>
       </li>  

       <li>
          <a href="{{ URL::to('payrollReports/selectnontaxableincome') }}" >Non Taxable Income Report</a>
       </li> 

       <li>
          <a href="{{ URL::to('payrollReports/selectRelief') }}"> Relief Report</a>
       </li>  

       <li>
         <a href="{{ URL::to('payrollReports/selectDeduction') }}"> Deduction Report</a>     
       </li>  

    </ul>

    </div>
    <div role="tabpanel" class="tab-pane" id="statutory">
    <br>
    <ul>

       <li>
            <a href="{{ URL::to('payrollReports/selectNssfPeriod') }}"> NSSF Returns</a>
       </li>

       <li>
          <a href="{{ URL::to('payrollReports/selectNhifPeriod') }}">NHIF Returns</a>
       </li>

       <li>
          <a href="{{ URL::to('payrollReports/selectPayePeriod') }}">PAYE Returns</a>
       </li>

       <li>
          <a href="{{ URL::to('itax/download') }}">Download Itax Template</a>
       </li>

    </ul>

  </div>

  <div role="tabpanel" class="tab-pane" id="erp">
    <br>
    <ul>

       <li>
            <a href="{{ URL::to('erpReports/selectSalesPeriod') }}">Sales</a>
       </li>
        <li>
           <a href="{{ URL::to('erpReports/sales_summary') }}" target="_blank"> Sales Summary</a>
          </li> 

       <li>
            <a href="{{ URL::to('erpReports/selectPurchasesPeriod') }}">Purchases</a>
       </li>

       <li>
            <a href="{{ URL::to('erpReports/selectClientsPeriod') }}">Clients</a>
       </li>

       <li>
          <a href="{{ URL::to('erpReports/selectItemsPeriod') }}">Items</a>
       </li>

       <li>
          <a href="{{ URL::to('erpReports/selectExpensesPeriod') }}">Expenses</a>
       </li>
    
       <li>
          <a target="blank" href="{{ URL::to('erpReports/paymentmethods') }}">Payment Methods</a>
       </li>  

       <li>
         <a href="{{ URL::to('erpReports/payments') }}" target="_blank">Payments</a>     
       </li>

        <li>
         <a href="{{ URL::to('erpReports/locations') }}" target="_blank">Stores</a>     
       </li> 

        <li>
         <a href="{{ URL::to('erpReports/selectStockPeriod') }}">Stock report </a>     
       </li> 


        <li>
         <a href="{{ URL::to('erpReports/pricelist') }}" target="_blank">Price List </a>     
       </li>

        <li>
         <a href="{{ URL::to('erpReports/accounts') }}" target="_blank">Account Balances </a>     
       </li>  

    </ul>

  </div>

  <div role="tabpanel" class="tab-pane" id="morgue">
    <br>
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

</div>

</div>

</div>

@stop