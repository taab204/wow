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
                        <h2 class="content-header-title float-start mb-0">Clientes</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Dashboard</a> </li> --}}
                            <li class="breadcrumb-item"><a href="{{ route('admin_cliente_view') }}">Clientes</a> </li>
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
                                <div class="card-body">
                                <div class="demo-inline-spacing">
                                    <a class="btn btn-primary" href="{{ route('admin_cliente_addcampo') }}">
                                        <i class="me-1" data-feather="file-plus"></i>
                                        <span class="align-middle">Crear</span>
                                    </a> 
                                </div>
                                
                              </div>
                            </div>
                          </section>
                            
                        <!-- Basic table -->
                        <section>
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <table class="table">

                                        <thead>
                                            <tr>
                                                <th>N</th>
                                                <th>DNI</th>
                                                <th>Nombres y apellidos</th>
                                                <th>Celular</th>
                                                <th>Direccion</th>
                                                <th>Email</th>
                                                <th>Plan</th>
                                                <th>Cod. instalacion</th>
                                                <th>Fecha instalacion</th>
                                                <th>Estado</th>
                                                <th>Fecha Actualización</th>
                                                <th>Opción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clientesfiltro as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    <td> {{ $row->cel }}</td>
                                                    <td> {{ $row->direc }}</td>
                                                    <td> {{ $row->email }}</td>
                                                    <td> {{ $row->RELPLAN->plan }}</td>
                                                    <td> {{ $row->codinst }}</td>
                                                    <td> {{ $row->finst }}</td>
                                                    <td>
                                                        @if ($row->id_estado == 1)
                                                            <a class="btn btn-sm bg-purple">{{ $row->RELESTADO->name }}</a>
                                                        @elseif ($row->id_estado == 4)
                                                            <a class="btn btn-sm bg-green">{{ $row->RELESTADO->name }}</a>
                                                        @elseif ($row->id_estado == 7)
                                                            <a class="btn btn-sm bg-blue">{{ $row->RELESTADO->name }}</a>
                                                        @elseif ($row->id_estado == 8)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 10)
                                                            <a class="btn btn-sm bg-blue">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 11)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 12)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 14)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 15)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 16)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 18)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                            @elseif ($row->id_estado == 19)
                                                            <a class="btn btn-sm bg-red">{{ $row->RELESTADO->name }}</a>
                                                        @endif
                                                    </td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        @if ($row->id_estado == 1)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 7)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 10)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 11)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 14)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 16)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 18)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 19)
                                                            <a class="btn btn-sm bg-purple" href="">
                                                                <i class="fas fa-eye">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 4)
                                                            <a class="btn btn-sm bg-purple"
                                                                href="{{ route('admin_cliente_editcampo', $row->id) }}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 8)
                                                            <a class="btn btn-sm bg-purple"
                                                                href="{{ route('admin_cliente_editcampo', $row->id) }}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 12)
                                                            <a class="btn btn-sm bg-purple"
                                                                href="{{ route('admin_cliente_editcampo', $row->id) }}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                            </a>
                                                        @elseif ($row->id_estado == 15)
                                                            <a class="btn btn-sm bg-purple"
                                                                href="{{ route('admin_cliente_editcampo', $row->id) }}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                            </a>
                                                        @endif
    
                                                        {{-- <a class="btn btn-danger btn-sm" href="{{ route('admin_cliente_delete',$row->id) }}"  onClick="return confirm('Estas seguro?');">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Eliminar
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
