<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets/admin/assets/img/logo/png-clipart-social-media-service-n11-com-logo-sandeep-maheshwari-dm-miscellaneous-text.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-small small">Dealership Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @if(Auth::user()->action_table == 'App\Admin')
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>
        @elseif(Auth::user())
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src=" {{asset(Auth::user()->ids->image)}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block">{{Auth::user()->ids->name}}</a>
                    </div>
                </div>
        @endif
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


{{--                   @if(Auth::user())--}}
{{--                <li class="nav-item ">--}}
{{--                    <a href="{{route('make_order')}}" class="nav-link active">--}}

{{--                        <p>--}}
{{--                            Make Order--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                @endif--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-user"></i>--}}
{{--                        <p>--}}
{{--                            Employee--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('employee.create')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Add Employee</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('employee.index')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>All Employees</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                @if(Auth::user()->action_table == 'App\Admin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Manage Area manager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('area_manager.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Area Manager</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('area_manager.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Area Manager</p>
                            </a>
                        </li>
                    </ul>
                </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Manage Shopkeeper
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('shopkeeper.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Shopkeeper</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Manage Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All users</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="{{route('inventory.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Inventory List

                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>
                            Inventory
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fas fa-gas-pump"></i>
                                <p>
                                    Beverage
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('inventory.create','beverages')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Add Beverages</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fas fa-gas-pump"></i>
                                <p>
                                    Snacks
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('inventory.create','snacks')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Add Snacks</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-business-time"></i>
                        <p>
                            Employee Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Salary
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('employee.salaryList')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Salary List</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('employee.employeeSalaryList')}}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Monthly Salary List</p>
                                    </a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">--}}
{{--                                        <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                        <p>Supplied</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </li>


                    </ul>
                </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>
                                Expenses Management
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('expenses.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Expense</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('expenses.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Expenses</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>
                            Business Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fas fa-gas-pump"></i>
                                <p>
                                    Beverage
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('beverage_category.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('beverage_size.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Size</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('beverage_flavor.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Flavor</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('beverage_type.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Type</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fas fa-gas-pump"></i>
                                <p>
                                    Snacks
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('snacks_category.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('snacks_size.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Size</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('snacks_flavor.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Flavor</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('snacks_type.index')}}" class="nav-link">
                                        <i class="fa fa-angle-double-right nav-icon"></i>
                                        <p>Type</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{route('area.index')}}" class="nav-link">
                                <i class="far fas fa-gas-pump"></i>
                                <p>
                                    Area
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{route('stock.index')}}" class="nav-link">
                                <i class="far fas fa-gas-pump"></i>
                                <p>
                                    Stock
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>


                    </ul>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa fa-file"></i>
                            <p>
                                Reports
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('report.perMonthCalculation')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Per Month Calculation</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('report.perMonthOrder')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Total Order Per Month</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('report.userTransaction')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Transaction Status</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>
                                Manage Order
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('pending.delivery')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Order List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('return_products.admin_index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Return Product Status</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                </li>
                    @elseif(Auth::user()->action_table == 'App\AreaManager')
                    <li class="nav-item ">
                        <a href="{{route('user.portal')}}" class="nav-link ">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>
                                Portal
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Manage Shopkeeper
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('shopkeeper.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Shopkeeper</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('shopkeeper.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Shopkeeper</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('shop_registration.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>
                                Shop Registration

                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Manage Order
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('pending.delivery')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Order List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('return_products.area_manager_index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Return Product Condition</p>
                                </a>
                            </li>
                        </ul>
                @elseif(Auth::user()->action_table == 'App\Shopkeeper')
                                <li class="nav-item ">
                                    <a href="{{route('user.portal')}}" class="nav-link ">
                                        <i class="nav-icon fas fa-calculator"></i>
                                        <p>
                                            Portal
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Manage Order
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('order')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Make Order</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('order.list')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Order List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('return_products.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Return Products</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

