<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{route('admin.dash')}}" class="b-brand">
                <div class="b-bg">
               <!--     <i class="feather icon-trending-up"></i> -->
                    <i class="fas fa-car"></i>
                </div>
                <span class="b-title">Renting Cars</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Dashboard</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                    <a href="{{route('admin.dash')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Info</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">CUSTOMERS</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('admin.customer.index')}}" class="">All Customers</a></li>

                        <li class=""><a href="{{route('admin.customer.create')}}" class="">Add Customer</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa fa-tags"></i></span><span class="pcoded-mtext">OWNERS</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('admin.owner.index')}}" class="">All Owners</a></li>

                        <li class=""><a href="{{route('admin.owner.create')}}" class="">Add Owner</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fas fa-car"></i></span><span class="pcoded-mtext">CARS</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('admin.car.index')}}" class="">All CARS</a></li>

                        <li class=""><a href="{{route('admin.car.create')}}" class="">Add Car</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa fa-calendar-check"></i></span><span class="pcoded-mtext">BOOKINGS</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('admin.booking.index')}}" class="">All Bookings</a></li>

                        <li class=""><a href="{{route('admin.booking.create')}}" class="">Add Booking</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa fa-money-check"></i></span><span class="pcoded-mtext">INVOICES</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('admin.invoice.index')}}" class="">All Invoices</a></li>

                        <li class=""><a href="{{route('admin.invoice.create')}}" class="">Add Invoice</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu nav-additional">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa fa-info-circle"></i></span><span class="pcoded-mtext">Version 1.0</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu nav-additional">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa fa-copyright"></i></span><span class="pcoded-mtext">Ahmad Alkhen</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu nav-additional">
                    <a  class="nav-link "><span class="pcoded-micon"><i class="fa fa-envelope"></i></span><span class="pcoded-mtext">ahmad.alkhen.sy@gmail.com</span></a>
                </li>


            </ul>
        </div>
    </div>
</nav>
