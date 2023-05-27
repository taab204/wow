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
                        <h2 class="content-header-title float-start mb-0">Tecnico</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin_slide_view') }}">Tecnico</a> </li> --}}
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
                                        <form action="{{ route('admin_datero_storetec') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label>DNI (Referido) *:</label>
                                        <input type="number" class="form-control" name="dni" required maxlength="8" placeholder="Ingrese DNI (Referido)" value="{{ old('dni') }}">

                                    </div>
                                </div> --}}

                                        <div class="col-md-1">

                                            <label class="small mb-1">Tipo</label>
                                            <select class="form-select" name="tipo_doc" value="{{ old('tipo_doc') }}" required>
                                                {{-- <option value="">Seleccione</option>
                                                @foreach ($depart_tecnico as $row)
                                                    <option value="{{ $row->id }}">{{ $row->nom_dep }} </option>
                                                @endforeach --}}
                                                <option value="1">DNI</option>
                                                <option value="2">RUC</option>

                                            </select>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="small mb-1">Numero Documento</label>
                                                <input type="number" class="form-control" name="dni" id="dni"
                                                    placeholder="Ingrese" value="{{ old('dni') }}" required>
                                                <script>
                                                    var input = document.getElementById('dni');
                                                    input.addEventListener('input', function() {
                                                        if (this.value.length > 8)
                                                            this.value = this.value.slice(0, 11);
                                                    })
                                                </script>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="small mb-1">Celular</label>
                                                <input type="number" class="form-control" name="cel" required
                                                    placeholder="Ingresar Celular (Referido)" value="{{ old('cel') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-1">Correo Electronico</label>
                                                <input type="email" class="form-control" name="email" required
                                                    placeholder="Ingresar Correo Electronico (Referido)"
                                                    value="{{ old('email') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <label class="small mb-1">Seleccione plan</label>
                                            <select class="form-select" name="id_plan" value="{{ old('id_plan') }}" required>
                                                <option value="">Seleccione</option>
                                                @foreach ($planes as $row)
                                                    <option value="{{ $row->id }}">{{ $row->plan }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Nombres y Apellidos</label>
                                                <input type="text" name="name"class="form-control"
                                                    placeholder="Ingresar Nombres y Apellidos (Referido)"
                                                    value="{{ old('name') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Dirección</label>
                                                <input type="text" name="direc"class="form-control"
                                                    placeholder="Ingresar Dirección (Referido)" value="{{ old('direc') }}" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1"> Referencia Dirección</label>
                                                <input type="text" name="dref"class="form-control"
                                                    placeholder="Ingresar Referencia Dirección (Referido)"
                                                    value="{{ old('dref') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="small mb-1">Departamento :</label>
                                            <select class="form-select" name="depart" value="{{ old('depart') }}" required>
                                                <option value="">Seleccione</option>
                                                @foreach ($depart_tecnico as $row)
                                                    <option value="{{ $row->id }}">{{ $row->nom_dep }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">

                                            <label class="small mb-1">Provincia</label>
                                            <select class="form-select" name="provin" value="{{ old('provin') }}" required>
                                                <option value="">Seleccione</option>
                                                @foreach ($provin_tecnico as $row)
                                                    <option value="{{ $row->id }}">{{ $row->nom_pro }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Provincia</label>
                                                <input type="text" name="distri"class="form-control"
                                                    placeholder="Ingresar" value="{{ old('distri') }}">
                                            </div>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="small mb-1">Celular Opcional</label>
                                                <input type="number" class="form-control" name="cel2"
                                                    placeholder="Ingresar " value="{{ old('cel2') }}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xl-4">
                                            <label class="small mb-1">Foto DNI Frontal </label>
                                            <input class="form-control" type="file" id="formFile" name="fdni" title="Solo Foto">
                                        </div>
                                        <div class="col-xl-4">
                                            <label class="small mb-1">Foto DNI Posterior </label>
                                            <input class="form-control" type="file" id="formFile" name="fdni1" title="Solo Foto">
                                        </div>
                                        <div class="col-xl-4">
                                            <label class="small mb-1">Foto Recibo Luz o Agua </label>
                                            <input class="form-control" type="file" id="formFile" name="frecib" title="Solo Foto">
                                        </div>

                                        {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto DNI Delante (Referido) *:</label>
                                        <input type="file"  capture="camera" name="fdni" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto DNI Atras (Referido) *:</label>
                                        <input type="file"  capture="camera" name="fdni1" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Recibo Luz o Agua (Referido) *:</label>
                                        <input type="file"  capture="camera" name="frecib" >
                                    </div>
                                </div> --}}


                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="dname"
                                            value="{{ auth()->user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="dcel"
                                            value="{{ auth()->user()->tel1 }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_admin"
                                            value="{{ auth()->user()->id }}">
                                    </div>
                                    <br>








                                    <button type="submit" class="btn btn-primary">Guardar</button>
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
