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
                        <h2 class="content-header-title float-start mb-0">Slider</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Dashboard</a> </li> --}}
                            <li class="breadcrumb-item"><a href="{{ route('admin_slide_view') }}">Slider</a> </li>
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

                <!-- Tabs with Icon starts -->
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Lista Planes</h4>
                        <a class="btn btn-primary" href="{{ route('admin_slide_add') }}">
                            <i class="me-1" data-feather="file-plus"></i>
                            <span class="align-middle">Crear</span>
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="col-12">
                            <div class="card-body">
                                {{-- <table id="datatables-basic"  class="table"> --}}
                                    <table id="slider" class="table table-bordered" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Foto</th>
                                                <th>Texto Botón Izquierdo</th>
                                                <th>Texto Botón Derecho</th>
                                                <th>URL Botón Derecho</th>
                                                <th>Mensaje</th>
                                                <th>Actualizado</th>
                                                <th>Creado</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($slides as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar me-2">
                                                                <a href="{{ asset('uploads/' . $row->foto) }}" target="_blank">
                                                                <img
                                                                src="{{ asset('uploads/' . $row->foto) }}"
                                                                id="account-upload-img"
                                                                class="uploadedAvatar rounded "
                                                                alt="profile image"
                                                                height="40"
                                                                width="40"
                                                                
                                                                />
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->ref }} </span> </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->btext }} </span> </td>

                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> <a href="{{ $row->burl }}" target="_blank">{{ $row->burl }}</a></span> </td>
                                                   
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->text }} </span> </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->updated_at }} </span> </td>
                                                    <td><span class="d-inline-block text-truncate" style="max-width: 150px;"> {{ $row->created_at }} </span> </td>
                                                    <td class="dropdown">
                                                        <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="{{ route('admin_slide_edit', $row->id) }}" class="dropdown-item"><i data-feather="edit"></i> Editar</a>
                                                            <a href="{{ route('admin_slide_delete', $row->id) }}" class="dropdown-item onclick="eliminar()"><i data-feather="trash"></i> Eliminar</a>
                                                             
                                                        </div>
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
        </div>
      <!-- END: Content-->
@endsection
