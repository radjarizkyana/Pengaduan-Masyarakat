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
            @foreach ($months as $key => $month)
            @foreach ($pengaduan as $key2 => $item)
            @if ($key == $key2-1)
            <tr>
                <td>{{ $month }}</td>
                <td>{{ $key == $key2-1 ? $item->where('status', '0')->count() : 0 }}</td>
                <td>{{ $key == $key2-1 ? $item->where('status', 'proses')->count() : 0 }}</td>
                <td>{{ $key == $key2-1 ? $item->where('status', 'selesai')->count() : 0 }}</td>
            </tr>
            @endif
            @endforeach
            @endforeach
        </tbody>
        <tbody>
        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#masyarakatTable').DataTable({
                order: false,
            });
        } );
    </script>
@endsection