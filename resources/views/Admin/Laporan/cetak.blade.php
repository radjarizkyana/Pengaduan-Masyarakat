<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Pengaduan</title>
    <style>
        .kop-judul {
            padding-right: 190px;
            margin-bottom: 15px;
        }
        .kop-image {
            float: left;
            padding-left: 130px;
        }
        hr {
            border-color: black;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="kop">
        <div>
            <h5 class="kop-judul text-center"><img class="kop-image" src="{{ ('images/lambang-kota-bgr.png') }}" width="60px" height="65px" alt="">Laporan Pengaduan Masyarakat</h5>
            <h6 class="kop-judul text-center">Daerah Kota Bogor - Bogor Timur</h6>
            <hr>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Lapor</th>
                    <th>Isi Laporan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $k => $v)
                    <tr>
                        <td>{{ $k += 1 }}</td>
                        <td>{{ $v->tgl_pengaduan }}</td>
                        <td>{{ $v->isi_laporan }}</td>
                        <td>{{ $v->status == '0' ? 'Pending' : ucwords($v->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>