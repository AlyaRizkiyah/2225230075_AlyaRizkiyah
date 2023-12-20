<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah data mahasiswa</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>


	<a href="" class="btn btn-primary btn-sm mb-3">Kembali</a>
	<form action="/crud" method="post">
	
		<div class="mb-3">
			<label for="">Nama Lengkap</label>
			<input type="text" class="form-control" name="Nama_Lengkap">
		</div>
		<div class="mb-3">
			<label for="">Nim</label>
			<input type="text" class="form-control" name="Nim">
		</div>
		<div class="mb-3">
			<label for="">Tanggal Lahir</label>
			<input type="date" class="form-control" name="Tanggal_Lahir">
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
			<input type="text" class="form-control" name="Asal_Sekolah">
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
			<button><a href="index" class="btn btn-primary btn-sm">Simpan</a></button>
		</div>
	</form>

</body>
</html>