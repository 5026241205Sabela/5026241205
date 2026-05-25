@extends(template)
@section('title', 'Data Pegawai')
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<center>


	<br/>
	<br/>

	<form action="/pegawaistore" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" class="form-control"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
 <br/>
	<br/>
    <a href="/pegawai" class="btn btn-info"> Kembali</a>
</center>
@endsection
