@extends('Layout.A_master')

@section('edit')

  
<div class="card-body">
  <h4 class="card-title">Tambah Galeri</h4>
  <p class="card-description">
    Tempat menambah data.
  </p>
  <form  method="POST" class="forms-sample" action="/admin_galeri/tambahkan" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="id">id</label>
      <input type="text" class="form-control" id="id" placeholder="id" name="id" value="">
    </div>

    <div class="form-group">
      <label for="gambar">File Foto</label>
      <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
    </div>

    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi" value="">
    </div>


          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>

@endsection