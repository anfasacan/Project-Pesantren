@extends('Layout.A_master')

@section('artikel')

     <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Galeri</h4>
                </div>
                <div>
                    <a type="button" href="/admin_galeri/tambah_galeri" class="btn btn-primary btn-icon-text ">
                      <i class="ti-plus btn-icon-prepend"></i>Tambah Data
                    </a>
                </div>
              </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                      id  
                  </th> 
                  <th>
                      Gambar
                  </th>
                  <th>
                    Deskripsi
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($galeri as $gal)
                <tr>
                  <td>
                    {{$gal->id}}
                  </td>
                  <td>
                    <img src="img/poto/galeri/{{$gal->gambar}}" alt="{{$gal->gambar}}" width="500" height="600">
                  </td>
                  <td>
                    <p style="max-width:70ch; overflow: hidden;">{{$gal->deskripsi}}</p>
                  </td>
                  <td>
                    <a type="button" href="/admin_galeri/{{$gal->id}}/edit" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-pencil btn-icon-prepend"></i>                                                    
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="admin_galeri/{{$gal -> id}}/hapus" method="POST">
                      @method('delete')
                      @csrf
                    <button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$gal->id}}')" class="btn btn-outline-danger btn-icon-text" >Hapus</button></form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection
