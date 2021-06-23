@extends('Layout.A_master')

@section('artikel')

     <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Artikel</h4>
                </div>
                <div>
                    <a type="button" href="/admin_artikel/tambah_artikel" class="btn btn-primary btn-icon-text ">
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
                    Judul
                </th>
                  <th>
                      Isi  
                  </th>
                  <th>
                      Tanggal 
                  </th>
                  
                <th>
                    Edit  
                </th>
                <th>
                    Hapus 
                </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($artikel as $art)
                <tr>
                  <td>
                    {{$art->id}}
                  </td>
                  <td>
                    <img src="img/poto/artikel/{{$art->gambar}}" alt="{{$art->gambar}}" width="500" height="600">
                  </td>
                  <td>
                    {{$art->judul}}
                  </td>
                  <td>
                    <p style="max-width:70ch; overflow: hidden;">{{$art->isi}}</p>
                  </td>
                  <td>
                    {{$art->tanggal}}
                  </td>
                  <td>
                    <a type="button" href="/admin_artikel/{{$art->id}}/edit" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-pencil btn-icon-prepend"></i>                                                    
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="admin_artikel/{{$art -> id}}/hapus" method="POST">
                      @method('delete')
                      @csrf
                    <button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$art->id}}')" class="btn btn-outline-danger btn-icon-text" >Hapus</button></form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection
