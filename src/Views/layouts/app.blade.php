<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Confraria Web">
        <meta name="author" content="Confraria Web">
        <title>Confraria Web - @yield('title')</title>
        <link href="{{ asset('vendor/template-admin-default/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{ asset('vendor/template-admin-default/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/template-admin-default/css/sb-admin-2.min.css') }}" rel="stylesheet">
        @stack('styles')
    </head>
    <body id="page-top">
        <div id="wrapper">
            @include('templateAdminDefault::partials.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('templateAdminDefault::partials.navbar')
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                            @yield('content-actions')
                        </div>
                        @yield('content')
                    </div>
                </div>
                @include('templateAdminDefault::partials.footer')
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('templateAdminDefault::modals.logout')
        <script src="{{ asset('vendor/template-admin-default/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/template-admin-default/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/template-admin-default/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('vendor/template-admin-default/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/template-admin-default/js/sb-admin-2.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>