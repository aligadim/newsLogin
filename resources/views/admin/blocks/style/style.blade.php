
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/adminpanel/images/favicon.ico')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('assets/adminpanel/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/adminpanel/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/adminpanel/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/adminpanel/css/style.css') }}">
        <!-- Sweet Alert-->
        <link href="{{asset('assets/adminpanel/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/adminpanel/libs/toastr/build/toastr.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <!-- Icons Css -->
        <link href="{{asset('assets/adminpanel/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">

        <link href="{{asset('assets/adminpanel/css/custom.css')}}?v={{ time() }}" id="app-style" rel="stylesheet" type="text/css" />
        @stack('styles')
        @stack('css_stack')
