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
                                <li class="breadcrumb-item"><a href="{{ url('admin/asesorcall/viewasesorcall/' . auth()->user()->id) }}">Clientes</a> </li>
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
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="row">
            
                                        <div class="col-xl-12">
                                            <!-- Account details card-->
                                            <div class="card mb-4">
                                                <div class="card-header text-center">
                                                    <h1>Detalles</h1></div>
                                                <div class="card-body">
                                                    <form action="{{ route('admin_updateasesorcall', $cliente_ecall->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label">DNI </label>
                                                                        <input type="number" class="form-control" name="dni" id="dni"
                                                                            placeholder="Ingrese DNI" value="{{ $cliente_ecall->dni }}">
                                                                            <script>
                                                                                var input = document.getElementById('dni');
                                                                                input.addEventListener('input', function() {
                                                                                    if (this.value.length > 8)
                                                                                        this.value = this.value.slice(0, 11);
                                                                                })
                                                                            </script>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Nombres y Apellidos </label>
                                                                        <input type="text" name="name"class="form-control text-uppercase"
                                                                            placeholder="Ingrese Nombres y Apellidos"
                                                                            value="{{ $cliente_ecall->name }}">
                                                                    </div>
            
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Celular </label>
                                                                        <input type="number" class="form-control" name="cel" id="cel"
                                                                            placeholder="Ingrese Celular "
                                                                            value="{{ $cliente_ecall->cel }}">
                                                                            <script>
                                                                                var input = document.getElementById('cel');
                                                                                input.addEventListener('input', function() {
                                                                                    if (this.value.length > 9)
                                                                                        this.value = this.value.slice(0, 9);
                                                                                })
                                                                            </script>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Celular Opcional </label>
                                                                        <input type="number" class="form-control" name="cel2" id="cel2"
                                                                            placeholder="Ingrese Celular Opcional"
                                                                            value="{{ $cliente_ecall->cel2 }}">
                                                                            <script>
                                                                                var input = document.getElementById('cel2');
                                                                                input.addEventListener('input', function() {
                                                                                    if (this.value.length > 9)
                                                                                        this.value = this.value.slice(0, 9);
                                                                                })
                                                                            </script>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Direccion </label>
                                                                        <input type="text" class="form-control text-uppercase" name="direc"
                                                                            placeholder="Ingrese Dirección"
                                                                            value="{{ $cliente_ecall->direc }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Referencia de la Dirección </label>
                                                                        <input type="text" class="form-control text-uppercase" name="dref"
                                                                            placeholder="Ingrese Referencia de la Dirección"
                                                                            value="{{ $cliente_ecall->dref }}">
                                                                    </div>
            
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Email </label>
                                                                        <input type="text" class="form-control text-lowercase" name="email"
                                                                            placeholder="Ingrese Email"
                                                                            value="{{ $cliente_ecall->email }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label class="form-label" for="fp-default">Fecha Nacimiento</label>
                                                                    <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fnac" value="{{ $cliente_ecall->fnac }}" />
                                                                  
                                                                </div>
                                                                
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Departamento</label>
                                                                    <select class="select2 form-select" name="depart" id="depart">
                                                                        <option value="{{ $cliente_ecall->depart }}"> {{ $cliente_ecall->RELDEPARTAMENTO->nom_dep }}</option>
                                                                        @foreach ($depart_ecall as $row)
                                                                            <option value="{{ $row->id }}">{{ $row->nom_dep }} </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Provincia</label>
                                                                    <select class="select2 form-select" name="provin" id="provin">
                                                                        <option value="{{ $cliente_ecall->provin }}"> {{ $cliente_ecall->RELPROVINCIA->nom_pro }}</option>
                                                                        @foreach ($provin_ecall as $row)
                                                                            <option value="{{ $row->id }}">{{ $row->nom_pro }} </option>
                                                                        @endforeach
                                                                    </select>
            
            
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Distrito</label>
                                                                        <input type="text" name="distri"class="form-control text-uppercase"
                                                                            placeholder="Ingresar "
                                                                            value="{{ $cliente_ecall->distri }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Seleccionar Plan</label>
                                                                        <select class="select2 form-select" name="id_plan" required>
                                                                            <option value="{{ $cliente_ecall->id_plan }}" disabled>
                                                                                {{ $cliente_ecall->RELPLAN->plan }}</option>
                                                                            @foreach ($planes as $row)
                                                                                <option value="{{ $row->id }}">
                                                                                    {{ $row->plan }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
            
                                                                <div class="col-md-4">
                                                                        <label class="form-label">Estado</label>
                                                                        <select class="select2 form-select" name="id_estado" required>
                                                                            <option value="{{ $cliente_ecall->id_estado }}" disabled>
                                                                                {{ $cliente_ecall->RELESTADO->name }} </option>
                                                                            @foreach ($estados as $row)
                                                                                <option value="{{ $row->id }}">
                                                                                    {{ $row->name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
            
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Observación</label>
                                                                <textarea id="postEditor"  class="form-control text-uppercase" name="obs" placeholder="Ingresar Observación o dejar en blanco" cols="30" rows="3"> {{ $cliente_ecall->obs }}</textarea>
                                                            </div>
                                                            <br>
                                                            <label class="form-label">
                                                                <h1>Archivos : Fotos de DNI, Recibo, Grabación y Evalucación :</h1>
                                                            </label>
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <label class="form-label">Foto DNI Frontal </label>
                                                                    <input class="form-control" type="file" id="formFile" name="fdni" value="{{ $cliente_ecall->fdni }}">
                                                                </div>
            
                                                                <div class="col-xl-4">
                                                                    <label class="form-label">Foto DNI Posterior </label>
                                                                    <input class="form-control" type="file" id="formFile" name="fdni1" value="{{ $cliente_ecall->fdni1 }}">
                                                                </div>
            
                                                                <div class="col-xl-4">
                                                                    <label class="form-label">Foto Recibo Luz o Agua </label>
                                                                    <input class="form-control" type="file" id="formFile" name="frecib" value="{{ $cliente_ecall->frecib }}">
                                                                </div>
            
            
                                                                <div class="col-xl-4">
                                                                    <label class="form-label">Evaluación </label>
                                                                    <input class="form-control" type="file" id="formFile" name="ceval" value="{{ $cliente_ecall->ceval }}">
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <label class="form-label">Grabación .Wav</label>
                                                                    <input class="form-control" type="file" id="formFile" name="grab" value="{{ $cliente_ecall->grab }}">
                                                                </div>
            
                                                            </div>
                                                            <br>
            
                                                            <button type="submit" class="btn btn-primary">Actualizar</button>
            
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card mb-4 mb-xl-0">
            
            
            
                                        <div class="card-header"><h3>Galeria de Fotos de DNI, Recibo: y Grabación</h1></div>
                                        <div class="card-body text-center">
                                            <div class="card-header">Foto DNI Frontal
                                                <a href="{{ asset('uploads/datero/' . $cliente_ecall->fdni) }}" target="_blank"><img
                                                        class="img-account-profile rounded"
                                                        src="{{ asset('uploads/datero/' . $cliente_ecall->fdni) }}"
                                                        alt="" height="100" width="100"/></a>
                                            </div>

                                            <br>
            
            
            
                                            <div class="card-header">Foto DNI Posterior
            
                                                <a href="{{ asset('uploads/datero/' . $cliente_ecall->fdni1) }}" target="_blank"><img
                                                        class="img-account-profile rounded"
                                                        src="{{ asset('uploads/datero/' . $cliente_ecall->fdni1) }}"
                                                        alt="" height="100" width="100"/></a>
                                            </div>
                                            <br>
            
            
                                            <div class="card-header">Foto Recibo Luz o Agua
                                                <a href="{{ asset('uploads/datero/' . $cliente_ecall->frecib) }}"
                                                    target="_blank"><img class="img-account-profile rounded"
                                                        src="{{ asset('uploads/datero/' . $cliente_ecall->frecib) }}"
                                                        alt="" height="100" width="100" /></a>
                                            </div>
                                            <br>
            
            
                                            <div class="card-header">Foto Evaluación
                                                <a href="{{ asset('uploads/datero/' . $cliente_ecall->ceval) }}" target="_blank"><img
                                                        class="img-account-profile rounded"
                                                        src="{{ asset('uploads/datero/' . $cliente_ecall->ceval) }}"
                                                        alt="" height="100" width="100"/></a>
                                            </div>
                                            <br>
            
            
                                            <div class="card-header">Grabación
            
                                                <audio controls>
                                                    <source src="{{ asset('uploads/datero/' . $cliente_ecall->grab) }}"
                                                        type="audio/ogg">
                                                </audio>
                                            </div>
                                        </div>
                                        <!-- Profile picture help block-->
            
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
