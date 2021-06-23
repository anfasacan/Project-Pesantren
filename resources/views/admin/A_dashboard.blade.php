@extends('Layout.A_master')

@section('dashboard')


 
    

<div class="main-panel">
    <div class="content-wrapper">
{{-- tempat berada --}}
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Dashboard Pondok Pesantren Al-Muttaqin</h4>
                </div>
              </div>
            </div>
          </div>
{{-- isi --}}
      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Murid</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$dashboard->peserta_didik}}</h3>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                <button type="button" class="btn btn-outline-success btn-fw" href="" data-toggle="modal" data-target="#edit">Edit</button>
              </div>  
            </div>
          </div>
        </div>  

        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Guru </p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$dashboard->guru}}</h3>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                <button type="button" class="btn btn-outline-success btn-fw" href="" data-toggle="modal" data-target="#edit">Edit</button>
              </div>  
            </div>
          </div>
        </div>  
        
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Pelajaran</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$dashboard->pelajaran}}</h3>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                <button type="button" class="btn btn-outline-success btn-fw" href="" data-toggle="modal" data-target="#edit">Edit</button>
              </div>  
            </div>
          </div>
        </div>  

        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Prestasi</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$dashboard->prestasi}}</h3>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                <button type="button" class="btn btn-outline-success btn-fw" href="" data-toggle="modal" data-target="#edit">Edit</button>
              </div>  
            </div>
          </div>
        </div>  
    </div>
    {{-- pemisah --}}
        
    
    <!-- Modal -->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" class="forms-sample" action="/admin_dashboard/{{$dashboard->id}}/update" enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="form-group">
            <label for="murid">Murid</label>
            <input type="number" class="form-control" id="murid" placeholder="murid" name="murid" value="{{$dashboard->peserta_didik}}">
          </div>

          <div class="form-group">
            <label for="guru">Guru</label>
            <input type="number" class="form-control" id="guru" placeholder="guru" name="guru" value="{{$dashboard->guru}}">
          </div>

          <div class="form-group">
            <label for="pelajaran">Pelajaran</label>
            <input type="number" class="form-control" id="pelajaran" placeholder="pelajaran" name="pelajaran" value="{{$dashboard->pelajaran}}">
          </div>

          <div class="form-group">
            <label for="prestasi">Prestasi</label>
            <input type="number" class="form-control" id="prestasi" placeholder="prestasi" name="prestasi" value="{{$dashboard->prestasi}}">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
    {{-- pemisah --}}
    
     
@endsection