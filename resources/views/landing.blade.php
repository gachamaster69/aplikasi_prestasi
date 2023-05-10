<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* CSS styling for the charts */
        .chart-container {
            width: 400px;
            height: 400px;
            margin: 20px;
            display: inline-block;
        }
    </style>

    <!-- Google Font: Source Sans Pro -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="icon" href="{{ asset('images/fekon.png') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('images/fekon.png') }}" alt="" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link text-center">
                <span class="brand-text font-weight-light">Sistem Informasi Prestasi</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/login" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Login

                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Selamat Datang</h1>
                        </div><!-- /.col -->

                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="card mr-4 ml-4">
                        <h5 class="card-header">Prestasi</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-danger mr-2 ml-2 mt-2">
                                        <div class="card-header">
                                            <h3 class="card-title">Skala</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="donutChart" data-id=""
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-danger mr-2 ml-2 mt-2">
                                        <div class="card-header">
                                            <h3 class="card-title">Jenis</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="donutChart1" data-id=""
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="card mr-4 ml-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#tab_1" role="tab" aria-controls="nav-home" aria-selected="true">Grafik
                                        Rekap Prestasi Mahasiswa</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#tab_2"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Rincian Data
                                        Prestasi Mahasiswa</a>
                                </div>
                            </div>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">

                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="box-body">
                                                <div class="chart">
                                                    <canvas id="barChart" style="height:400px"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box-body">
                                                <div class="chart">
                                                    <canvas id="barChartTahun" style="height:400px"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="tab-pane" id="tab_2">
                                <div class="box-body table-responsive">
                                    <div class="card-body">
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">NPM</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Prodi</th>
                                                    <th scope="col">Prestasi</th>
                                                    <th scope="col">Jenis Prestasi</th>
                                                    <th scope="col">Skala</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Penyelenggara</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp @foreach ($prestasi as $row)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row->mahasiswa_id }}</td>
                                                    <td>{{ $row->nama }}</td>
                                                    <td>{{ $row->program_studi }}</td>
                                                    <td>{{ $row->prestasi }}</td>
                                                    <td>{{ $row->jenis_prestasi }}</td>
                                                    <td>{{ $row->skala }}</td>
                                                    <td>{{ $row->tanggal }}</td>
                                                    <td>{{ $row->penyelenggara }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div </div>
                            </div>
                        </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://fekon.uniga.ac.id/">Fakultas Ekonomi Universitas
                    Garut</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('template/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('template/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('template/dist/js/pages/dashboard.js') }}"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>

    <script>
        // Donut Chart
        var barChart = {
      labels  : ['D3 Akuntansi', 'S1 Akuntansi', 'S1 Manajemen', 'S1 Pariwisata', 'S1 Bisnis Digital'],
      datasets: [
        {
          label               : 'Jumlah Prestasi',
          backgroundColor     : 'rgb(220, 132, 73)',
          borderColor         : 'rgb(220, 132, 73)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgb(220, 132, 73)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgb(220, 132, 73)',
          data                : ['{{ count($prestasi->where('program_studi','Akuntansi D3')) }}', '{{ count($prestasi->where('program_studi','Akuntansi S1')) }}', '{{ count($prestasi->where('program_studi','Manajemen S1')) }}', '{{ count($prestasi->where('program_studi','Pariwisata S1')) }}', '{{ count($prestasi->where('program_studi','Bisnis Digital S1')) }}']
        },
      ]
    }

    var barChartTahun = {
      labels  : [
        @foreach ($results as $index => $y)
        '{{ $y->tahun }}',
        @endforeach
      ],
      datasets: [
        {
          label               : 'Jumlah Prestasi',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
        @foreach ($results as $index => $y)
        '{{ $y->jumlah }}',
        @endforeach
          ]
        },
      ]
    }

    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutChartCanvas1 = $('#donutChart1').get(0).getContext('2d')
    var donutSkala        = {
      labels: [
        'Internasional',
        'Nasional',
        'Provinsi',
        'Kabupaten',
      ],
      datasets: [
        {
          data: [
            '{{ count($prestasi->where('skala','Internasional')) }}', '{{ count($prestasi->where('skala','Nasional')) }}', '{{ count($prestasi->where('skala','Provinsi')) }}', '{{ count($prestasi->where('skala','Kabupaten')) }}'
          ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutJenis        = {
      labels: [
        'Akademik',
        'Non Akademik'
      ],
      datasets: [
        {
          data: [
            '{{ count($prestasi->where('jenis_prestasi','Akademik')) }}', '{{ count($prestasi->where('jenis_prestasi','Non akademik')) }}'
          ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutSkala,
      options: donutOptions
    })
    new Chart(donutChartCanvas1, {
      type: 'doughnut',
      data: donutJenis,
      options: donutOptions
    })

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartCanvasTahun = $('#barChartTahun').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, barChart)
    var barChartDataTahun = $.extend(true, {}, barChartTahun)
    var temp0 = barChart.datasets[0]
    barChartData.datasets[0] = temp0
    var temp1 = barChartTahun.datasets[0]
    barChartDataTahun.datasets[0] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scaleStartValue : 0,
      scales: {
      yAxes: [{
                display: true,
                ticks: {
                beginAtZero: true,
             }
            }]
        },
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
    new Chart(barChartCanvasTahun, {
      type: 'bar',
      data: barChartDataTahun,
      options: barChartOptions
    })
    </script>
</body>

</html>
