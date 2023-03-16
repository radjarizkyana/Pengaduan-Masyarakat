@extends('layouts.admin')

@section('title', 'Halaman Masyarakat')
    
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Rekapitulasi Data')
    
@section('content')
    <table id="masyarakatTable" class="table">
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Pending</th>
                <th>Proses</th>
                <th>Selesai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Januari</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Februari</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Maret</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>April</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Mei</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Juni</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Juli</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Agustus</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>September</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Oktober</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>November</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
            <tr>
                <td>Desember</td>
                <th>{{ $pending }}</th>
                <th>{{ $proses }}</th>
                <th>{{ $selesai }}</th>
            </tr>
        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#masyarakatTable').DataTable();
        } );
    </script>
@endsection