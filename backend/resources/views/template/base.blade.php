<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('template.components.header')
    </head>

    <body class="sidebar-collapse">
        <div class="wrapper">
            <!-- Navbar -->
            @include('template.components.menu')
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">

                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>

                    <!-- /.content-header -->
                <div class="mx-3">
                    <section class="content">
                        <div class="container-fluid pb-3">
                            @yield('content')
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <!-- /.content-wrapper -->
            @include('template.components.footer')
        </div>
        <!-- ./wrapper -->
        @include('template.components.scripts')
    </body>
</html>
