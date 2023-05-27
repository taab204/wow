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
                                    <li class="breadcrumb-item"><a href="{{ url('admin/asesorcall/viewasesorcall/' . auth()->user()->id) }}">Clientes</a> </li>
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
            <!-- Basic table -->
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Lista Clientes</h4>
                            <a class="btn btn-primary" href="{{ route('admin_addasesorcall') }}">
                                <i class="me-1" data-feather="file-plus"></i>
                                <span class="align-middle">Crear</span>
                            </a>
                        </div>

                        <div class="col-12">
                            <div class="card-body">
                                {{-- <table id="datatables-basic"  class="table"> --}}
                                <table id="asesorCall" class="table table-bordered datatables-basic" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Cod. Cliente</th>
                                            <th>DNI</th>
                                            <th>Nombres y Apellidos</th>
                                            <th>Celular</th>
                                            <th>Dirección</th>
                                            <th>Email</th>
                                            <th>Plan</th>
                                            
                                            <th>F/Instalación</th>
                                            <th>Estado</th>
                                            <th>F/Actualización</th>
                                            <th></th>
                                        </tr>
                                        
                                        

                                    </thead>

                                    <tbody>
                                        @foreach ($clientescall as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td> {{ $row->codinst }}</td>
                                                    <td> {{ $row->dni }}</td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 100px;"> {{ $row->name }} </span> </td>
                                                    <td> {{ $row->cel }}</td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 100px;"> {{ $row->direc }} </span> </td>
                                                    <td> {{ $row->email }}</td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 100px;"> {{ $row->RELPLAN->plan }} </span> </td>
                                                    
                                                    <td> {{ $row->finst }}</td>
                                                    <td>
                                                        @if ($row->id_estado == 1)
                                                            <span class="badge badge-light-success">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 3)
                                                            <span class="badge badge-light-info">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 4)
                                                            <span class="badge badge-light-primary">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 7)
                                                            <span class="badge badge-light-warning">{{ $row->RELESTADO->name }}</span>
                                                        @elseif ($row->id_estado == 8)
                                                            <span class="badge badge-light-warning">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 10)
                                                           <span class="badge badge-light-success">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 11)
                                                            <span class="badge badge-light-dark">{{ $row->RELESTADO->name }}</span>
                                                        
                                                        @elseif ($row->id_estado == 12)
                                                            <span class="badge badge-light-dark">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 14)
                                                            <span class="badge badge-light-success">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 16)
                                                            <span class="badge badge-light-success">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 18)
                                                            <span class="badge badge-light-secondary">{{ $row->RELESTADO->name }}</span>
    
                                                        @elseif ($row->id_estado == 19)
                                                            <span class="badge badge-light-warning">{{ $row->RELESTADO->name }}</span>
                                                        @elseif ($row->id_estado == 20)
                                                            <span class="badge badge-light-info">{{ $row->RELESTADO->name }}</span>
                                                        @elseif ($row->id_estado == 21)
                                                            <span class="badge badge-light-info">{{ $row->RELESTADO->name }}</span>
                                                        @endif
                                                    </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->updated_at }} </span> </td>
                                                    
                                                    <td class="project-actions text-right">
                                                        @if ($row->id_estado == 1)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 10)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 11)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 14)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 16)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 18)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 19)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 20)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="{{ route('admin_detailasesorcall', $row->id) }}">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 3)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                                href="{{ route('admin_editasesorcall', $row->id) }}">
                                                                <i data-feather="edit"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 4)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                                href="{{ route('admin_editasesorcall', $row->id) }}">
                                                                <i data-feather="edit"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 8)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                                href="{{ route('admin_editasesorcall', $row->id) }}">
                                                                <i data-feather="edit"></i>
                                                            </a>
                                                        @elseif ($row->id_estado == 12)
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                                href="{{ route('admin_editasesorcall', $row->id) }}">
                                                                <i data-feather="edit"></i>
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
            </div>

            <!--/ Basic table -->
            
        </div>
    </div>
    <!-- END: Content-->
@endsection



