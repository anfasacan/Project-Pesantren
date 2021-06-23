@extends('Layout.A_master')

@section('artikel')

     <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Guru</h4>
                </div>
                <div>
                    <a type="button" href="/admin_guru/tambah_guru" class="btn btn-primary btn-icon-text ">
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
                      Nama
                  </th>
                  <th>
                    Foto
                </th>
                <th>
                    Jabatan
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
                  @foreach ($guru as $gur)
                <tr>
                  <td>
                    {{$gur->id}}
                  </td>
                  <td>
                    {{$gur->nama}}
                  </td>
                  <td>
                    <img src="img/poto/guru/{{$gur->foto}}" alt="{{$gur->foto}}" width="500" height="600">
                  </td>
                  <td>
                    <p style="max-width:70ch; overflow: hidden;">{{$gur->jabatan}}</p>
                  </td>
                  <td>
                    <a type="button" href="/admin_guru/{{$gur->id}}/edit" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-pencil btn-icon-prepend"></i>                                                    
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="admin_guru/{{$gur -> id}}/hapus" method="POST">
                      @method('delete')
                      @csrf
                    <button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$gur->id}}')" class="btn btn-outline-danger btn-icon-text" >Hapus</button></form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection
