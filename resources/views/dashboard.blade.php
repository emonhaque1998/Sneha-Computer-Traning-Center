@extends('layouts.master')
@section('title', 'Dashboard')
@section('bodyId', 'body')
@section('bodyClass', 'dark-sidebar')

@section('content')
    @include('layouts.admin.sidebar')

   @include('layouts.admin.topbar')

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab" id="app">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Unikit</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Starter</li>
                                </ol>
                            </div>
                            


                            <router-view></router-view>


                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->


            </div><!-- container -->

           @include('layouts.admin.rightBarCanvas')
                
            @include('layouts.admin.footer')
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
@endsection