<style type="text/css">
#wrap{
    margin-top: 90px !important;
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}

.dropdown-menu-ken {
    margin-left: 90px;
}
</style>

 <nav class="navbar-default navbar-static-side" id="wrap" role="navigation">
    
           


            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">
         
                    <li>
                        <a href="{{ URL::to('employees') }}"><i class="fa fa-users fa-fw"></i> Employees </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('Properties') }}"><i class="fa fa-users fa-fw"></i> Company Property </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('Appraisals') }}"><i class="fa fa-users fa-fw"></i> Employee Appraisal </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('occurences') }}"><i class="fa fa-users fa-fw"></i> Employee Occurence </a>
                    </li>

                    <li>
                        <a target="_blank" href='{{asset("public/uploads/employees/documents/umash appointment letter.docx")}}'><i class="fa fa-file fa-fw"></i> Employee Detail Form </a>
                    </li>
                    
                    <li>
                        <a target="_blank" href='{{asset("public/uploads/employees/documents/LEAVE DOC.pdf")}}'><i class="fa fa-file fa-fw"></i> Leave Application Form </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('leavemgmt') }}"><i class="glyphicon glyphicon-list-alt fa-fw"></i> Leave Applications</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('leaveamends') }}"><i class="fa fa-edit fa-fw"></i>  Leaves Amended</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('leaveapprovals') }}"><i class="fa fa-check fa-fw"></i>  Leaves Approved</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('leaverejects') }}"><i class="fa fa-barcode fa-fw"></i> Leaves Rejected</a>
                    </li>  

                   <li>
                        <a href="{{ URL::to('leavetypes') }}"><i class="fa fa-list fa-fw"></i> Leave Types</a>
                    </li>
                   

                   <li>
                        <a href="{{ URL::to('holidays') }}"><i class="fa fa-random fa-fw"></i> Holiday Management</a>
                    </li>

                    
                    <!-- <li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-folder-open fa-fw"></i> Leaves <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-ken">


                    <li>
                        <a href="{{ URL::to('leavemgmt') }}"> Leave Applications</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('leaveamends') }}"> Leaves Amended</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('leaveapprovals') }}"> Leaves Approved</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('leaverejects') }}"> Leaves Rejected</a>
                    </li>


                     

                   <li>
                        <a href="{{ URL::to('leavetypes') }}"> Leave Types</a>
                    </li>
                   

                   <li>
                        <a href="{{ URL::to('holidays') }}"> Holiday Management</a>
                    </li>

                    


                     <li>
                        <a href="{{ URL::to('leaveReports') }}"> Reports</a>
                    </li>  
   </ul>
</li>

 -->
                     <li>
                        <a href="{{ URL::to('reports/employees') }}"><i class="fa fa-folder fa-fw"></i> HR Reports </a>
                    </li>
                    
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->