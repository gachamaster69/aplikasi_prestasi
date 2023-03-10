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
        <h2 class="text-center mb-4">Edit Data Mahasiswa</h2>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatedata/{{ $data->id }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >NIM</label
                                    >
                                    <input
                                        type="text"
                                        name="nim"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Nama"
                                        value="{{ $data->nim }}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Nama Lengkap</label
                                    >
                                    <input
                                        type="text"
                                        name="nama"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Nama"
                                        value="{{ $data->nama }}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Program Studi</label
                                    >
                                    <select
                                        class="custom-select"
                                        name="program_studi"
                                    >
                                        <option selected>
                                            {{ $data->program_studi }}
                                        </option>
                                        <option value="Akuntansi D3">
                                            Akuntansi D3
                                        </option>
                                        <option value="Akuntansi S1">
                                            Akuntansi S1
                                        </option>
                                        <option value="Bisnis Digital S1">
                                            Bisnis Digital S1
                                        </option>
                                        <option value="Manajemen S1">
                                            Manajemen S1
                                        </option>
                                        <option value="Pariwisata S1">
                                            Pariwisata S1
                                        </option>
                                    </select>
                                    @error('program_studi')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Angkatan</label
                                    >
                                    <input
                                        type="text"
                                        name="angkatan"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Angkatan"
                                        value="{{ $data->angkatan }}"
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
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
