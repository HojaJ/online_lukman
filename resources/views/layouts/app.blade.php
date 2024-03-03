<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Online Lukman') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('vendor/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/css/toastr.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/css/lightbox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('js/richtext.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    @stack('styles')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('partials.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Car Services 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __("Ready to Leave?") }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">{{ __("Select 'Logout' below if you are ready to end your current session.") }}</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">{{ __("Logout") }}</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->

<script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('vendor/js/lightbox.min.js') }}"></script>
<script src="{{ asset('vendor/js/toastr.min.js') }}"></script>
<script src="{{ asset('vendor/js/lazyload.min.js') }}"></script>
<script src="{{ asset('js/jquery.richtext.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/js/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.js') }}"></script>
@stack('scripts')
<script>
    $(function() {
        $('.content').richText();

        @if(session('success'))
        toastr.success('{{ session("success") }}');
        @endif

        @if($errors->any())
        @foreach ($errors->all() as $error)
        toastr.error('{{$error}}');
        @endforeach
        @endif
    })
</script>
</body>

</html>
