@extends('template')
@section('title', 'Tambah Lampu')
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>


        <br />
        <br />
        <div class="card">
            <div class="card-header">
                Tambah Lampu
            </div>

            <div class="card-body">
                <form action="/lampustore" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="merklampu" class="col-sm-2 col-form-label">Merek Lampu</label>
                        <div class="col-sm-10">
                            <input type="text" name="merklampu" id="merklampu" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stocklampu" class="col-sm-2 col-form-label">Stock Lampu</label>
                        <div class="col-sm-10">
                            <input type="number" name="stocklampu" id="stocklampu" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
                        <div class="col-sm-10">
                            <input type="text" name="tersedia" id="tersedia" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br />
        <br />
        <a href="/lampu" class="btn btn-info"> Kembali</a>
    </center>
@endsection
