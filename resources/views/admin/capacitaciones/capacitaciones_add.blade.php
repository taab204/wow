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
                        <h2 class="content-header-title float-start mb-0">Capacitación</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/capacitacion/viewcapacitacion') }}">Capacitación</a> </li>
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
                                        <form action="{{ route('admin_storecapacitacion') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
            
            
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">Seleccionar Archivo
                                                            </label><span> .PDF</span>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" name="url" class="custom-file-input"
                                                                        id="exampleInputFile">
                                                                    <label class="custom-file-label" for="exampleInputFile">Seleccionar Archivo PDF</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Titulo de la Capacitación:</label>
                                                            <input type="text" class="form-control" name="title" placeholder="Ingresar" value="{{ old('title') }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Detalle :</label>
                                                    <textarea name="detail" class="form-control" placeholder="Ingresar Detalle" cols="30" rows="3" value="{{ old('detail') }}"></textarea>
                                                </div>
                                            </div>
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
