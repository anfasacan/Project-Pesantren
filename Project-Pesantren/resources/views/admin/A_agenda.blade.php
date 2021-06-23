@extends('Layout.A_master')

@section('artikel')

     <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Agenda</h4>
                </div>
                <div>
                    <a type="button" href="/admin_agenda/tambah_agenda" class="btn btn-primary btn-icon-text ">
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
                      Judul
                  </th>
                  <th>
                    Tanggal
                </th>
                  <th>
                      Jam  
                  </th>
                  <th>
                      Lokasi 
                  </th>
                  <th>
                    gambar 
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
                  @foreach ($agenda as $agd)
                <tr>
                  <td>
                    {{$agd->id}}
                </td>
                <td>
                  {{$agd->judul}}
                </td>
                <td>
                  {{$agd->tanggal}}
                </td>
                <td>
                    {{$agd->jam}}
                  </td>
                  <td>
                    {{$agd->lokasi}}
                  </td>
                  <td>
                    <img src="img/poto/agenda/{{$agd->gambar}}" alt="{{$agd->gambar}}" width="500" height="600">
                  </td>
                  
                  <td>
                    <a type="button" href="/admin_agenda/{{$agd->id}}/edit" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-pencil btn-icon-prepend"></i>                                                    
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="admin_agenda/{{$agd -> id}}/hapus" method="POST">
                      @method('delete')
                      @csrf
                    <button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$agd->id}}')" class="btn btn-outline-danger btn-icon-text" >Hapus</button></form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection
