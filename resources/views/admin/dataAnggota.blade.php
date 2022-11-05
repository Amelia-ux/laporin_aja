@extends('main')

@section('title', 'Data Pengguna')

@section('breadcrumb')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Pengguna</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Data Pengguna</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
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
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Pengguna</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('style/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                        <button class="btn btn-success btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-eye me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Lihat</span>
                                            </a>
                                        </button>
                                        <button class="btn btn-danger btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-trash me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Hapus</span>
                                            </a>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                        <button class="btn btn-success btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-eye me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Lihat</span>
                                            </a>
                                        </button>
                                        <button class="btn btn-danger btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-trash me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Hapus</span>
                                            </a>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Executive</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-success btn-sm ms-auto">
                                                <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                    <i class="fa fa-eye me-sm-1"></i>
                                                    <span class="d-sm-inline d-none">Lihat</span>
                                                </a>
                                            </button>
                                            <button class="btn btn-danger btn-sm ms-auto">
                                                <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                    <i class="fa fa-trash me-sm-1"></i>
                                                    <span class="d-sm-inline d-none">Hapus</span>
                                                </a>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-success btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-eye me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Lihat</span>
                                            </a>
                                        </button>
                                        <button class="btn btn-danger btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-trash me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Hapus</span>
                                            </a>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                        <button class="btn btn-success btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-eye me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Lihat</span>
                                            </a>
                                        </button>
                                        <button class="btn btn-danger btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-trash me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Hapus</span>
                                            </a>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                        <button class="btn btn-success btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-eye me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Lihat</span>
                                            </a>
                                        </button>
                                        <button class="btn btn-danger btn-sm ms-auto">
                                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                                <i class="fa fa-trash me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Hapus</span>
                                            </a>
                                        </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection