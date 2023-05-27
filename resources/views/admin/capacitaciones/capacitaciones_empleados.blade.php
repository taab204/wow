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
                        <h2 class="content-header-title float-start mb-0">Capacitación</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Dashboard</a> </li> --}}
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_slide_view') }}">Slider</a> </li> --}}
                            <li class="breadcrumb-item active">Lista </li>
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
                            <div class="card">
                                <div class="col-12">
                                    <div class="card-body">
                                        {{-- <table id="datatables-basic"  class="table"> --}}
                                        <table id="administrador" class="table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Titulo de la capacitación</th>
                                                    <th>Descripción de la capacitación</th>
                                                    <th>Manuales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($lista_capacitaciones as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td> {{ $row->title}}</td>
                                                        <td> {{ $row->detail}}</td>
                                                        <td class="project-actions ">
                                                            <a target="_blank" class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ asset('uploads/capacitaciones/'.$row->url)}}" title="Clic para ver el manual"><i data-feather="eye"></i>   </a>
                
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                           
                                            
                                            
                                        </table>
                                    </div>
                                </div>
        
        
                            </div>
                        </section>

                        <!--/ Basic table --> 
                    </div>
            </div>
        </div>
      <!-- END: Content-->

    @endsection
