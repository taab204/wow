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
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                        {{-- <div class="card-header">
                            <h4 class="card-title">Lista Clientes</h4>
                            <a class="btn btn-primary" href="{{ route('admin_cliente_add') }}">
                                <i class="me-1" data-feather="file-plus"></i>
                                <span class="align-middle">Crear</span>
                            </a>
                        </div> --}}

                        <div class="col-12">
                            <div class="card-body">
                                {{-- <table id="datatables-basic"  class="table"> --}}
                                <table id="clientes" class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>N</th>
                                            <th>DNI</th>
                                            <th>Nombres y apellidos</th>
                                            <th>Celular</th>
                                            {{-- <th data-visible='false'>Direccion</th>
                                            <th data-visible='false'>Email</th> --}}
                                            <th>Plan</th>
                                            <th>Cod. Cliente</th>
                                            <th>Fecha instalacion</th>
                                            <th>Estado</th>
                                            <th>Fecha Actualización</th>
                                            <th>Fecha Creación</th>
        
                                            <th>Asesor</th>
                                            {{-- <th>Opción</th> --}}
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($clientes as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
    
                                            <td> {{ $row->dni }}</td>
                                            <td> {{ $row->name }}</td>
                                            <td> {{ $row->cel }}</td>
                                            {{-- <td> {{ $row->direc }}</td>
                                            <td> {{ $row->email }}</td> --}}
                                            <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->RELPLAN->plan }}</span></td>
                                            <td> {{ $row->codinst }}</td>
                                            <td> {{ $row->finst }}
                                            <td> {{ $row->RELESTADO->name }}</td>
    
                                            <td> {{ $row->updated_at }}</td>
                                            <td> {{ $row->created_at }}</td>
                                            @if ($row->id_admin != '')
                                                <td>{{ $row->RELEMPLEADO->name }} - {{ $row->RELEMPLEADO->rol }}</td>
                                            @else
                                                <td>Sin Asesor</td>
                                            @endif
                                            {{-- <td class="project-actions text-right">
                                                <a class="btn btn-icon btn-outline-primary" href="{{ route('admin_cliente_edit', $row->id) }}" title="Editar">
                                                    <i data-feather="edit"> </i>
                                                </a>
                                                <a class="btn btn-icon btn-outline-primary" href="{{ route('admin_cliente_delete', $row->id) }}" onClick="return confirm('Estas seguro?');" title="Eliminar">
                                                    <i data-feather="trash"></i>
                                                </a>
                                            </td> --}}
                                        </tr>
                                    @endforeach

                                    </tbody>


                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

