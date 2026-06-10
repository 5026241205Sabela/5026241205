@extends('template')

@section('title', 'Data Lampu')
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>
        <br />
        <br />
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Lampu</th>
                <th>Merek Lampu</th>
                <th>Stock Lampu</th>
                <th>Ketersediaan</th>
            </tr>
            @foreach ($lampu as $l)
                <tr>
                    <td>{{ $l->kodelampu }}</td>
                    <td>{{ $l->merklampu }}</td>
                    <td>{{ $l->stocklampu }}</td>
                    <td>{{ $l->tersedia }}</td>
                </tr>

            @endforeach
        </table>
            <a href="/tambahlampu" class="btn btn-primary">Tambah Lampu</a>

    </center>
@endsection
