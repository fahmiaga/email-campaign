<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/sbadmin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/sbadmin') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/sbadmin') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    @stack('styles')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- sidebar --}}
        @include('layout.sidebar')
        {{-- end of Sidebar --}}

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                {{-- topbar --}}
                @include('layout.topbar')
                {{-- end of topbar --}}

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')

                    <!-- Page Heading -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Email Campaign {{ now()->year }}</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/sbadmin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets/sbadmin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/sbadmin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/sbadmin') }}/js/sb-admin-2.min.js"></script>
    <script src="{{ asset('assets/sbadmin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/sbadmin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/sbadmin') }}/js/demo/datatables-demo.js"></script>

    {{-- custom js --}}
    <script src="{{ asset('assets/sbadmin') }}/js/custom.js"></script>
    <script src="{{ asset('assets/sbadmin') }}/js/multi-select.js"></script>

</body>

</html>
