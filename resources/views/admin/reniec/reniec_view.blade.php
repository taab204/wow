@extends('admin.layout.app')

@section('content')
     <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Consultas</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Dashboard</a> </li> --}}
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_slide_view') }}">Consultas</a> </li> --}}
                            <li class="breadcrumb-item active">Reniec </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Agengas</span></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                    <div class="content-body">                            
                        <!-- Basic table -->
                        <section>
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
                                        <div class="container-xl px-4">
                                            <div class="page-header-content pt-4">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto mt-4">
                                                        <h1 class="page-header-title">
                                                            <div class="page-header-icon"><i data-feather="life-buoy"></i></div>
                                                            Consulta Reniec
                                                        </h1>
                                                        <div class="page-header-subtitle">Consulta Reniec.</div>
                                                    </div>
                                                </div>
                                                <div class="page-header-search mt-4">
                                                    <form action="{{ route('admin_reniec_store') }}">
                                                    <div class="input-group input-group-joined">
                                                        <input class="form-control" type="text" placeholder="Ingrese DNI..." aria-label="Search" required autofocus maxlength="8" name="dni" />
                                                        <button type="submit" class="btn btn-lg btn-success" id="btnbuscar">
                                                            <i data-feather="search"></i>
                                                        </button>
                            
                                                    </div>
                            
                                                    </form>
                            
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                    <!-- Main page content-->
                                    <div class="container-xl px-4">
                                        <!-- Knowledge base category-->
                                        <h2 class="mb-0 mt-5">Consulta Reniec</h2>
                                        <hr class="mt-2 mb-4" />
                            
                                    </div>
                                </div>
                            </div>
                            </div>

                        </section>
                        <!--/ Basic table --> 
                    </div>
            </div>
        </div>
      <!-- END: Content-->
<div id="layoutSidenav_content">
    <main>
        
    </main>
</div>


    {{-- ///////////////////////// --}}
    </div>
@endsection
