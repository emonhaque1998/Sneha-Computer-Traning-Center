<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
            <title>Sneha Computer Learning - @yield('title')</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">

       

     <!-- App css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
     

</head>
<body id="@yield('bodyId')" class="@yield('bodyClass')" style="@yield('bodyStyle')">
    <div id="app">
        @yield("content")
    </div>
    

    
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    
</body>

</html>