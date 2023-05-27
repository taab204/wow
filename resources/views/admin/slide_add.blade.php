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
                                        <form action="{{ route('admin_slide_store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Seleccione Imagen</label>
                                                <input class="form-control" type="file" id="formFile"  name="foto" required>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Texto Botón Izquierdo</label>
                                                    <input class="form-control" type="text" placeholder="Ingresar" name="ref" value="{{ old('ref') }}" required/>
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="form-label">Texto Botón Derecho</label>
                                                    <input class="form-control" type="text" placeholder="Ingresar" name="btext" value="{{ old('btext') }}" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Ingresar URL o Link <code>(Puede ser link de WathsApp)</code></label>
                                                <input class="form-control" type="text" placeholder="Ingresar" name="burl" value="{{ old('burl') }}" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Descripción</label>
                                                <textarea data-length="500"
                                                class="form-control char-textarea"
                                                id="textarea-counter"
                                                name="text" placeholder="Ingresar" cols="30" rows="3" style="height: 100px">{{ old('text') }}</textarea>
                                                <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 500 </small>
                                            </div>
                                            <button class="btn btn-primary me-1" type="submit">Guardar</button>
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
