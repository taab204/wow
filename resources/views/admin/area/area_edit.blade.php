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
                        <h2 class="content-header-title float-start mb-0">AREA</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin_area_view') }}">AREA</a> </li>
                            <li class="breadcrumb-item active">Editar </li>
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
                        <section>
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 class="card-title">EDITAR</h4>
                                      </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin_area_update',$areas_data->id) }}" method="post">
                                            @csrf
        
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Nombre</label>
                                                    <input class="form-control text-uppercase" id="inputFirstName" type="text" placeholder="Ingresar" name="area" value="{{ $areas_data->area }}"/>
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="form-label">Estado </label>
                                                <select class="select2 form-select" name="status" value="{{ $areas_data->status }}">
                                                    <option value="{{ $areas_data->status }}">{{ $areas_data->status }}</option>
                                                    <option value="Activado">Activado</option>
                                                    <option value="Desactivado">Desactivado</option>
                                                </select>
        
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Descripción</label>
                                                    <textarea name="detail" class="form-control text-uppercase" placeholder="Ingresar Detalle Area" cols="30" rows="3">{{ $areas_data->detail }}</textarea>
        
        
        
                                            </div>
        
        
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </form>
                                        
                                            
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--/ Basic table --> 
                    </div>
            </div>
        </div> 
     <!-- BEGIN: Content-->

@endsection
