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
                            <li class="breadcrumb-item"><a href="{{ route('admin_cliente_view') }}">Clientes</a> </li>
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
                                        <form action="{{ route('admin_cliente_store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- <div class="col-md-1">
                                                        <div class="form-group">
                                                        <label class="small mb-1">Tipo</label>
                                                            <select
                                                                class="form-control  select2-container--bootstrap select2-search--dropdown  select2-search__field"
                                                                name="tipo_doc" required="" id="tipo_doc">
                                                                <option value="1">DNI</option>
                                                                <option value="2">RUC</option>
                                                            </select>
            
                                                        </div>
            
                                                    </div> -->
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Numero DNI</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='edit-2'></i></span>
                                                                <input
                                                                  type="number"
                                                                  class="form-control"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  id="dni"
                                                                  name="dni"
                                                                  value="{{ old('dni') }}"
                                                                  required=""
                                                                />
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nombres y Apellidos</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='user'></i></span>
                                                                <input
                                                                  type="text"
                                                                  class="form-control text-uppercase"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  name="name"
                                                                  value="{{ old('name') }}"
                                                                  required=""
                                                                />
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Celular</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='phone'></i></span>
                                                                <input
                                                                  type="number"
                                                                  class="form-control"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  id="cel"
                                                                  name="cel"
                                                                  value="{{ old('cel') }}"
                                                                  required=""
                                                                />
                                                              </div>
                                                        </div>
            
                                                    </div>
                                                    <div class="col-md-2">

                                                        <div class="form-group">
                                                            <label class="form-label">Celular Opcional</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='phone'></i></span>
                                                                <input
                                                                  type="number"
                                                                  class="form-control"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  id="cel2"
                                                                  name="cel2"
                                                                  value="{{ old('cel2') }}"
                                                                  required=""
                                                                />
                                                              </div>
                                                        </div>

                                                        
                                                    </div>
                                                </div>
            
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Dirección</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='map-pin'></i></span>
                                                                <input
                                                                  type="text"
                                                                  class="form-control text-uppercase"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  name="direc"
                                                                  value="{{ old('direc') }}"
                                                                  required=""
                                                                />
                                                              </div>
                                                        </div>
            
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Referencia de la Dirección</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='map-pin'></i></span>
                                                                <input
                                                                  type="text"
                                                                  class="form-control text-uppercase"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  name="dref"
                                                                  value="{{ old('dref') }}"
                                                                />
                                                              </div>
                                                        </div>

                                                        
                                                    </div>
                                                </div>
            
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Email</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='at-sign'></i></span>
                                                                <input
                                                                  type="email"
                                                                  class="form-control text-lowercase"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  name="email"
                                                                  value="{{ old('email') }}"
                                                                  required=""
                                                                />
                                                              </div>
                                                        </div>
            
                                                    </div>
            
                                                    <div class="col-md-2">
                                                        <label class="form-label">Fecha Nacimiento </label>
                                                        
                                                            <div class="input-group input-group-joined">
                                                                <span class="input-group-text">
                                                                    <i data-feather="calendar"></i>
                                                                </span>
                                                                <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fnac" value="{{ old('fnac') }}" />
                                                            </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Lugar Nacimiento</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='map-pin'></i></span>
                                                                <input
                                                                  type="text"
                                                                  class="form-control text-uppercase"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  name="lnac"
                                                                  value="{{ old('lnac') }}"
                                                                />
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Nombre Padre</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='user'></i></span>
                                                                <input
                                                                  type="text"
                                                                  class="form-control text-uppercase"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  name="np"
                                                                  value="{{ old('np') }}"
                                                                />
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Nombre Madre</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon5"><i data-feather='user'></i></span>
                                                                <input
                                                                  type="text"
                                                                  class="form-control text-uppercase"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Username"
                                                                  aria-describedby="basic-addon5"
                                                                  name="nm"
                                                                  value="{{ old('nm') }}"
                                                                />
                                                              </div>
                                                        </div>
            
                                                    </div>
                                                </div>
            
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label class="form-label">Departamento :</label>
                                                        <select class="select2 form-select" name="depart" value="{{ old('depart') }}" required id="select-departamento">
                                                            <option value="">Seleccione</option>
                                                            @foreach ($depart_cliente as $row)
                                                                <option value="{{ $row->id }}">{{ $row->nom_dep }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-md-3">
                                                                <label for="exampleInputEmail1">Provincia</label>
                                                                <select class="form-select" name="provin" value="{{ old('provin') }}" required id="provincia">
                                                                    <option value="">Seleccione</option>
                                                                    
                                                                </select>
                                                        </div> -->
                                                    
            
                                                        <div class="col-md-3">
                                                                <label class="form-label">Provincia</label>
                                                                <select class="select2 form-select" name="provin" value="{{ old('provin') }}" required id="provincia">
                                                                    <option value="">Seleccione</option>
                                                                    @foreach ($provin_cliente as $row)
                                                                        <option value="{{ $row->id }}">{{ $row->nom_pro }} </option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
            
                                                        <div class="col-md-3">
                                                            <label class="form-label">Distrito</label>
                                                            <input type="text" class="form-control" name="distri" placeholder="INGRESAR" value="{{ old('distri') }}">
                                                            <!-- <select class="form-select" name="distri" value="{{ old('distri') }}"required id="_distrito"></select> -->
            
                                                        </div> 
            
                                                   
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Seleccionar Plan</label>
                                                                <select class="select2 form-select" name="id_plan" value="{{ old('id_plan') }}" required>
                                                                    <option value="">Seleccionar</option>
                                                                    {{-- <option value="{{ $planes->id_plan }}">{{ $planes->RELPLAN->plan}}</option> --}}
                                                                    @foreach ($planes as $plan)
                                                                        <option value="{{ $plan->id }}">{{ $plan->plan }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
            
                                                    </div>
                                                    </div>
                                                    <div class="row">
            
                                                    {{-- <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Estado :</label>
                                                            <select class="form-select" name="id_estado" value="{{ old('id_estado') }}" required>
                                                                <option value="">Seleccionar</option>
                                                                @foreach ($estados as $estado)
                                                                    <option value="{{ $estado->id }}">{{ $estado->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
            
                                                    </div> --}}
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Cod. Instalación</label>
                                                            <div class="input-group input-group-merge mb-2">
                                                                <span class="input-group-text" id="basic-addon-search2"><i data-feather='key'></i></span>
                                                                <input
                                                                  type="number"
                                                                  class="form-control"
                                                                  placeholder="INGRESAR"
                                                                  aria-label="Search..."
                                                                  aria-describedby="basic-addon-search2"
                                                                  name="codinst"
                                                                  value="{{ old('codinst') }}"
                                                                />
                                                              </div>
                                                        </div>
            
                                                    </div>
                                                    <div class="col-md-4">
                                                        

                                                        <div class="form-group">
                                                            <label class="form-label">Fecha Instalación</label>

                                                            <div class="input-group input-group-joined">
                                                                <span class="input-group-text">
                                                                    <i data-feather="calendar"></i>
                                                                </span>
                                                                <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="finst" value="{{ old('finst') }}" />
                                                            </div>

                                                           
            
                                                            
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Asignar Asesor</label>
                                                            <select class="select2 form-select" name="id_admin" value="{{ old('id_admin') }}" required>
                                                                <option value="">Seleccionar</option>
                                                                @foreach ($admins as $empleado)
                                                                    <option value="{{ $empleado->id }}">{{ $empleado->name }}  -  {{ $empleado->rol }}</option>
                                                                @endforeach
                                                            </select>
            
                                                        </div>
            
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Observación</label>
                                                    <textarea name="obs" class="form-control text-uppercase" placeholder="INGRESAR" cols="30" rows="3" value="{{ old('obs') }}"></textarea>
                                                </div>
                                                <br>
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

