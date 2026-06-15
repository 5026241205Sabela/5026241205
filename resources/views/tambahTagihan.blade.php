@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')
<center>

    <h2>Input Tagihan Baru</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('tagihanstore') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>No Meteran</label>
            <input type="text" name="NoMeteran" id="NoMeteran" maxlength="6" value="{{ old('NoMeteran') }}">
        </p>

        <p>
            <label>Meter Awal</label>
            <input type="number" name="MeterAwal" id="MeterAwal" maxlength="20" value="{{ old('MeterAwal') }}">
        </p>

        <p>
            <label>Meter Akhir</label>
            <input type="number" name="MeterAkhir" id="MeterAkhir" maxlength="5" value="{{ old('MeterAkhir') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('eas') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let MeterAwal = document.getElementById('MeterAwal').value.trim();
            let MeterAkhir = document.getElementById('MeterAkhir').value.trim();

            if (MeterAwal === "") {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter awal wajib angka",
                    icon: "error"
                });
                return false;
            }

            if (MeterAkhir=== "") {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter akhir wajib angka",
                    icon: "error"
                });
                return false;
            }

            if (MeterAkhir - MeterAwal <= 20) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Selisih antar meteran minimal 21",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
</center>
@endsection
