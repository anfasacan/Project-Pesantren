@extends('Layout.A_master')

@section('edit')

      <div class="card-body">
        <h4 class="card-title">Edit Galeri</h4>
        <p class="card-description">
          Tempat merubah data yang sudah dimasukan sebelumnya.
        </p>
        <form  method="POST" class="forms-sample" action="/admin_galeri/{{$galeri->id}}/update" enctype="multipart/form-data">
          @method('patch')
          @csrf

          <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" placeholder="id" name="id" value="{{$galeri->id}}">
          </div>
          
          <div class="form-group">
            <label for="gambar">File Sebelumnya</label>
            <input type="text" class="form-control" id="gambar" placeholder="gambar" name="gambar" value="{{$galeri->gambar}}">
          </div>

          <div class="form-group">
            <label for="gambar">File Foto</label>
            <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
          </div>

          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi" value="{{$galeri->deskripsi}}">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Edit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>

@endsection