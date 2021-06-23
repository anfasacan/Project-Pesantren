@extends('Layout.A_master')

@section('edit')

      <div class="card-body">
        <h4 class="card-title">Edit Agenda</h4>
        <p class="card-description">
          Tempat merubah data yang sudah dimasukan sebelumnya.
        </p>
        <form  method="POST" class="forms-sample" action="/admin_agenda/{{$agenda->id}}/update" enctype="multipart/form-data">
          @method('patch')
          @csrf

          <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" placeholder="id" name="id" value="{{$agenda->id}}">
          </div>
          
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="judul" name="judul" value="{{$agenda->judul}}">
          </div>

          
          <div class="form-group">
            <label for="biaya_adopsi">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" value="{{$agenda->tanggal}}">
          </div>
          
          <div class="form-group">
            <label for="jam">Jam</label>
            <textarea class="form-control" id="jam" name="jam" rows="4">{{$agenda->jam}}</textarea>
          </div>
          
          <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <textarea class="form-control" id="lokasi" name="lokasi" rows="4">{{$agenda->lokasi}}</textarea>
          </div>
          
          <div class="form-group">
            <label for="gambar">File Sebelumnya</label>
            <input type="text" class="form-control" id="gambar" placeholder="gambar" name="gambar" value="{{$agenda->gambar}}">
          </div>

          <div class="form-group">
            <label for="gambar">File Foto</label>
            <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Edit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>

@endsection