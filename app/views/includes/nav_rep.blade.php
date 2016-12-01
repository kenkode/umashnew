<style type="text/css">
#wrap{
    margin-top: 90px !important;
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}

.dropdown-menu-ken {
    margin-left: 190px;
}
</style>

 <nav class="navbar-default navbar-static-side" id="wrap" role="navigation">
    
           


            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">


                     <li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> HR Reports <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">
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
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->


       <li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> Leave Reports <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">


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
</li>

<li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> ERP Reports <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">

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
         <a href="{{ URL::to('erpReports/Payments') }}" target="_blank">Payments</a>     
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

</li>

<li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> Morgue Reports <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">

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

</li>

<li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> Salary Advance Reports <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">

       <li>
          <a href="{{ URL::to('advanceReports/selectSummaryPeriod') }}">Advance Summary</a>
       </li>

       <li>
          <a href="{{ URL::to('advanceReports/selectRemittancePeriod') }}">Advance Remittance</a>
       </li>

       </ul>
       </li> 

<li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> Payroll Reports <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">

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
           <a href="{{ URL::to('payrollReports/selectnontaxableincome') }}">Non Taxable Income Report</a>
        </li>  

        <li>
          <a href="{{ URL::to('payrollReports/selectRelief') }}"> Relief Report</a>
       </li>  

       <li>
         <a href="{{ URL::to('payrollReports/selectDeduction') }}"> Deduction Report</a>     
       </li> 

       </ul>
       </li> 

      <li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> Statutory Reports <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">

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

</li>



    </div>

</nav>
                    
                   


                     

                    

                   
                     
                    


                     


                    




                     


                    
                     
                    
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->