@extends('template')

@section('title', 'Kode Soal tagihan_air')
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>No Meteran</th>
                <th>Penggunaan</th>
                <th>Total Tagihan</th>
            </tr>
            @foreach ($tagihan_air as $t)
                <tr>
                    <td>{{ $t->ID }}</td>
                    <td>{{ $t->NoMeteran }}</td>
                    <td>
                       {{$t->MeterAkhir - $t->MeterAwal}}
                    </td>
                    <td>
                       Rp{{number_format(($t->MeterAkhir - $t->MeterAwal)*5000, 0, ',', '.'  )}}
                    </td>
                </tr>
            @endforeach
        </table>
            <a href="/tambahTagihan" class="btn btn-primary">Input Tagihan Baru</a>

    </center>
@endsection
