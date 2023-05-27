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
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('admin_viewtesoreria') }}">Estados</a> </li> --}}
                                    <li class="breadcrumb-item active">Lista </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">

                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="me-1"
                                        data-feather="check-square"></i><span class="align-middle">Todo</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1"
                                        data-feather="message-square"></i><span class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Agengas</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs with Icon starts -->
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Lista</h4>
                        {{-- <a class="btn btn-primary" href="{{ route('admin_estado_add') }}">
                            <i class="me-1" data-feather="file-plus"></i>
                            <span class="align-middle">Crear</span>
                        </a> --}}
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="TValidado-tab" data-bs-toggle="tab" href="#TValidado"
                                    aria-controls="home" role="tab" aria-selected="true"><i data-feather="eye"></i>
                                    <span class="badge rounded-pill bg-danger"> {{ $TotalValidado }}</span>Validado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="TPorPagar-tab" data-bs-toggle="tab" href="#TPorPagar"
                                    aria-controls="profile" role="tab" aria-selected="false"><i
                                        data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TotalPorPagar }} </span>Por Pagar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="TCompletado-tab" data-bs-toggle="tab" href="#TCompletado"
                                    aria-controls="profile" role="tab" aria-selected="false"><i
                                        data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TotalCompletado }} </span>Completado</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="TTodo-tab" data-bs-toggle="tab" href="#TTodo"
                                    aria-controls="profile" role="tab" aria-selected="false"><i
                                        data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TotalTodo }} </span>Pendiente/Registro SGC/Completado</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="TValidado" aria-labelledby="TValidado-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="TValidados" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Departamento</th>
                                                <th>Asesor</th>
                                                
                                                <th>Cod. Cliente</th>
                                                <th>Fecha Instalación</th>
                                                <th>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                <th>Plan</th>  
                                                <th>Estado</th>  
                                                <th>Registrado</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($validado_tesoreria as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                        <td>{{ $row->dname }}</td>
                                                    @endif
                                                    
                                                    @if ($row->codinst != '')
                                                    <td> {{ $row->codinst }}</td>

    
                                                    @else
                                                        <td>
                                                            <span class="badge bg-red-soft text-red">Sin Cod. Instalación</span>
                                                            </td>
                                                    @endif
                                                    <td> {{$row->finst}}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
    
                                                    <td>{{ $row->CON->plan }}</td>
                                                    <td> {{ $row->RELESTADO->name }}</td>
    
    
                                                    <td> {{ $row->created_at }}</td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_edittesoreria', $row->id) }}" title="Editar"> <i data-feather="edit"> </i>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                        

                                    </table>
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane" id="TPorPagar" aria-labelledby="TPorPagar-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="TPagos" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                {{-- <th>Días</th> --}}
                                                <th>Departamento</th>
                                                <th>Asesor</th>
                                                <th>Cod. Cliente</th>
                                                <th>Fecha Instalación</th>


                                                <th>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                {{-- <th>Celular</th> --}}
                                                
                                                
                                                <th>Plan</th>
                                                <th>Estado</th>
                                                <th>Registrado</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($por_pagar_tesoreria as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    {{-- <td> {{ $row->updated_at->diffForHumans(null, false, false, 3) }}</td> --}}
                                                    {{-- <td> {{ $row->updated_at->diffForHumans(false,1) }}</td> --}}
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                    <td>{{ $row->dname }}</td>
                                                    @endif

                                                    @if ($row->codinst != '')
                                                    <td> {{ $row->codinst }}</td>

    
                                                    @else
                                                        <td>
                                                            <span class="badge bg-red-soft text-red">Sin Cod. Instalación</span>
                                                            </td>
                                                    @endif
                                                    <td> {{$row->finst}}</td>

                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    {{-- <td> {{ $row->cel }}</td> --}}
                                                    <td>{{ $row->CON->plan }}</td>
                                                    
    
    
                                                    
                                                    <td> {{ $row->RELESTADO->name }}</td>
    
                                                    <td> {{ $row->created_at }}</td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_edittesoreria', $row->id) }}"
                                                            title="Editar"> <i data-feather="edit">
                                                            </i>
                                                        </a>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>


                                    </table>
                                </div>


                                </p>
                            </div>
                            <div class="tab-pane" id="TCompletado" aria-labelledby="TCompletado-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="TCompletados" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Departamento</th>
                                                <th>Asesor</th>
                                                <th>Cod. Cliente</th>
                                                <th>Fecha Instalación</th>
                                                <th>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                {{-- <th>Celular</th> --}}
                                                <th>Plan</th>
                                                <th>Estado</th>
                                                
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($completado_tesoreria as $row)
                                                <tr>
                                                    <td> {{ $loop->iteration }}</td>
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                        <td>Datero WEB</td>
                                                    @endif
                                                    <td> {{$row->codinst}}</td>
                                                    <td> {{$row->finst}}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    {{-- <td> {{ $row->cel }}</td> --}}
                                                    <td>{{ $row->CON->plan }}</td>
                                                    <td> {{ $row->RELESTADO->name }}</td>
                                                    
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_edittesoreria', $row->id) }}"
                                                            title="Editar"> <i data-feather="edit">
                                                            </i>
                                                        </a>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        



                                    </table>
                                </div>


                                </p>
                            </div>
                            <div class="tab-pane" id="TTodo" aria-labelledby="TTodo-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="TTodos" class="table table-bordered" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Departamento-Instalacion</th>
                                                <th>Asesor</th>
                                                <th>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                {{-- <th>Celular</th>
                                                <th>Email</th> --}}
                                                
                                                <th>Plan</th>
                                                <th>Estado</th>
                                                
                                                <th>Registrado</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($todo_tesoreria as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                        <td>Datero WEB</td>
                                                    @endif
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    {{-- <td> {{ $row->cel }}</td>
                                                    <td> {{ $row->email }}</td> --}}
                                                    <td>{{ $row->CON->plan }}</td>
                                                    <td> {{ $row->RELESTADO->name }}</td>
                                                    <td> {{ $row->created_at }}</td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_edittesoreria', $row->id) }}"
                                                            title="Editar"> <i data-feather="edit">
                                                            </i>
                                                        </a>
                                                        {{-- <a href="#" class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            title="Ver Historial"><i data-feather="eye"></i></a> --}}
    
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        



                                    </table>
                                </div>


                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END: Content-->
@endsection

