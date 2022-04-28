<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>American Diversity Group | @yield('title') Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/backend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/backend/plugins/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/skins/skin-blue.css')}}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @stack('styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        @include('backend.partials.header')
    </header>
    <aside class="main-sidebar">
        @include('backend.partials.sidebar')
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            @yield('breadcrumb')
        </section>
        <section class="content">
            @include('backend.message')
            @yield('content')
        </section>
    </div>
    <footer class="main-footer">
        @include('backend.partials.footer')
    </footer>
    <div class="control-sidebar-bg"></div>
</div>

<script src="{{asset('/backend/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/backend/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/adminlte.min.js')}}"></script>
<script src="{{asset('/backend/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('/backend/js/demo.js')}}"></script>
@stack('scripts')
</body>
</html>
