@extends('user')

@section('title', 'Buat Laporan')

@section('breadcrumb')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Buat Laporan</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Buat Laporan</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ url('/') }}" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-sign-out-alt me-sm-1"></i>
                                <span class="d-sm-inline d-none">Keluar</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    @endsection
    @section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pilih Kategori</label><br>
                    <select class="form-control">
                        <option value="keluhan">Keluhan</option>
                        <option value="aspirasi">Aspirasi</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Isi Laporan</label>
                    <textarea style="resize:none;width:800px;height:200px;" class="form-control" type="text"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Tambah Foto</label>
                        <form action="" method="post">
                            <p class="image_upload">
                                <label for="userImage">
                                    <a class="btn btn-icon btn-3 btn-primary" type="button">
                                    <span><i class="fa fa-camera"></i></span> Tambah Foto</a>
                                </label>
                                <input type="file" name="userImage" id="userImage">
                            </p>    
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1">
                        <label class="custom-control-label" for="customCheck1">Kirim sebagai Anonim</label>
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-danger">Batal</button>
                    <button type="button" class="btn btn-success">Kirim</button>
                </div>
              </div>
          </div>
        </div>
    </div>
</main>
@endsection