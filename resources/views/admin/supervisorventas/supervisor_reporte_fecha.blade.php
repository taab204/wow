@extends('admin.layout.app')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">

                    <div class="page-header">
                        <div class="media align-items-center">

                            <div class="media-body pl-3">
                                <h1 class="page-header-title mb-1">Reportes De Ventas</h1>
                                <div>
                                    <span>Usuario:</span>
                                    <a href="#" class="text--primary-2">{{ Auth::guard('admin')->user()->name }}</a>
                                </div>
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
            <div class="content-body">
                <div class="card mb-4">

                    <div class="card-body">


                        <form action="{{ route('admin_reportes_resultados') }}" method="POST">
                            @csrf
                            <div class="row">
                                {{-- <div class="col-md-4">
                                    <label class="form-label">Asesor</label>
                                    <select class="select2 form-select" name=" " id=" " required>
                                        <option selected disabled>Seleccinar Asesor</option>
                                        <option value="">Todos</option>

                                        <option value=""> </option>
                                    </select>
                                </div> --}}

                                <div class="col-md-3">

                                    <label class="form-label">Inicio </label>

                                    <div class="input-group input-group-joined">
                                        <span class="input-group-text">
                                            <i data-feather="calendar"></i>
                                        </span>
                                        <input type="date" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                            name="iniciof" id="iniciof" value="{{ old('iniciof') }}" required />
                                    </div>
                                </div>
                                <div class="col-md-3">

                                    <label class="form-label">Fin </label>

                                    <div class="input-group input-group-joined">
                                        <span class="input-group-text">
                                            <i data-feather="calendar"></i>
                                        </span>
                                        <input type="date" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                            name="finf" id="finf" value="{{ old('finf') }}" required />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block">Buscar</button>

                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="reporte_supervisor_ventas" class="table datatables-basic " style="width:100%">


                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Departamento</th>
                                    <th>Distrito</th>
                                    <th>Asesor</th>
                                    <th>Cod. Cliente</th>
                                    <th>Fecha Instalación</th>
                                    <th>DNI</th>
                                    <th>Nombre y Apellidos</th>
                                    <th>Estado</th>
                                    <th>Plan</th>
                                    <th>Registrado</th>
                                    <th>Actualización</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reporte_dia as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                        <td> {{ $row->RELPROVINCIA->nom_pro }}</td>
                                        @if ($row->id_admin != '')
                                            <td>{{ $row->RELEMPLEADO->name }}</td>
                                        @else
                                            <td>Datero WEB</td>
                                        @endif
                                        
                                        @if ($row->codinst != '')
                                            <td> {{ $row->codinst }}</td>
                                        @else
                                            <td>
                                                <span class="badge bg-red-soft text-red">Sin Cod.
                                                    Instalación</span>
                                            </td>
                                        @endif
                                        <td> {{ $row->finst }}</td>
                                        <td>{{ $row->dni }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td> {{ $row->RELESTADO->name }}</td>
                                        <td>{{ $row->CON->plan }}</td>
                                        <td> {{ $row->created_at }}</td>
                                        <td> {{ $row->updated_at }}</td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>




                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END: Content-->
@endsection

{{-- @section('script') --}}

{{-- @endsection --}}
