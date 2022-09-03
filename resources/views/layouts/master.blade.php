<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.partials._head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

      @include('layouts.partials._navbar')
      @include('layouts.partials._sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="app">
          @include('flash::message')
           @yield('content')          
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
      @include('layouts.partials._footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('layouts.partials._footer-script')
  
</body>

</html>
