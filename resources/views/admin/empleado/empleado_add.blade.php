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
                                        <form action="{{ route('admin_empleado_store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-2">
                                                    <label for="formFile" class="form-label">Seleccione Imagen</label>
                                                    <input class="form-control" type="file" id="formFile"  name="foto" required>
                                                </div>
            
                                                <div class="col-md-2">
                                                    <label class="form-label">DNI</label>
                                                    <input class="form-control" type="number" placeholder="Ingresar" id="dni" name="dni" value="{{ old('dni') }}" required/>
                                                    <script>
                                                        var input = document.getElementById('dni');
                                                        input.addEventListener('input', function() {
                                                            if (this.value.length > 8)
                                                                this.value = this.value.slice(0, 8);
                                                        })
                                                    </script>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Area :</label>
                                                    <select class="select2 form-select" name="id_area" value="{{ old('id_area') }}" required="">
                                                        <option value="">Seleccionar</option>
                                                        @foreach ($areas_data as $row)
                                                            <option value="{{ $row->id }}">{{ $row->area }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Roles* :</label>
                                                    <select class="select2 form-select" name="rol">
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
            
                                                <div class="col-md-2">
                                                    <label class="form-label">Celular Personal :</label>
                                                    <input type="number" class="form-control" id="tel1" name="tel1" required placeholder="Ingresar" value="{{ old('tel1') }}"/>
                                                    <script>
                                                        var input = document.getElementById('tel1');
                                                        input.addEventListener('input', function() {
                                                            if (this.value.length > 9)
                                                                this.value = this.value.slice(0, 9);
                                                        })
                                                    </script>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Celular Institucional :</label>
                                                    <input type="number" class="form-control" id="tel2" name="tel2" required placeholder="Ingrese Celular Institucional" value="{{ old('tel2') }}"/>
                                                    <script>
                                                        var input = document.getElementById('tel2');
                                                        input.addEventListener('input', function() {
                                                            if (this.value.length > 9)
                                                                this.value = this.value.slice(0, 9);
                                                        })
                                                    </script>
                                                </div>
                                            </div>
            
                                            <div class="row gx-3 mb-3">
            
                                                <div class="col-md-6">
                                                    <label class="form-label">Ingresar Nombres y Apellidos                                                                                                                                                                                                                                                                                                                                                                                         :</label>
                                                    <input type="text" name="name"class="form-control text-uppercase" required placeholder="Ingresar Nombres y Apellidos" value="{{ old('name') }}"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Dirección* :</label>
                                                    <input type="text" class="form-control text-uppercase" name="address" required placeholder="Ingrese Dirección" value="{{ old('address') }}"/>
                                                </div>
                                                
                                            </div>
            
                                            <div class="row gx-3 mb-3">
            
                                                <div class="col-md-4">
                                                    <label class="form-label">Nombre de Banco :</label>
                                                    <input type="text" name="nbanco"class="form-control text-uppercase" required placeholder="Ingresar Nombre de Banco" value="{{ old('nbanco') }}">
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Numero de Cuenta* :</label>
                                                    <input type="number" class="form-control" name="ncuenta" required placeholder="Ingrese Numero de Cuenta" value="{{ old('ncuenta') }}">
                                                </div>
            
                                                <div class="col-md-2">
                                                    <label class="form-label">Contrato* :</label>
                                                    <input type="text" class="form-control" name="ncontract" required placeholder="Ingrese Contrato" value="{{ old('ncontract') }}">
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Estado Civil :</label>
                                                <select class="select2 form-select" name="ecivil" >
                                                    <option value="Conviviente">Conviviente</option>
                                                    <option value="Soltero">Soltero(a)</option>
                                                    <option value="Casado">Casado(a)</option>
                                                </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Numero de Hijos* :</label>
                                                    <input type="number" class="form-control" name="nhijos" required placeholder="Ingrese Numero de Hijos" value="{{ old('nhijos') }}">
                                                </div>
                                            </div>
            
                                            <div class="row gx-3 mb-3">
            
                                                <div class="col-md-3">
                                                    <label class="form-label">Fecha Nacimiento:</label>
                                                    <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fnaci" value="{{ old('fnaci') }}" />
                                                    
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Labora Desde:</label>
                                                    <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fin" value="{{ old('fin') }}" />
                                                </div>
            
                                                <div class="col-md-2">
                                                    <label class="form-label">Sexo :</label>
                                                <select class="select2 form-select" name="sexo" >
            
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Masculino">Masculino</option>
                                                </select>
                                                </div>
            
                                            </div>
            
                                            <div class="row gx-3 mb-3">
            
                                                <div class="col-md-6">
                                                    <label class="form-label">Email* :</label>
                                                    <input type="email" class="form-control text-lowercase" name="email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <div class="alert alert-danger">
                                                            El Email ya Existe.
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Clave* :</label>
                                                    <input type="text" class="form-control" name="password" required  placeholder="Ingrese Clave">
                                                </div>
            
            
            
            
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
      <!-- END: Content--> 


@endsection























