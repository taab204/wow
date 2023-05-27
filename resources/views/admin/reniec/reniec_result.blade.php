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
                            
                                        <div class="row">
                                            @csrf
                                            <div class="col px-4">
                                                @forelse ($reniecs as $row)
                                                <div>
                                                    <div class="float-right">Consulta registrada : {{now()}}</div>
                                                    <h3>DNI:</h3>
                                                    {{-- <p class="mb-0" name="dni">{{ $row->dni }}</p> --}}
                                                    <p class="mb-0" id="dni" name="dni">{{ $row->dni }}</p>
                                                    <br>
                                                    <h3>Apellido Paterno:</h3>
                                                    <p class="mb-0" id="ap_pat" name="ap_pat" readonly="">{{ $row->ap_pat }}</p>
                                                    {{-- <input type="search" class="form-control form-control-lg" id="ap_pat" name="ap_pat" value="{{ $row->ap_pat }}" placeholder="Apellido Paterno" readonly=""> --}}
                                                    <br>
                                                    <h3>Apellido Materno:</h3>
                                                    <p class="mb-0" id="ap_mat" name="ap_mat" readonly="">{{ $row->ap_mat }}</p>
                                                    <br>
                                                    <h3>Nombres:</h3>
                                                    <p class="mb-0" id="nombres" name="nombres" readonly="">{{ $row->nombres }}</p>
                                                    <br>
                                                    <h3>Fecha Nacimiento:</h3>
                                                    <p class="mb-0" id="fecha_nac" name="fecha_nac" readonly="">{{ $row->fecha_nac }}</p>
                                                    <br>
                                                    <h3>Nombre Madre:</h3>
                                                    <p class="mb-0" id="madre" name="madre" readonly="">{{ $row->madre }}</p>
                                                    <br>
                                                    <h3>Nombre Padre:</h3>
                                                    <p class="mb-0" id="padre" name="padre" readonly="">{{ $row->padre }}</p>
                                                    <br>
                                                    <h3>Direccion:</h3>
                                                    <p class="mb-0" id="direccion" name="direccion" readonly="">{{ $row->direccion }}</p>
                                                    <br>
                                                    <h3>Departamento-Provincia-Distrito:</h3>
                                                    <p class="mb-0" id="direccion" name="direccion" readonly="">{{ $row->ubigeo_dir }}</p>
                                                    <br>
                                                    <h3>Estado Civil:</h3>
                                                    <p class="mb-0" id="direccion" name="direccion" readonly="">{{ $row->est_civil }}</p>
                                                    <br>
                            
                                                </div>
                                                @empty
                                                <li><a href="{{ route('admin_reniec_view')}}" data-id="0">Datos no encontrados </a></li>
                                                @endforelse
                                            </div>
                                        </div>
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
