 
@extends('template')
@section('content')

    <h1>Daftar Mahasiswa Matematika FKIP Untirta 2023</h1>
    <a href="create" class="btn btn-primary btn-sm">Tambah Data</a>
    <table class="table table-bordered">
      
      <thead>
        <tr>
          <th>No</th> 
          <th>Nama Lengkap</th>
          <th>Nim</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Asal Sekolah</th>
          <th>Jalur Masuk</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>


        <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <button class="btn btn-primary btn-sm">Detail</button>
            <button class="btn btn-primary btn-sm">Edit</button>
            <button class="btn btn-primary btn-sm">Delete</button>
          </td>
        </tr>
      </tbody>

      
    </table>
@endsection
  