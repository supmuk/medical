<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    	<img src="{{asset('assets/images/logo.svg')}}" alt="Ewin Care" class="brand-image" style="opacity: .8">
    	<span class="brand-text font-weight-light">Ewin Care</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item @if(\Request::is('graph') ) active  @endif">
                    <a href="{{route('graph')}}" class="nav-link menu-open ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                @role('doctor manager')
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
                @endrole

                @role('chemist manager')
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
                @endrole
                
                <li class="nav-item @if(\Request::is('employee/*') ) menu-open  @endif">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Employee
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('list employee')
                        <li class="nav-item">
                            <a href="{{route('employee.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee List</p>
                            </a>
                        </li>
                        @endcan
                        @can('list daily call report')
                        <li class="nav-item">
                            <a href="{{route('employee.daily-call-report-index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daily Call Report List</p>
                            </a>
                        </li>
                        @endcan
                        @can('add daily call report')
                        <li class="nav-item">
                            <a href="{{route('employee.daily-call-report')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daily Call Report</p>
                            </a>
                        </li>
                        @endcan
                        @can('list tour program')
                        <li class="nav-item">
                            <a href="{{route('employee.tour-program-index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tour Program List</p>
                            </a>
                        </li>
                        @endcan
                        @can('add tour program')
                        <li class="nav-item">
                            <a href="{{route('employee.tour-program')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tour Program</p>
                            </a>
                        </li>
                        @endcan
                        @can('list standard fare chart')
                        <li class="nav-item">
                            <a href="{{route('employee.standard-fare-chart-index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Standard fare chart List</p>
                            </a>
                        </li>
                        @endcan
                        @can('add standard fare chart')
                        <li class="nav-item">
                            <a href="{{route('employee.standard-fare-chart')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Standard fare chart</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                
                @role('headquarter manager')
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
                @endrole

                @role('place of working manager')
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
                @endrole

                @role('product manager')
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
                @endrole

                <li class="nav-item @if(\Request::is('edit-profile') ) menu-open  @endif">
                    <a href="{{route('edit-profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Edit Profile
                        </p>
                    </a>
                </li>
                
                @role('page manager')
                <li class="nav-item @if(\Request::is('pages/*') ) menu-open  @endif">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pages
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pages.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole

                @role('setting manager')
                <li class="nav-item @if(\Request::is('fare_amount/*') ) menu-open  @endif">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Setting Manager
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('fare_amount.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fare Amount</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('fare_amount.directAllowanceindex')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Direct Allowance</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>