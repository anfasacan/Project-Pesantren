@extends('Layout.A_master')

@section('edit')

  
<div class="card-body">
  <h4 class="card-title">Tambah Artikel</h4>
  <p class="card-description">
    Tempat menambah data.
  </p>
  <form  method="POST" class="forms-sample" action="/admin_artikel/tambahkan" enctype="multipart/form-data">
    
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
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" placeholder="judul" name="judul" value="">
    </div>


    <div class="form-group">
      <label for="isi">Isi</label>
      <textarea class="form-control" id="isi" name="isi" rows="4"></textarea>
    </div>

    <div class="form-group">
      <label for="biaya_adopsi">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" value="">
    </div>

          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>

@endsection