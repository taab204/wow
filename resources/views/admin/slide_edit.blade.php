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
                                        
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="card mb-4 mb-xl-0">
                                                        <div class="card-header text-center">Foto</div>
                                                        <div class="card-body text-center">
                                                            
                                                            <img class="img-fluid card-img-top" src="{{ asset('uploads/'.$slide_data->foto) }}" alt="img-placeholder" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="card mb-4">
                                                        
                                                        <div class="card-body">
                                                            <form action="{{ route('admin_slide_update',$slide_data->id) }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                            
                                                                <div class="mb-3">
                                                                    <label class="form-label">Seleccione Imagen</label>
                                                                    <input class="form-control" type="file" id="formFile"  name="foto">
                                                                </div>
                            
                                                                <div class="row gx-3 mb-3">
                                                                    <div class="col-md-6">
                                                                        <label class="form-label">Texto para Botón Izquierdo</label>
                                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Ingresar" name="ref" value="{{ $slide_data->ref }}" />
                                                                    </div>
                            
                                                                    <div class="col-md-6">
                                                                        <label class="form-label">Texto para Botón Derecho</label>
                                                                        <input class="form-control" id="inputLastName" type="text"
                                                                            placeholder="Ingresar" name="btext" value="{{ $slide_data->btext }}" />
                                                                    </div>
                                                                </div>
                            
                                                                <div class="mb-3">
                                                                    <label class="form-label">Ingresar URL o Link <code>(Puede ser link de WathsApp)</code></label>
                                                                    <input class="form-control" id="inputEmailAddress" type="text"
                                                                        placeholder="Ingresar" name="burl" value="{{ $slide_data->burl}}" />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Descripción</label>
                                                                    <textarea class="form-control" name="text" placeholder="Ingresar" cols="30" rows="3" >{{ $slide_data->text }}</textarea>
                                                                </div>
                                                                <button class="btn btn-primary" type="submit">Guardar</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
