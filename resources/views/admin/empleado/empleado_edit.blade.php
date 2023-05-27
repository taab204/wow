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
                        <h2 class="content-header-title float-start mb-0">Empleados</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin_empleado_view') }}">Empleados</a> </li>
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
                                        <form action="{{ route('admin_empleado_update', $empleados->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Foto Existente</label>
                                                        <div class="col-sm-6">
                                                            <img src="{{ asset('uploads/' . $empleados->foto) }}" alt=""
                                                                class="img-fluid mb-3">
                                                        </div>
                                                        <label for="exampleInputFile">Ingresar Imagen* / Medidas: 570 x 415</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="foto" class="custom-file-input"
                                                                    id="exampleInputFile" value="{{ $empleados->foto }}">
                                                                <label class="custom-file-label"
                                                                    for="exampleInputFile">{{ $empleados->foto }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">DNI* :</label>
                                                        <input type="number" class="form-control" name="dni" id="dni"
                                                            placeholder="Ingrese DNI" value="{{ $empleados->dni }}">
                                                            <script>
                                                                var input = document.getElementById('dni');
                                                                input.addEventListener('input', function() {
                                                                    if (this.value.length > 8)
                                                                        this.value = this.value.slice(0, 8);
                                                                })
                                                            </script>
                                                    </div>
                                                </div>
        
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Area :</label>
                                                        <select class="select2 form-select" name="id_area">
                                                            <option value="{{ $empleados->id_area }}">
                                                                {{ $empleados->CONAREAS->area }}
                                                            </option>
                                                            @foreach ($areas as $row)
                                                                <option value="{{ $row->id }}">{{ $row->area }}</option>
                                                            @endforeach
                                                        </select>
        
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Roles* :</label>
                                                        <select class="select2 form-select" name="rol">
                                                            <option selected="{{ $empleados->rol }}">{{ $empleados->rol }}
                                                            </option>
                                                            
                                                            <option value="">Seleccionar</option>
                                                            <option value="Tecnico">Tecnico</option>
                                                            <option value="AsesorCall">Asesor Call</option>
                                                            <option value="AsesorCampo">Asesor Campo</option>
                                                            <option value="Backoffice">Backoffice</option>
                                                            <option value="Supervisor-Backoffice">Supervisor Backoffice</option>
                                                            <option value="Supervisor-Tecnico">Supervisor Tecnico</option>
                                                            <option value="Supervisor-General">Supervisor General</option>
                                                            <option value="Supervisor-Ventas">Supervisor Ventas</option>
                                                            <option value="Tesoreria">Tesoreria</option>
                                                            <option value="Almacen">Almacen</option>
                                                            <option value="Asistente">Asistente</option>
                                                            <option value="AsistenteRRHH">RRHH</option>
                                                            <option value="Administrador">Administrador</option>
                                                            <option value="SuperAdministrador">Super Administrador</option>
                                                        </select>
        
        
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Celular Personal :</label>
                                                        <input type="number" class="form-control" name="tel1" id="tel1"
                                                            placeholder="Ingrese Celular Personal" value="{{ $empleados->tel1 }}">
                                                            <script>
                                                                var input = document.getElementById('tel1');
                                                                input.addEventListener('input', function() {
                                                                    if (this.value.length > 9)
                                                                        this.value = this.value.slice(0, 9);
                                                                })
                                                            </script>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Celular Institucional :</label>
                                                        <input type="number" class="form-control" name="tel2" id="tel2"
                                                            placeholder="Ingrese Celular Institucional"
                                                            value="{{ $empleados->tel2 }}">
                                                            <script>
                                                                var input = document.getElementById('tel2');
                                                                input.addEventListener('input', function() {
                                                                    if (this.value.length > 9)
                                                                        this.value = this.value.slice(0, 9);
                                                                })
                                                            </script>
                                                    </div>
                                                </div>
        
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Ingresar Nombres y Apellidos :</label>
                                                        <input type="text" name="name"class="form-control"
                                                            placeholder="Ingresar Nombres y Apellidos"
                                                            value="{{ $empleados->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Dirección* :</label>
                                                        <input type="text" class="form-control" name="address"
                                                            placeholder="Ingrese Dirección" value="{{ $empleados->address }}">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Nombre de Banco :</label>
                                                        <input type="text" name="nbanco"class="form-control"
                                                            placeholder="Ingresar Nombre de Banco"
                                                            value="{{ $empleados->nbanco }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Numero de Cuenta* :</label>
                                                        <input type="number" class="form-control" name="ncuenta" required
                                                            placeholder="Ingrese Numero de Cuenta"
                                                            value="{{ $empleados->ncuenta }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Contrato* :</label>
                                                        <input type="text" class="form-control" name="ncontract" required
                                                            placeholder="Ingrese Contrato" value="{{ $empleados->ncontract }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Estado Civil :</label>
                                                        <select class="select2 form-select" name="ecivil">
                                                            <option selected="{{ $empleados->ecivil }}">{{ $empleados->ecivil }}
                                                            </option>
                                                            <option value="Conviviente">Conviviente</option>
                                                            <option value="Soltero">Soltero(a)</option>
                                                            <option value="Casado">Casado(a)</option>
                                                        </select>
        
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Numero de Hijos* :</label>
                                                        <input type="text" class="form-control" name="nhijos" required
                                                            placeholder="Ingrese Numero de Hijos"
                                                            value="{{ $empleados->nhijos }}">
                                                    </div>
                                                </div>
                                            </div>
        
        
        
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Fecha Nacimiento:</label>
                                                        <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fnaci" value="{{ $empleados->fnaci }}" />        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Labora Desde:</label>
                                                        <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fin" value="{{ $empleados->fin }}" />
                                                    </div>
                                                </div>
        
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Labora Fin:</label>
                                                        <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fend" value="{{ $empleados->fend }}" />
                                                    </div>
                                                </div>
        
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Sexo :</label>
                                                        <select class="select2 form-select" name="sexo">
                                                            <option selected="{{ $empleados->sexo }}">{{ $empleados->sexo }}
                                                            </option>
                                                            <option value="Femenino">Femenino</option>
                                                            <option value="Masculino">Masculino</option>
                                                        </select>
        
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label">Estado :</label>
                                                <select class="form-control" name="status">
                                                    <option selected="{{ $empleados->status }}">{{ $empleados->status }}</option>
                                                    <option value="1">Activado</option>
                                                    <option value="0">Desactivado</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email :</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="{{ $empleados->email }}">
                                                        @error('email')
                                                            <div class="alert alert-danger">
                                                                El Email ya Existe.
                                                            </div>
                                                        @enderror
        
        
                                                    </div>
                                                </div>
        
                                            </div>
        
                                            <div class="row">
        
                                                {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Clave* :</label>
                                                <input type="text" class="form-control" name="password" placeholder="Ingrese Contraseña">
        
                                            </div>
                                        </div> --}}
        
                                            </div>
        
        
        
        
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
     <!-- BEGIN: Content-->
@endsection
