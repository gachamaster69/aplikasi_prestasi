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

        <title>Prestasi Mahasiswa</title>
    </head>
    <body>
        <h2 class="text-center mb-4">Edit Prestasi Mahasiswa</h2>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updateprestasi/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Nama Prestasi</label
                                    >
                                    <input
                                        type="text"
                                        name="prestasi"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Nama Prestasi"
                                        value="{{ $data->prestasi }}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Jenis Prestasi</label
                                    >
                                    <select
                                        class="custom-select"
                                        name="jenis_prestasi"
                                    >
                                        <option selected>
                                            {{ $data->jenis_prestasi }}
                                        </option>
                                        <option value="Akademik">
                                            Akademik
                                        </option>
                                        <option value="Non akademik">
                                            Non Akademik
                                        </option>
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Skala</label
                                    >
                                    <select
                                        class="custom-select"
                                        name="skala"
                                    >
                                        <option selected>
                                            {{ $data->skala }}
                                        </option>
                                        <option value="Kabupaten">
                                            Kabupaten
                                        </option>
                                        <option value="Provinsi">
                                            Provinsi
                                        </option>
                                        <option value="Nasional">
                                            Nasional
                                        </option>
                                        <option value="Internasional">
                                            Internasional
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Nama penyelenggara</label
                                    >
                                    <input
                                        type="text"
                                        name="penyelenggara"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Angkatan"
                                        value="{{ $data->penyelenggara }}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Berkas</label
                                    >
                                    <input
                                        type="file"
                                        name="berkas"
                                        class="form-control"
                                        placeholder="{{ $data->berkas }}"
                                        accept=".pdf"
                                    />
                                    <input
                                        type="file"
                                        name="berkas2"
                                        class="form-control mt-3"
                                        placeholder="{{ $data->berkas2 }}"
                                        accept=".pdf"
                                    />
                                    <input
                                        type="file"
                                        name="berkas3"
                                        class="form-control mt-3"
                                        placeholder="{{ $data->berkas3 }}"
                                        accept=".pdf"
                                    />
                                    @error('berkas')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Foto Kegiatan</label
                                    >
                                    <input
                                        type="file"
                                        name="berkas_kegiatan"
                                        class="form-control"
                                        placeholder="{{ $data->berkas_kegiatan }}"
                                        accept="image/png, image/jpg, image/jpeg"
                                    />
                                    @error('berkas_kegiatan')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <input
                                        type="file"
                                        name="berkas_kegiatan2"
                                        class="form-control mt-3"
                                        placeholder="{{ $data->berkas_kegiatan2 }}"
                                        accept="image/png, image/jpg, image/jpeg"
                                    />
                                    @error('berkas_kegiatan2')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <input
                                        type="file"
                                        name="berkas_kegiatan3"
                                        class="form-control mt-3"
                                        placeholder="{{ $data->berkas_kegiatan3 }}"
                                        accept="image/png, image/jpg, image/jpeg"
                                    />
                                    @error('berkas_kegiatan3')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Tanggal</label
                                    >
                                    <input
                                        type="date"
                                        name="tanggal"
                                        class="form-control"
                                        value="{{ $data->tanggal }}"
                                    />
                                    @error('tanggal')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="hidden" value="{{$data->mahasiswa_id}}" name="mahasiswa_id" />
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
