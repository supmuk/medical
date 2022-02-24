<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    	<img src="{{asset('assets/images/logo.jpeg')}}" alt="Ewin Care" class="brand-image" style="opacity: .8">
    	<span class="brand-text font-weight-light">Ewin Care</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item @if(\Request::is('doctor/*') ) menu-open  @endif">
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
                <li class="nav-item @if(\Request::is('chemist/*') ) menu-open  @endif">
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
                <li class="nav-item @if(\Request::is('employee/*') ) menu-open  @endif">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Employee
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('employee.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee.daily-call-report-index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daily Call Report List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee.daily-call-report')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daily Call Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee.tour-program-index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tour Program List</p>
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
                                <p>Standard fare chart List</p>
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
                <li class="nav-item @if(\Request::is('headquarter/*') ) menu-open  @endif">
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
                <li class="nav-item @if(\Request::is('place-of-working/*') ) menu-open  @endif">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Place of working
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('place-of-working.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Place of working</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('place-of-working.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Place of working</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if(\Request::is('product/*') ) menu-open  @endif">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Product
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Product</p>
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