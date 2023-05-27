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
                            <li class="breadcrumb-item"><a href="{{ route('admin_daterobackoffice_view') }}">Clientes</a> </li>
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
                        <!-- Basic table -->
                        <section>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-body">
                                        <table id="backOffice" class="table table-bordered" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th style="width: 1%">#</th>
                                                <th>Departamento</th>
                                                <th>DNI</th>
                                                <th>Nombre y Apellidos</th>
                                                <th style="width: 5%" data-visible='false'>Celular</th>
                                                <th style="width: 5%" data-visible='false'>Email</th>
                                                <th>Fotos</th>
                                                <th>Estado</th>
                                                <th>Plan</th>
                                                <th>Asesor</th>
                                                <th>Registrado</th>
                                                <th>Actualización</th>
                                                <th>Acciones</th>
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
                                                                    <div class="avatar me-2">
                                                                        <img src="{{ asset('uploads/datero/' . $row->fdni) }}"
                                                                            id="account-upload-img" class="uploadedAvatar rounded "
                                                                            alt="profile image" height="50" width="50" />
                                                                    </div>
                                                                    
    
                                                                    <div class="dropdown-notifications-item-content">
                                                                        <div class="dropdown-notifications-item-content-text"> DNI Frontal.</div>
                                                                    </div>
                                                                </a>
    
                                                                <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->fdni1) }}"  target="_blank">
                                                                    <div class="avatar me-2">
                                                                        <img src="{{ asset('uploads/datero/' . $row->fdni1) }}"
                                                                            id="account-upload-img" class="uploadedAvatar rounded "
                                                                            alt="profile image" height="50" width="50" />
                                                                    </div>
    
                                                                    <div class="dropdown-notifications-item-content-text"> DNI Posterior.</div>
                                                                </a>
                                                                <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->frecib) }}"  target="_blank">
                                                                    
                                                                    <div class="avatar me-2">
                                                                        <img src="{{ asset('uploads/datero/' . $row->frecib) }}"
                                                                            id="account-upload-img" class="uploadedAvatar rounded "
                                                                            alt="profile image" height="50" width="50" />
                                                                    </div>
                                                                    <div class="dropdown-notifications-item-content-text"> Recibo.</div>
                                                                </a>
    
                                                                <a class="dropdown-item dropdown-notifications-item" href="{{ asset('uploads/datero/' . $row->ceval) }}"  target="_blank">
                                                                    
                                                                    <div class="avatar me-2">
                                                                        <img src="{{ asset('uploads/datero/' . $row->ceval) }}"
                                                                            id="account-upload-img" class="uploadedAvatar rounded "
                                                                            alt="profile image" height="50" width="50" />
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
                                                    <td> {{ $row->created_at }}</td>
                                                    <td> {{ $row->updated_at }}</td>
                                                    <td class="project-actions text-right">
                                                        @if ($row->id_estado == 20)
                                                            {{-- <a href="#" class="btn btn-sm bg-purple"
                                                                title="Ver Historial"><i class="fas fa-eye"></i></a> --}}
                                                                
                                                            <a href="{{ route('admin_daterobackoffice_edit', $row->id) }}" class="btn btn-icon btn-outline-primary" title="Editar">
                                                                <i data-feather='edit'></i></a>
                                                        @elseif ($row->id_estado == 1)
                                                        <a href="{{ route('admin_daterobackoffice_edit', $row->id) }}" class="btn btn-icon btn-outline-primary" title="Editar">
                                                            <i data-feather='edit'></i></a>
                                                            
                                                        @endif
    
    
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
