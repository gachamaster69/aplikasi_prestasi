@extends('layout.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Super Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Mahasiswa</span>
                <span class="info-box-number">
                    {{ $total }}
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calculator"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rata-rata Ipk</span>
                <span class="info-box-number">{{ $avgIpk }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-invoice-dollar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rata-rata Penghasilan</span>
                <span class="info-box-number">{{ number_format($avgPendapatan) }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-balance-scale-left"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rata-rata Tunggakan</span>
                <span class="info-box-number">{{ number_format($avgTunggakan) }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="container">
            <a
                href="/tambahdatauser"
                type="button"
                class="btn btn-success mb-2"
                >Buat Akun</a
            >
        <!-- /.row -->
        <div class="row">
            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif --}}

            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Password</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($dataUser as $index => $row)
                    <tr>
                       <th scope="row">{{ $index + $dataUser->firstItem() }}</th>
                       <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->role }}</td>
                      <td>{{ $row->password }}</td>
                      
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <a
                                href="/tampilkandatauser/{{ $row->id }}"
                                class="btn btn-info mb-1"
                            >
                                Ubah
                            </a>
                            <a
                                href="#"
                                type="button"
                                class="btn btn-danger delete"
                                data-id="{{ $row->id }}"
                                data-nama="{{ $row->name }}"
                            >
                                Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            {{ $dataUser->links() }}
         
        </div>
        
        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>
<script>
    $(".delete").click(function () {
        var userid = $(this).attr("data-id");
        var usernama = $(this).attr("data-nama");
        swal({
            title: "Anda Yakin?",
            text:
                "Akan menghapus data akun dengan nama " +
                usernama +
                " ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location = "/deletedatauser/" + userid + "";
                swal("Akun berhasil di hapus", {
                    icon: "success",
                });
            } else {
                swal("Akun tidak jadi dihapus");
            }
        });
    });
</script>
@endsection