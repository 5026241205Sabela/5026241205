@extends('template')

@section('title', 'Data Nilai Kuliah')
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>
        <br />
        <br />
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
            @foreach ($nilaikuliah as $n)
                <tr>
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->nrp }}</td>
                    <td>{{ $n->nilaiAngka }}</td>
                    <td>{{ $n->sks}}</td>
                    <td>
                        @if ($n->nilaiAngka <=40)
                            D
                        @elseif ($n->nilaiAngka <=60)
                            C
                        @elseif ($n->nilaiAngka <=80)
                            B
                        @else
                            A
                        @endif
                    </td>
                    <td>
                       {{$n->nilaiAngka * $n->sks}}
                    </td>
                </tr>
            @endforeach
        </table>
            <a href="/tambahnilai" class="btn btn-primary">Tambah Nilai</a>

    </center>
@endsection
