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
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('admin_estado_view') }}">Estados</a> </li> --}}
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
                        <h4 class="card-title">Lista Estado</h4>
                        {{-- <a class="btn btn-primary" href="{{ route('admin_estado_add') }}">
                            <i class="me-1" data-feather="file-plus"></i>
                            <span class="align-middle">Crear</span>
                        </a> --}}
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Ependiente-tab" data-bs-toggle="tab" href="#Ependiente"
                                    aria-controls="home" role="tab" aria-selected="true"><i data-feather="eye"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TPendiente_backoffices }}</span>Pendiente</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="EregistroSGC-tab" data-bs-toggle="tab" href="#EregistroSGC"
                                    aria-controls="profile" role="tab" aria-selected="false"><i
                                        data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TRegistradosgc_backoffices }}</span>Registro SGC</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="Ecompletado-tab" data-bs-toggle="tab" href="#Ecompletado"
                                    aria-controls="profile" role="tab" aria-selected="false"><i
                                        data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $Tcompletado_backoffices }}</span>Completado</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="Etodos-tab" data-bs-toggle="tab" href="#Etodos"
                                    aria-controls="profile" role="tab" aria-selected="false"><i
                                        data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $Tlist_general_backoffices }}</span>Pendiente/Registro SGC/Completado</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="Ependiente" aria-labelledby="Ependiente-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="estadosA" class="table table-bordered" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Días</th>
                                                <th>Departamento</th>
                                                <th data-visible='false'>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                <th data-visible='false'>Celular</th>
                                                <th data-visible='false'>Email</th>
                                                <th style="width: 20%" data-visible='false'>Fotos</th>
                                                <th>Plan</th>
                                                <th>Asesor</th>
                                                <th>Registrado</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Pendiente_backoffices as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->created_at->diffForHumans(false, 1) }}</td>
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    <td> {{ $row->cel }}</td>
                                                    <td> {{ $row->email }}</td>
                                                    @if ($row->fdni != '' && $row->fdni != '' && $row->fdni != '')
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-primary dropdown-toggle"
                                                                    id="dropdownMenuButton" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"><i
                                                                        data-feather="image"></i></button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item dropdown-notifications-item"
                                                                        href="{{ asset('uploads/datero/' . $row->fdni) }}"
                                                                        target="_blank">
                                                                        <div class="avatar avatar-xxl">
                                                                            <img class="avatar-img img-fluid"
                                                                                src="{{ asset('uploads/datero/' . $row->fdni) }}">
                                                                        </div>

                                                                        <div class="dropdown-notifications-item-content">
                                                                            <div
                                                                                class="dropdown-notifications-item-content-text">
                                                                                DNI Frontal.</div>
                                                                        </div>
                                                                    </a>

                                                                    <a class="dropdown-item dropdown-notifications-item"
                                                                        href="{{ asset('uploads/datero/' . $row->fdni1) }}"
                                                                        target="_blank">
                                                                        <div class="avatar avatar-xxl">
                                                                            <img class="avatar-img img-fluid"
                                                                                src="{{ asset('uploads/datero/' . $row->fdni1) }}">
                                                                        </div>

                                                                        <div
                                                                            class="dropdown-notifications-item-content-text">
                                                                            DNI Posterior.</div>
                                                                    </a>
                                                                    <a class="dropdown-item dropdown-notifications-item"
                                                                        href="{{ asset('uploads/datero/' . $row->frecib) }}"
                                                                        target="_blank">
                                                                        <div class="avatar avatar-xxl">
                                                                            <img class="avatar-img img-fluid"
                                                                                src="{{ asset('uploads/datero/' . $row->frecib) }}">
                                                                        </div>
                                                                        <div
                                                                            class="dropdown-notifications-item-content-text">
                                                                            Recibo.</div>
                                                                    </a>

                                                                    <a class="dropdown-item dropdown-notifications-item"
                                                                        href="{{ asset('uploads/datero/' . $row->ceval) }}"
                                                                        target="_blank">
                                                                        <div class="avatar avatar-xxl">
                                                                            <img class="avatar-img img-fluid"
                                                                                src="{{ asset('uploads/datero/' . $row->ceval) }}">
                                                                        </div>
                                                                        <div
                                                                            class="dropdown-notifications-item-content-text">
                                                                            Evalucacion.</div>
                                                                    </a>

                                                                    <a class="dropdown-item dropdown-notifications-item"
                                                                        href="{{ asset('uploads/datero/' . $row->grab) }}"
                                                                        target="_blank">
                                                                        <div class="avatar avatar-xxl">
                                                                            <audio controls>
                                                                                <source
                                                                                    src="{{ asset('uploads/datero/' . $row->grab) }}"
                                                                                    type="audio/ogg">
                                                                            </audio>
                                                                        </div>
                                                                        <div
                                                                            class="dropdown-notifications-item-content-text">
                                                                            Grabación.</div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    @else
                                                        <td><span class="badge bg-red-soft text-red">Sin fotos</span></td>
                                                    @endif
                                                    <td>{{ $row->CON->plan }}</td>
                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                        <td>Datero WEB</td>
                                                    @endif

                                                    <td> {{ $row->created_at }}</td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_daterobackoffices_edit', $row->id) }}"
                                                            title="Editar"> <i data-feather="edit"> </i>
                                                        </a>
                                                        {{-- {{ route('admin_empleado_bitacora',$row->id) }} --}}
                                                        <a href="#"
                                                            class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            title="Ver Historial"><i data-feather="eye"></i></a>
                                                        {{-- <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_daterobackoffices_delete', $row->id) }}" onClick="return confirm('Estas seguro Eliminar?');" title="Eliminar"> <i data-feather="trash"></i></a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane" id="EregistroSGC" aria-labelledby="EregistroSGC-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="estadosD" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Días</th>
                                                <th>Departamento-Instalacion</th>
                                                <th>Cod. Cliente</th>

                                                <th data-visible='false'>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                <th data-visible='false'>Celular</th>
                                                <th style="width: 20%" data-visible='false'>Cod. Cliente</th>
                                                <th>Asesor</th>
                                                <th>Registrado</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach ($Registradosgc_backoffices as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->created_at->diffForHumans(false, 1) }}</td>
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    <td> {{ $row->codinst }}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    <td> {{ $row->cel }}</td>
                                                    @if ($row->codinst != '')
                                                        <td> {{ $row->codinst }}</td>
                                                    @else
                                                        <td>
                                                            <span class="badge bg-red-soft text-red">Sin Cod.
                                                                Instalación</span>
                                                        </td>
                                                    @endif


                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                        <td>Datero WEB</td>
                                                    @endif

                                                    <td> {{ $row->created_at }}</td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_daterobackoffices_edit', $row->id) }}"
                                                            title="Editar"> <i data-feather="edit">
                                                            </i>
                                                        </a>
                                                        {{-- {{ route('admin_empleado_bitacora',$row->id) }} --}}
                                                        <a href="#"
                                                            class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            title="Ver Historial"><i data-feather="eye"></i></a>
                                                        {{-- <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_daterobackoffices_delete', $row->id) }}" onClick="return confirm('Estas seguro Eliminar?');" title="Eliminar"> <i data-feather="trash"></i></a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>


                                    </table>
                                </div>


                                </p>
                            </div>
                            <div class="tab-pane" id="Ecompletado" aria-labelledby="Ecompletado-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="estadosD" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cod. Cliente</th>
                                                <th>Fecha Instalación</th>
                                                <th>Departamento</th>
                                                <th data-visible='false'>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                <th data-visible='false'>Celular</th>
                                                <th>Plan</th>
                                                <th>Asesor</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($completado_backoffices as $row)
                                                <tr>

                                                    <td> {{ $loop->iteration }}</td>
                                                    <td> {{ $row->codinst }}</td>
                                                    <td> {{ $row->finst }}</td>
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    <td> {{ $row->cel }}</td>
                                                    <td>{{ $row->CON->plan }}</td>
                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                        <td>Datero WEB</td>
                                                    @endif
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_daterobackoffices_edit', $row->id) }}"
                                                            title="Editar"> <i data-feather="edit">
                                                            </i>
                                                        </a>
                                                        {{-- {{ route('admin_empleado_bitacora',$row->id) }} --}}
                                                        <a href="#"
                                                            class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            title="Ver Historial"><i data-feather="eye"></i></a>
                                                        {{-- <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_daterobackoffices_delete', $row->id) }}" onClick="return confirm('Estas seguro Eliminar?');" title="Eliminar"> <i data-feather="trash"></i></a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        


                                        </tbody>


                                    </table>
                                </div>


                                </p>
                            </div>
                            <div class="tab-pane" id="Etodos" aria-labelledby="Etodos-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="estadosD" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Departamento-Instalacion</th>
                                                <th data-visible='false'>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                <th data-visible='false'>Celular</th>
                                                <th data-visible='false'>Email</th>
                                                <th>Estado</th>
                                                <th>Plan</th>
                                                <th>Asesor</th>
                                                <th>Registrado</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_general_backoffices as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td> {{ $row->name }}</td>
                                                    <td> {{ $row->cel }}</td>
                                                    <td> {{ $row->email }}</td>
                                                    <td> {{ $row->RELESTADO->name }}</td>
                                                    <td>{{ $row->CON->plan }}</td>
                                                    @if ($row->id_admin != '')
                                                        <td>{{ $row->RELEMPLEADO->name }}</td>
                                                    @else
                                                        <td>Datero WEB</td>
                                                    @endif

                                                    <td> {{ $row->created_at }}</td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_daterobackoffices_edit', $row->id) }}"
                                                            title="Editar"> <i data-feather="edit"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            title="Ver Historial"><i data-feather="eye"></i></a>
                                                        {{-- <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_daterobackoffices_delete', $row->id) }}" onClick="return confirm('Estas seguro Eliminar?');" title="Eliminar"> <i data-feather="trash"></i></a> --}}
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

