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
                <a type="button" class="btn btn-outline-success btn-fw" href="" >Edit</a>
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
                <a type="button" class="btn btn-outline-success btn-fw" href="" >Edit</a>
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
                <a type="button" class="btn btn-outline-success btn-fw" href="" >Edit</a>
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
                <a type="button" class="btn btn-outline-success btn-fw" href="" >Edit</a>
              </div>  
            </div>
          </div>
        </div>  
        
    </div>
    {{-- pemisah --}}
    {{-- pemisah --}}
    
      <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Bobot Kriteria</h2>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                        #  
                    </th> 
                    <th>
                        Nama Bobot  
                    </th>
                    <th>
                        Value  
                    </th>
                    <th>
                        Jenis  
                    </th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($bobot as $bbt)
                  <tr>
                    <td>
                      {{$bbt->id}}
                    </td>
                    <td>
                      {{$bbt->nama_bobot}}
                    </td>
                    <td>
                      {{$bbt->value}}
                    </td>
                    <td>
                      {{$bbt->tipe}}
                    </td>
                  </tr>
                  @endforeach --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
@endsection