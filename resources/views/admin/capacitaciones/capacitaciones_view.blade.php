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
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_slide_view') }}">Capacitación</a> </li> --}}
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
                        <section>
                            <div class="card">
                                <div class="col-12">
                                    <div class="card-body">
                                        {{-- <table id="datatables-basic"  class="table"> --}}
                                        <table id="capacitaciones" class="table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Titulo</th>
                                                    <th>Detalle</th>
                                                    <th>Fecha</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($listado_capacitaciones as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td> {{ $row->title}}</td>
                                                        <td> {{ $row->detail}}</td>
                                                        <td> {{ $row->created_at->format('d/m/Y') }}</td>
                
                                                        <td class="project-actions">
                
                                                            @if($row->status == 1)
                                                                <a href="{{ route('admin_capacitacionestado',$row->id) }}" class="btn btn-success btn-sm"><i data-feather="eye"></i></a>
                                                            @else
                                                                <a href="{{ route('admin_capacitacionestado',$row->id) }}" class="btn btn-danger btn-sm"><i data-feather="eye-off"></i></a>
                                                            @endif
                
                                                            <a class="btn btn-info btn-sm" href="{{ route('admin_editcapacitacion',$row->id) }}"><i data-feather="edit"></i>
                                                            </a>
                                                            <a target="_blank" class="btn btn-info btn-sm"href="{{ asset('uploads/capacitaciones/'.$row->url)}}"><i data-feather='book-open'></i> PDF</a>
                                                            {{-- <a class="btn btn-danger btn-sm" href="{{ route('admin_empleado_delete',$row->id) }}"  onClick="return confirm('Estas seguro?');">
                                                                <i class="fas fa-trash">
                                                                </i>
                
                                                            </a> --}}
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
