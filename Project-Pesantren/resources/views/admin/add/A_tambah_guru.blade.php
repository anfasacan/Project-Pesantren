@extends('Layout.A_master')

@section('edit')

  
<div class="card-body">
  <h4 class="card-title">Tambah Guru</h4>
  <p class="card-description">
    Tempat menambah data.
  </p>
  <form  method="POST" class="forms-sample" action="/admin_guru/tambahkan" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="id">id</label>
      <input type="text" class="form-control" id="id" placeholder="id" name="id" value="">
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="">
      </div>

    <div class="form-group">
      <label for="foto">File Foto</label>
      <input type="file" class="form-control" id="foto" placeholder="foto" name="foto">
    </div>

    <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <input type="text" class="form-control" id="jabatan" placeholder="jabatan" name="jabatan" value="">
    </div>


          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>

@endsection