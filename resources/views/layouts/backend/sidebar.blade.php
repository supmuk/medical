<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
    	<img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    	<span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Doctor
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('doctor.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Doctor List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('doctor.add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Doctor</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Chemist
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('chemist.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chemist List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('chemist.add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Chemist</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Employee
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('employee.daily-call-report')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daily Call Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee.tour-program')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tour Program</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee.standard-fare-chart-index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Standard fare chart</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee.standard-fare-chart')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Standard fare chart</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Headquarter
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('headquarter.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Headquarter List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('headquarter.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Headquarter</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>