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
                            <li class="breadcrumb-item"><a href="{{ url('admin/asesorcampo/viewasesorcampo/' . auth()->user()->id) }}">Clientes</a> </li>
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
                                        <form action="{{ route('admin_storeasesorcampo') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
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
                                                    <div class="col-md-6">
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
                                                              <script>
                                                                var input = document.getElementById('cel');
                                                                input.addEventListener('input', function() {
                                                                    if (this.value.length > 9)
                                                                        this.value = this.value.slice(0, 9);
                                                                })
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
            
                                                    </div>
                                                </div>
            
            
                                                {{-- <div class="form-group">
                                                    <label>DNI :</label>
                                                    <input type="text" class="form-control" name="dni" placeholder="Ingresar DNI" value="{{ old('dni') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dirección :</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Ingresar Dirección" value="{{ old('address') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Referencia de la Dirección :</label>
                                                    <input type="text" class="form-control" name="raddress" placeholder="Ingresar Referencia de la Dirección" value="{{ old('raddress') }}">
                                                </div> --}}
            
                                                {{-- <div class="form-group">
                                                    <label>Ref Celular o Telef. :</label>
                                                    <input type="text" class="form-control" name="tel2" placeholder="Ingresar Ref Celular o Telef." value="{{ old('tel2') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email :</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Ingresar Email " value="{{ old('email') }}">
                                                </div>
            
            
                                                <div class="form-group">
                                                    <label>Fecha Nacimiento :</label>
                                                    <input type="text" class="form-control" name="fnaci" placeholder="Ingresar Fecha Nacimiento" value="{{ old('fnaci') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Lugar Nacimiento :</label>
                                                    <input type="text" class="form-control" name="lnaci" placeholder="Ingresar Lugar Nacimiento" value="{{ old('lnaci') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nombre de Padre :</label>
                                                    <input type="text" class="form-control" name="np" placeholder="Ingresar Nombre de Padre" value="{{ old('np') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nombre de Madre :</label>
                                                    <input type="text" class="form-control" name="nm" placeholder="Ingresar Nombre de Madre" value="{{ old('nm') }}">
                                                </div> --}}
            
                                                            {{-- <div class="form-group">
                                                <label for="exampleInputFile">Ingresar Imagen DNI</label>
                                                <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="foto1" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Buscar Imagen</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Ingresar Imagen Recibo Luz Agua</label>
                                                <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="foto2" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Buscar Imagen</label>
                                                </div>
                                                </div>
                                            </div> --}}
            
                                                <div class="mb-3">
                                                    <label class="form-label">Seleccionar Plan</label>
                                                    <select class="select2 form-select" name="id_plan" value="{{ old('id_plan') }}" required>
                                                        <option value="">Seleccione</option>
                                                        {{-- <option value="{{ $planes->id_plan }}">{{ $planes->RELPLAN->plan}}</option> --}}
                                                        @foreach ($planes as $plan)
                                                            <option value="{{ $plan->id }}">{{ $plan->plan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
            
                                                {{-- <div class="form-group">
                                                    <label>Codigo Instalación :</label>
                                                    <input type="text" class="form-control" name="codinst" required
                                                        placeholder="Ingrese Codigo Instalación" value="{{ old('codinst') }}">
                                                </div>
            
                                                        <!-- Date dd/mm/yyyy -->
                                                    <div class="form-group">
                                                        <label>Fecha Instalación:</label>
                                                        <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="finst" value="{{ old('finst') }}">
                                                        </div>
                                                        <!-- /.input group -->
                                                    </div>
                                                    <!-- /.form group -->
            
            
                                                <div class="form-group">
                                                    <label>Estado :</label>
                                                    <select class="form-control" name="id_estado">
                                                        <option value="1">Seleccionar</option>
                                                        @foreach ($estados as $estado)
                                                            <option value="{{ $estado->id }}">{{ $estado->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                    --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Observación</label>
                                                    <textarea id="postEditor" name="obs" class="form-control text-uppercase" placeholder="Ingresar Observación o dejar en blanco" cols="30" rows="3" value="{{ old('obs') }}"></textarea>
                                                    
                                                </div>
            
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="id_admin" value="{{ auth()->user()->id }}">
                                                </div>
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




