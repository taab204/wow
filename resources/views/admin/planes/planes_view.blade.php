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
                            <h2 class="content-header-title float-start mb-0">Planes</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Dashboard</a> </li> --}}
                                    <li class="breadcrumb-item"><a href="{{ route('admin_planes_view') }}">Planes</a> </li>
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
                        <h4 class="card-title">Lista Planes</h4>
                        <a class="btn btn-primary" href="{{ route('admin_planes_add') }}">
                            <i class="me-1" data-feather="file-plus"></i>
                            <span class="align-middle">Crear</span>
                        </a>
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true"><i data-feather="eye"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TPlanes }}</span>Planes Activos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false"><i data-feather="eye-off"></i>
                                    <span class="badge rounded-pill bg-danger">{{ $TPlanesD }}</span>Planes Desactivados</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                <p>
                                <div class="card-body">
                                    {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="planesA" class="table table-bordered" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre Plan</th>
                                                <th>Detalle</th>
                                                <th>Precio Venta</th>
                                                <th>Precio Pago</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha Fin</th>
                                                <th>Actualizado</th>
                                                <th>Creado</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($planes as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->plan }} </span> </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->detail }} </span> </td>
                                                    <td> S/. {{ $row->price_vent }}</td>
                                                    <td> S/. {{ $row->price_pag }}</td>
                                                    <td> {{ $row->fini }}</td>
                                                    <td> {{ $row->ffin }}</td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->updated_at }} </span> </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->created_at }} </span> </td>
                                                    <td class="dropdown">
                                                        <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            @if ($row->status == 1)
                                                            <a href="{{ route('admin_estados_planes_estado', $row->id) }}" class="dropdown-item"><i data-feather="eye-off"></i> Desactivar</a>
                                                            @else
                                                            <a href="{{ route('admin_estados_planes_estado', $row->id) }}" class="dropdown-item"><i data-feather="eye"></i> </a>
                                                            @endif
                                                            <a href="{{ route('admin_planes_edit', $row->id) }}" class="dropdown-item"><i data-feather="edit"></i> Editar</a>
                                                             <!--<a class="btn btn-danger btn-sm" href="{{ route('admin_planes_delete', $row->id) }}"  onClick="return confirm('Estas seguro?');"><i class="fas fa-trash"></i>Eliminar</a> -->
                                                        </div>
                                                    </td>
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
                                    <table id="planesD" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre Plan</th>
                                                <th>Detalle</th>
                                                <th>Precio Venta</th>
                                                <th>Precio Pago</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha Fin</th>
                                                <th>Actualizado</th>
                                                <th>Creado</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($planesd as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->plan }} </span> </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->detail }} </span> </td>
                                                    <td> S/. {{ $row->price_vent }}</td>
                                                    <td> S/. {{ $row->price_pag }}</td>
                                                    <td> {{ $row->fini }}</td>
                                                    <td> {{ $row->ffin }}</td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->updated_at }} </span> </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->created_at }} </span> </td>
                                                    <td> 
                                                        <a href="{{ route('admin_estados_planes_estado', $row->id) }}">
                                                        <i data-feather="eye"></i></a></td>
                                                    {{-- <td class="dropdown">
                                                        <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            @if ($row->status == 1)
                                                            <a href="{{ route('admin_estados_planes_estado', $row->id) }}" class="dropdown-item"><i data-feather="eye-off"></i> </a>
                                                            @else
                                                            <a href="{{ route('admin_estados_planes_estado', $row->id) }}" class="dropdown-item"><i data-feather="eye"></i> Activar</a>
                                                            @endif

                                                            <a href="{{ route('admin_planes_edit', $row->id) }}" class="dropdown-item"><i data-feather="edit"></i> Editar</a>
                                                             <!--<a class="btn btn-danger btn-sm" href="{{ route('admin_planes_delete', $row->id) }}"  onClick="return confirm('Estas seguro?');"> <i class="fas fa-trash"> </i> Eliminar </a> -->
                                                        </div>
                                                    </td> --}}
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
