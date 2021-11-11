@extends('admin.layout')
@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                <!--   <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">

                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('admin.dash')}}"><i class="feather icon-home"></i></a></li>
                                        @yield('route-list')

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- [ breadcrumb ] end -->

                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>@yield('title')</h5>
                                        </div>
                                        <div class="card-block">
                                                @yield('content-template')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

@endsection
