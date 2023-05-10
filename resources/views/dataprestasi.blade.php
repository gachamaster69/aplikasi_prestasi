@extends('layout.admin') @section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Prestasi</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Prestasi</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

            <div class="container">
            <a href="/tambahprestasi/{{ $id }}" type="button" class="btn btn-success mb-2">Tambah +</a>



            <div class="row">
                {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif --}}

                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Prestasi</th>
                            <th scope="col">Jenis Prestasi</th>
                            <th scope="col">Skala</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Penyelenggara</th>
                            <th scope="col">Berkas</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->prestasi }}</td>
                                <td>{{ $row->jenis_prestasi }}</td>
                                <td>{{ $row->skala }}</td>
                                <td>{{ $row->tanggal }}</td>
                                <td>{{ $row->penyelenggara }}</td>
                                <td>
                                   1. <a href="{{ asset('berkasprestasi/' . $row->berkas) }}">Lihat Berkas</a>
                                    @if ($row->berkas2 != null)
                                    <br>
                                    <a href="{{ asset('berkasprestasi2/' . $row->berkas2) }}">Lihat Berkas</a>
                                    <br>
                                    @endif
                                    @if ($row->berkas2 != null)
                                    <a href="{{ asset('berkasprestasi3/' . $row->berkas3) }}">Lihat Berkas</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ asset('berkaskegiatan/' . $row->berkas_kegiatan) }}">Lihat Kegiatan</a>
                                    <br>
                                    @if ($row->berkas_kegiatan2 != null)
                                    <a href="{{ asset('berkaskegiatan2/' . $row->berkas_kegiatan2) }}">Lihat Kegiatan</a>
                                    <br>
                                    @endif
                                    @if ($row->berkas_kegiatan3 != null)
                                    <a href="{{ asset('berkaskegiatan3/' . $row->berkas_kegiatan3) }}">Lihat Kegiatan</a>
                                    @endif
                                </td>
                                <td>{{ $row->created_at->format('D M Y') }}</td>
                                <td>
                                    <a href="/tampilkanprestasi/{{ $row->id }}" class="btn btn-info mb-1">
                                        Ubah
                                    </a>
                                    <a href="#" type="button" class="btn btn-danger delete mb-1"
                                        data-id="{{ $row->id }}" data-nama="{{ $row->prestasi }}">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
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
<script>
    $(document).ready( function () {
$('#myTable').DataTable();
} );
</script>
    <script>
        $(".delete").click(function() {
            var prestasiid = $(this).attr("data-id");
            var prestasinama = $(this).attr("data-nama");
            swal({
                title: "Anda Yakin?",
                text: "Akan menghapus prestasi dengan nama " +
                    prestasinama +
                    " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location = "/deleteprestasi/" + prestasiid + "";
                    swal("Prestasi berhasil di hapus", {
                        icon: "success",
                    });
                } else {
                    swal("Prestasi tidak jadi dihapus");
                }
            });
        });
    </script>
@endsection
