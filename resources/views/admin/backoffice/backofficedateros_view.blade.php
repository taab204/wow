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
                            <h2 class="content-header-title float-start mb-0">Clientes Dateros</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Dashboard</a> </li> --}}
                                    {{-- <li class="breadcrumb-item"><a href="{{ url('admin/asesorcampo/viewasesorcampo/' . auth()->user()->id)  }}">Clientes</a> </li> --}}
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

                        <div class="card-header">
                            <h4 class="card-title">Lista Clientes Dateros</h4>
                            {{-- <a class="btn btn-primary" href="{{ route('admin_addasesorcampo') }}">
                                <i class="me-1" data-feather="file-plus"></i>
                                <span class="align-middle">Crear</span>
                            </a> --}}
                        </div>

                        <div class="col-12">
                            <div class="card-body">
                                {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="backOffice" class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%">#</th>
                                            <th>Departamento</th>
                                            <th>DNI</th>
                                            <th>Nombre y Apellidos</th>
                                            <th style="width: 5%" data-visible='false'>Celular</th>
                                            <th style="width: 5%" data-visible='false'>Email</th>
                                            <th style="width: 10%" data-visible='false'>Fotos</th>
                                            <th>Estado</th>
                                            <th>Plan</th>
                                            <th>Asesor</th>
                                            <th>Nombre Datero</th>
                                            <th>Registrado</th>
                                            <th>Actualización</th>
                                            <th> </th>
                                            
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($dateros_backoffice as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $row->RELDEPARTAMENTO->nom_dep }}</td>
                                                {{-- <td> {{ $row->depart }}</td> --}}
                                                <td> {{ $row->dni }}</td>
                                                <td> {{ $row->name }}</td>
                                                <td> {{ $row->cel }}</td>
                                                <td> {{ $row->email }}</td>

                                                {{-- @if ($row->fdni != '') --}}
                                                @if ($row->fdni != '' && $row->fdni != '' && $row->fdni != '')
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="image"></i></button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->fdni) }}"  target="_blank">
                                                                <div class="avatar avatar-xxl">
                                                                    <img class="avatar-img img-fluid" src="{{ asset('uploads/datero/' . $row->fdni) }}">
                                                                </div>

                                                                <div class="dropdown-notifications-item-content">
                                                                    <div class="dropdown-notifications-item-content-text"> DNI Frontal.</div>
                                                                </div>
                                                            </a>

                                                            <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->fdni1) }}"  target="_blank">
                                                                <div class="avatar avatar-xxl">
                                                                    <img class="avatar-img img-fluid" src="{{ asset('uploads/datero/' . $row->fdni1) }}">
                                                                </div>

                                                                <div class="dropdown-notifications-item-content-text"> DNI Posterior.</div>
                                                            </a>
                                                            <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->frecib) }}"  target="_blank">
                                                                <div class="avatar avatar-xxl">
                                                                    <img class="avatar-img img-fluid" src="{{ asset('uploads/datero/' . $row->frecib) }}">
                                                                </div>
                                                                <div class="dropdown-notifications-item-content-text"> Recibo.</div>
                                                            </a>

                                                            <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->ceval) }}"  target="_blank">
                                                                <div class="avatar avatar-xxl">
                                                                    <img class="avatar-img img-fluid" src="{{ asset('uploads/datero/' . $row->ceval) }}">
                                                                </div>
                                                                <div class="dropdown-notifications-item-content-text"> Evalucacion.</div>
                                                            </a>

                                                            <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->grab) }}"  target="_blank">
                                                                <div class="avatar avatar-xxl">
                                                                    <audio controls>
                                                                        <source src="{{ asset('uploads/datero/'.$row->grab) }}" type="audio/ogg">
                                                                    </audio>
                                                                </div>
                                                                <div class="dropdown-notifications-item-content-text"> Grabación.</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                @else
                                                    <td>Sin fotos</td>
                                                @endif
                                                <td> {{ $row->RELESTADO->name }}</td>
                                                <td>{{ $row->CON->plan }}</td>
                                                @if ($row->id_admin != '')
                                                    <td>{{ $row->RELEMPLEADO->name }}</td>
                                                @else
                                                    <td>Datero WEB</td>
                                                @endif
                                                <td> {{ $row->dname }}</td>
                                                <td> {{ $row->created_at }}</td>
                                                <td> {{ $row->updated_at }}</td>
                                                <td class="project-actions text-right">
                                                    @if ($row->id_estado == 20)
                                                        {{-- <a href="#" class="btn btn-sm bg-purple"
                                                            title="Ver Historial"><i class="fas fa-eye"></i></a> --}}
                                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_daterobackoffice_edit', $row->id) }}"
                                                            title="Editar"><i data-feather="edit"> </i>
                                                        </a>
                                                    @elseif ($row->id_estado == 1)
                                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                            href="{{ route('admin_daterobackoffice_edit', $row->id) }}"
                                                            title="Editar"><i data-feather="edit"> </i>
                                                        </a>
                                                    @endif


                                                </td>
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

