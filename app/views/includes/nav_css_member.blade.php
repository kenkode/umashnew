 <nav class="navbar-default navbar-static-side" role="navigation">
    
           


            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">

                    <li>
                        <a href="{{ URL::to('dashboard') }}"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    
                    <li>
                        <a target="_blank" href='{{asset("public/uploads/employees/documents/LEAVE DOC.pdf")}}'><i class="fa fa-file fa-fw"></i> Leave Application Form </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('css/leave') }}"><i class="fa fa-tasks fa-fw"></i> Leave Applications</a>
                    </li>


                     <li>
                        <a href="{{ URL::to('css/balances') }}"><i class="fa fa-list fa-fw"></i> Leave Balances</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('css/subordinateleave') }}"><i class="glyphicon glyphicon-check fa-fw"></i> Supervisor Approval</a>
                    </li>

                
                   <li>
                        <a href="{{ URL::to('css/payslips') }}"><i class="fa fa-money fa-fw"></i> Payslips</a>
                    </li>


                    
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->