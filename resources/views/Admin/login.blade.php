<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        body {
            background: #134f56;
        }

        .btn-green {
            background: #134f56;
            width: 100%;
            color: #fff;
        }

        .btn-black {
        background: #222222;
        border: black;
        width: 100%;
        color: #fff;
        font-weight: 600;
        margin-bottom: 50px
    }

    .btn-black:hover {
        background: #353232;
        border: black;
        width: 100%;
        color: #fff;
        font-weight: 600;
        margin-bottom: 50px
    }

    </style>

    <title>Halaman Masuk Petugas</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h2 class="text-center text-white mb-0 mt-5">Pengaduan Masyarakat</h2>
                <P class="text-center text-white mb-5">Daerah Kota Bogor - Bogor Timur</P>
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5">FORM PETUGAS</h2>
                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-green">MASUK</button>
                        </form>
                    </div>
                </div>
                
                <a href="{{ route('pekat.index') }}" class="btn btn-black text-white mt-3" style="width: 100%">Kembali
                    ke Halaman Utama</a>
            </div>
        </div>
    </div>
</body>

</html>
