<!-- resources/views/admin/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('css/ready.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        <!-- Include Sidebar -->
        @include('admin.partials.header')
        @include('admin.partials.sidebar')

        <div class="main-panel">
            <!-- Include Header -->

            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            @include('admin.partials.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/ready.min.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>

    @stack('scripts')
</body>
</html>
