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
                            <h2 class="content-header-title float-start mb-0">Empleados</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Dashboard</a> </li> --}}
                                    <li class="breadcrumb-item"><a href="{{ route('admin_empleado_view') }}">Empleados</a>
                                    </li>
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
                        <h4 class="card-title">Lista Empleados</h4>
                        <div>
                            <a class="btn btn-primary" href="{{ route('admin_empleado_add') }}">
                                <i class="me-1" data-feather="file-plus"></i>
                                <span class="align-middle">Crear</span>
                            </a>
                            <a class="btn btn-primary" href="{{ route('admin_empleado_export') }}">
                                <i data-feather='download'></i>
                                <span class="align-middle">Exportar Excel</span></a>

                        </div>
                        
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon"
                                    aria-controls="home" role="tab" aria-selected="true"><i data-feather="eye"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TEmpleados }}</span>Empleados
                                    Activos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon"
                                    aria-controls="profile" role="tab" aria-selected="false"><i
                                        data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TEmpleadosD }}</span>Empleados
                                    Desactivados</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                <p>
                                    
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="empleadosA" class="table datatables-basic " style="width:100%">
                                        

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Id</th>
                                                <th>Foto</th>
                                                <th>DNI</th>
                                                <th>Nombres y Apellidos</th>
                                                <th>Celular Personal</th>
                                                <th data-visible='false'>Area</th>
                                                <th>rol</th>
                                                <th data-visible='false'>Labora Desde</th>
                                                <th data-visible='false'>Labora Hasta</th>
                                                <th>Dirección</th>
                                                <th>Email</th>
                                                <th data-visible='false'>Nombre Banco</th>
                                                <th data-visible='false'>Numero Cuenta</th>
                                                <th data-visible='false'>Estado Civil</th>
                                                <th data-visible='false'>Numero Hijos</th>
                                                <th data-visible='false'>Sexo</th>
                                                <th data-visible='false'>Fecha Nacimiento</th>
                                                <th data-visible='false'>Fecha Registo</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($empleados as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->id }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="{{ asset('uploads/' . $row->foto) }}" target="_blank">
                                                            <div class="avatar me-2">
                                                                <img src="{{ asset('uploads/' . $row->foto) }}"
                                                                    id="account-upload-img" class="uploadedAvatar rounded "
                                                                    alt="profile image" height="50" width="50" />

                                                            </div>
                                                            {{-- Tiger Nixon --}}
                                                        </div>
                                                    </td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> <span class="d-inline-block text-truncate" style="max-width: 150px;">{{ $row->name }}</span></td>
                                                    <td> {{ $row->tel1 }}</td>
                                                    <td> <span class="d-inline-block text-truncate" style="max-width: 150px;">{{ $row->CONAREAS->area }}</span></td>
                                                    <td> {{ $row->rol }}</td>
                                                    <td> {{ $row->fin }}</td>
                                                    <td> {{ $row->fend }}</td>
                                                    <td> <span class="d-inline-block text-truncate" style="max-width: 150px;">{{ $row->address }}</span></td>
                                                    <td> {{ $row->email }}</td>
                                                    <td> {{ $row->nbanco }}</td>
                                                    <td> {{ $row->ncuenta }}</td>
                                                    <td> {{ $row->ecivil }}</td>
                                                    <td> {{ $row->nhijos }}</td>
                                                    <td> {{ $row->sexo }}</td>
                                                    <td> {{ $row->fnaci }}</td>
                                                    <td> {{ $row->created_at->format('d/m/Y') }}</td>
                                                    <td class="project-actions text-right">
                                                        <a href="{{ route('admin_empleado_change_status', $row->id) }}" class="btn btn-icon btn-outline-primary" title="Desactivar">
                                                            <i data-feather="eye-off"></i> 
                                                        </a>
                                                        <a href="{{ route('admin_empleado_edit', $row->id) }}" class="btn btn-icon btn-outline-primary" title="Editar">
                                                            <i data-feather='edit'></i></a>

                                                   
                                                        
                                                        
                                                    </td>

                                                    {{-- <td class="dropdown">
                                                        <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            @if ($row->status == 1)
                                                            <a href="{{ route('admin_empleado_change_status', $row->id) }}" class="dropdown-item"><i data-feather="eye-off"></i> Desactivar</a>
                                                            @else
                                                            <a href="{{ route('admin_empleado_change_status', $row->id) }}" class="dropdown-item"><i data-feather="eye"></i> </a>
                                                            @endif
                                                            <a href="{{ route('admin_empleado_edit', $row->id) }}" class="dropdown-item"><i data-feather="edit"></i> Editar</a>
                                                             <!--<a class="btn btn-danger btn-sm" href="{{ route('admin_planes_delete', $row->id) }}"  onClick="return confirm('Estas seguro?');"><i class="fas fa-trash"></i>Eliminar</a> -->
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="empleadosD" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Id</th>
                                                <th>Foto</th>
                                                <th>DNI</th>
                                                <th>Nombres y Apellidos</th>
                                                <th>Celular Personal</th>
                                                {{-- <th data-visible='false'>Area</th> --}}
                                                <th>Area</th>
                                                <th>rol</th>
                                                {{-- <th>Labora Desde</th>
                                                <th>Labora Hasta</th>--}}
                                                <th>Dirección</th>
                                                {{-- <th>Email</th>
                                                <th>Nombre Banco</th>
                                                <th>Numero Cuenta</th>
                                                <th>Estado Civil</th>
                                                <th>Numero Hijos</th>
                                                <th>Sexo</th>
                                                <th>Fecha Nacimiento</th>
                                                <th>Fecha Registo</th> --}}

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($empleadosD as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->id }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar me-2">
                                                                <img src="{{ asset('uploads/' . $row->foto) }}"
                                                                    id="account-upload-img"
                                                                    class="uploadedAvatar rounded " alt="profile image"
                                                                    height="50" width="50" />

                                                            </div>
                                                            {{-- Tiger Nixon --}}
                                                        </div>
                                                    </td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    <td> {{ $row->tel1 }}</td>
                                                    <td> {{ $row->CONAREAS->area }}</td>
                                                    <td> {{ $row->rol }}</td>
                                                    {{-- <td> {{ $row->fin }}</td>
                                                    <td> {{ $row->fend }}</td>
                                                    <td> {{ $row->address }}</td>
                                                    <td> {{ $row->email }}</td>
                                                    <td> {{ $row->nbanco }}</td>
                                                    <td> {{ $row->ncuenta }}</td>
                                                    <td> {{ $row->ecivil }}</td>
                                                    <td> {{ $row->nhijos }}</td>
                                                    <td> {{ $row->sexo }}</td>
                                                    <td> {{ $row->fnaci }}</td>
                                                    <td> {{ $row->created_at->format('d/m/Y') }}</td> --}}

                                                    <td class="project-actions text-right">
                                                        <a href="{{ route('admin_empleado_change_status', $row->id) }}" class="btn btn-icon btn-outline-primary">
                                                        <i data-feather="eye"></i></a></td>

                                                   
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
