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
        <h2 class="text-center mb-4">Tambah Akun</h2>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertuser" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Nama</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Nama"
                                    />
                                    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Email</label
                                    >
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Email"
                                    />
                                    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                </div>
                                
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        >Password</label
                                    >
                                    <input
                                        type="text"
                                        name="password"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        placeholder="Masukkan Password"
                                    />
                                    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
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
