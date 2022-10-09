<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />

        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h2 class="text-center mb-4">Data Mahasiswa</h2>

        <div class="container">
            <a
                href="/tambahdatamahasiswa"
                type="button"
                class="btn btn-success mb-2"
                >Tambah +</a
            >
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">program_studi</th>
                            <th scope="col">IPK</th>
                            <th scope="col">Penghasilan Ortu</th>
                            <th scope="col">Daftar Prestasi</th>
                            <th scope="col">Jumlah Prestasi Nasional</th>
                            <th scope="col">Jumlah Prestasi Internasional</th>
                            <th scope="col">Tunggakan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->program_studi }}</td>
                            <td>{{ $row->ipk }}</td>
                            <td>{{ $row->pendapatan }}</td>
                            <td>{{ $row->daftar_prestasi }}</td>
                            <td>{{ $row->jumlah_prestasi_nasional }}</td>
                            <td>{{ $row->jumlah_prestasi_internasional }}</td>
                            <td>{{ $row->tunggakan }}</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn btn-danger mb-1"
                                >
                                    Hapus
                                </button>
                                <button type="button" class="btn btn-info">
                                    Ubah
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
    </body>
</html>
