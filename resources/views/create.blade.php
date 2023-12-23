@extends('template')

@section('content')
<h1>Tambah Data Mahasiswa</h1>
	<a href="/Mahasiswa" class="btn btn-primary btn-sm mb-3">Kembali</a>
	<form action="/Mahasiswa" method="post">
	@csrf
		<div class="mb-3">
			<label for="">Nama Lengkap</label>
			<input type="text" class="form-control" name="Nama Lengkap">
		</div>
		<div class="mb-3">
			<label for="">Nim</label>
			<input type="text" class="form-control" name="Nim">
		</div>
		<div class="mb-3">
			<label for="">Tanggal Lahir</label>
			<input type="date" class="form-control" name="Tanggal Lahir">
		</div>
		<div class="mb-3">
			<label for="">Jenis Kelamin</label>
			<select name="Jenis_Kelamin" class="form-control">
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
			</select>

		</div>
		<div class="mb-3">
			<label for="">Asal Sekolah</label>
			<input type="text" class="form-control" name="Asal Sekolah">
		</div>
		<div class="mb-3">
			<label for="">Jalur Masuk</label>
			<select name="Jalur_Masuk" class="form-control">
				<option value="Snbt">SNBT</option>
				<option value="Snbp">SNBP</option>
				<option value="Mandiri">Mandiri</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="">Email</label>
			<input type="text" class="form-control" name="Email">
		</div>
		<div>
			<button class="btn btn-primary btn-sm" type="submit">Simpan</button>
		</div>
	</form>

</body>
</html>
@endsection