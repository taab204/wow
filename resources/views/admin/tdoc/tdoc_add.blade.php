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
                            <li class="breadcrumb-item"><a href="{{ route('admin_slide_view') }}">Slider</a> </li>
                            <li class="breadcrumb-item active">Crear </li>
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
                        <section id="multiple-column-form">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 class="card-title">CREAR</h4>
                                      </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin_planes_store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
            
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Ingresar Nombre :</label>
                                                            <input type="text" name="plan" required="" class="form-control"
                                                                placeholder="Ingresar Nombre" value="{{ old('plan') }}">
                                                        </div>
            
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="exampleInputEmail1">Ingresar Precio Venta:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">S/.</span>
                                                            </div>
                                                            <input type="number" step="0.01" name="price_vent"class="form-control" placeholder="Ingresar Precio Venta" value="{{ old('price_vent') }}" required="">
                                                        </div>
            
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="exampleInputEmail1">Ingresar Precio Pago:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">S/.</span>
                                                            </div>
                                                            <input type="number" step="0.01" name="price_pag"class="form-control" placeholder="Ingresar Precio Pago" value="{{ old('price_pag') }}">
                                                        </div>
            
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label>Ingresar Fecha Inicio de plan:</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i
                                                                            class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    data-inputmask-alias="datetime"
                                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fini"
                                                                    value="{{ old('fini') }}" required="">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>
            
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label>Ingresar Fecha Fin de plan:</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i
                                                                            class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    data-inputmask-alias="datetime"
                                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask name="ffin"
                                                                    value="{{ old('ffin') }}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>
            
                                                    </div>
                                                </div>
                                                <div class="row">
            
                                                    {{-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Estado :</label>
                                                            <select class="form-control" name="status" required="">
                                                                <option value="1">Activado</option>
                                                                <option value="0">Desactivado</option>
                                                            </select>
                                                        </div>
            
                                                    </div> --}}
                                                </div>
            
            
            
                                                <div class="form-group">
                                                    <label>Ingresar Descripción :</label>
                                                    <textarea class="form-control" name="detail" placeholder="Ingresar Descripción..." cols="30" rows="3">{{ old('detail') }}</textarea>
                                                </div>
            
            
            
            
                                                <!-- Date dd/mm/yyyy -->
            
                                                <!-- /.form group -->
                                                <!-- Date dd/mm/yyyy -->
            
                                                <!-- /.form group -->
            
            
            
            
            
                                            </div>
                                            <!-- /.card-body -->
            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>

                                        
                                        
                                        
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
