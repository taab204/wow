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
                            <li class="breadcrumb-item"><a href="{{ route('admin_daterobackoffice_view') }}">Clientes</a> </li>
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
                                    <!-- Account details card-->
                                    <div class="card mb-4">
                                        <div class="card-header text-center"></div>
                                        <div class="card-body">
                                            <div class="accordion accordion-margin" id="accordionMargin">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingMarginOne">
                                                      <button
                                                        class="accordion-button collapsed "
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordionMarginOne"
                                                        aria-expanded="false"
                                                        aria-controls="accordionMarginOne"
                                                      >
                                                      <h1>Información</h1>
                                                      </button>
                                                    </h2>
                                                    <div id="accordionMarginOne" class="accordion-collapse collapse" aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
                                                      <div class="accordion-body">
                                                        <label>Informante Sr(a) :&nbsp;</label> {{ $datero_data->dname }}
                                                            &nbsp;&nbsp;
                                                            <label>Su Celular :&nbsp;</label> {{ $datero_data->dcel }} &nbsp;&nbsp;
                                                            <label>Registro Fecha / Hora :&nbsp;</label>
                                                            {{ $datero_data->created_at }}
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                            
                                            <form action="{{ route('admin_daterobackoffice_update', $datero_data->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">

                                                    
            
            
            
                                                    <div class="row">
                                                        
                                                        {{-- <div class="col-md-1">
                                                            <div class="form-group">
                                                                <label class="form-label">Tipo *:</label>
                                                                <select
                                                                    class="form-control  select2-container--bootstrap select2-search--dropdown  select2-search__field"
                                                                    name="tipo_doc" required="" id="tipo_doc">
                                                                    <option value="1">DNI</option>
                                                                    <option value="2">RUC</option>
                                                                </select>
                                                            </div>
                                                        </div> --}}
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label">DNI :</label>
                                                                <input type="number" name="dni"class="form-control" id="dni"
                                                                    placeholder="Ingresar" value="{{ $datero_data->dni }}">
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
                                                                <label class="form-label">Nonbre y Apellido </label>
                                                                <input type="text" name="name"class="form-control text-uppercase"
                                                                    placeholder="Ingresar" value="{{ $datero_data->name }}">
                                                            </div>
                                                        </div>
            
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label">Celular </label>
                                                                <input type="text" name="cel"class="form-control" id="cel"
                                                                    placeholder="Ingresar" value="{{ $datero_data->cel }}">
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
                                                                <label class="form-label">Otro Celular</label>
                                                                <input type="text" name="cel2"class="form-control" id="cel2"
                                                                    placeholder="Ingresar" value="{{ $datero_data->cel2 }}">
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
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Dirección </label>
                                                                <input type="text" name="direc"class="form-control text-uppercase"
                                                                    placeholder="Ingresar" value="{{ $datero_data->direc }}">
                                                            </div>
            
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Direccion Referencia </label>
                                                                <input type="text" name="dref"class="form-control text-uppercase"
                                                                    placeholder="Ingresar" value="{{ $datero_data->dref }}">
                                                            </div>
            
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Email </label>
                                                                <input type="text" name="email"class="form-control text-lowercase"
                                                                    placeholder="Ingresar"value="{{ $datero_data->email }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Editar Nombre Padre:</label>
                                                            <input type="text" name="np"class="form-control"
                                                                placeholder="Ingresar " value="{{ $datero_data->np }}">
                                                        </div>
            
            
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Editar Nombre Madre:</label>
                                                            <input type="text" name="nm"class="form-control" placeholder="Ingresar " value="{{ $datero_data->nm }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Editar Lugar Nacimiento :</label>
                                                            <input type="text" name="lnac"class="form-control"
                                                                placeholder="Ingresar Lugar Nacimiento"
                                                                value="{{ $datero_data->lnac }}">
                                                        </div>
                                                    </div> --}}
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Fecha Nacimiento </label>
                                                            <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fnac" value="{{ $datero_data->fnac }}" />
                                                            
                                                        </div>
            
                                                        <div class="col-md-2">
                                                            <label class="form-label">Departamento </label>
                                                            <select class="form-select select2" name="depart" id="depart">
                                                                <option value="{{ $datero_data->depart }}"> {{ $datero_data->RELDEPARTAMENTO->nom_dep }}</option>
                                                                @foreach ($depart_backoffice as $row)
                                                                    <option value="{{ $row->id }}">{{ $row->nom_dep }}</option>
                                                                @endforeach
                                                            </select>
            
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Provincia</label>
                                                            <select class="form-select select2" name="provin" id="provin">
                                                                <option value="{{ $datero_data->provin }}">{{ $datero_data->RELPROVINCIA->nom_pro }}</option>
                                                                @foreach ($provin_backoffice as $row)
                                                                    <option value="{{ $row->id }}">{{ $row->nom_pro }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Editar Distrito</label>
                                                            <input type="text" name="distri"class="form-control text-uppercase"
                                                                placeholder="Ingresar " value="{{ $datero_data->distri }}">
                                                        </div>
                                                    </div>
            
            
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label class="form-label">Plan Seleccionado</label>
                                                            <select class="form-select select2" name="id_plan">
                                                                <option value="{{ $datero_data->id_plan }}">
                                                                    {{ $datero_data->CON->plan }} </option>
                                                                @foreach ($planes_backoffice as $planes)
                                                                    <option value="{{ $planes->id }}">{{ $planes->plan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label">Estado </label>
                                                            <select class="form-select select2" name="id_estado" id="id_estado">
                                                                <option value="{{ $datero_data->id_estado }}">
                                                                    {{ $datero_data->RELESTADO->name }}</option>
                                                                @foreach ($estados_backoffice as $estado)
                                                                    <option value="{{ $estado->id }}">{{ $estado->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
            
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Codigo Cliente</label>
                                                                <input type="number" name="codinst"class="form-control" disabled
                                                                    placeholder="Ingresar Codigo Cliente"
                                                                    value="{{ $datero_data->codinst }}" id="codinst">
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group">
                                                        <label class="form-label">Observación</label>
                                                        <textarea id="postEditor" name="obs" class="form-control text-uppercase" placeholder="Ingresar" cols="30"
                                                            rows="3">{{ $datero_data->obs }}</textarea>
                                                    </div>
                                                    <br>
                                                    <label class="form-label">
                                                        <h1>Modificar Archivos :</h1>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <label class="form-label">Foto DNI Frontal </label>
                                                            <input class="form-control" type="file" id="formFile" name="fdni" value="{{ $datero_data->fdni }}">
                                                        </div>
            
                                                        <div class="col-xl-4">
                                                            <label class="form-label">Foto DNI Posterior </label>
                                                            <input class="form-control" type="file" id="formFile" name="fdni1"value="{{ $datero_data->fdni1 }}">
                                                        </div>
            
                                                        <div class="col-xl-4">
                                                            <label class="form-label">Foto Recibo Luz o Agua </label>
                                                            <input class="form-control" type="file" id="formFile" name="frecib"value="{{ $datero_data->frecib }}">
                                                        </div>
            
            
                                                        <div class="col-xl-4">
                                                            <label class="form-label">Evaluación </label>
                                                            <input class="form-control" type="file" id="formFile" name="ceval"value="{{ $datero_data->ceval }}">
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label class="form-label">Grabación .Wav</label>
                                                            <input class="form-control" type="file" id="formFile" name="grab"value="{{ $datero_data->grab }}">
                                                        </div>
            
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Registar Tratamiento</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card mb-4 mb-xl-0">
                                        <div class="card-header">Galeria de Fotos de DNI, Recibo: y Grabación</div>
                                        <div class="card-body text-center">
                                            <div class="card-header">Foto DNI Frontal
                                                <div class="avatar me-2">
                                                    <a href="{{ asset('uploads/datero/' . $datero_data->fdni) }}" target="_blank">
                                                    <img src="{{ asset('uploads/datero/' . $datero_data->fdni) }}"
                                                        id="account-upload-img" class="uploadedAvatar rounded "
                                                        alt="profile image" height="100" width="100" />
                                                    </a>
                                                </div>
                                            </div>
                                            <br>
            
            
            
                                            <div class="card-header">Foto DNI Posterior
                                                <div class="avatar me-2">
                                                    <a href="{{ asset('uploads/datero/' . $datero_data->fdni1) }}" target="_blank">
                                                    <img src="{{ asset('uploads/datero/' . $datero_data->fdni1) }}"
                                                        id="account-upload-img" class="uploadedAvatar rounded "
                                                        alt="profile image" height="100" width="100" />
                                                    </a>
                                                </div>
                                                    
                                            </div>
                                            <br>
            
            
                                            <div class="card-header">Foto Recibo Luz o Agua
                                                <div class="avatar me-2">
                                                    <a href="{{ asset('uploads/datero/' . $datero_data->frecib) }}" target="_blank">
                                                    <img src="{{ asset('uploads/datero/' . $datero_data->frecib) }}"
                                                        id="account-upload-img" class="uploadedAvatar rounded "
                                                        alt="profile image" height="100" width="100" />
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <br>
            
            
                                            <div class="card-header">Foto Evaluación
                                                <div class="avatar me-2">
                                                    <a href="{{ asset('uploads/datero/' . $datero_data->ceval) }}" target="_blank">
                                                    <img src="{{ asset('uploads/datero/' . $datero_data->ceval) }}"
                                                        id="account-upload-img" class="uploadedAvatar rounded "
                                                        alt="profile image" height="100" width="100" />
                                                    </a>
                                                </div>
                                            </div>
                                            <br>
            
            
                                            <div class="card-header">Grabación
            
                                                <audio controls>
                                                    <source src="{{ asset('uploads/datero/' . $datero_data->grab) }}"
                                                        type="audio/ogg">
                                                </audio>
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
     <!-- BEGIN: Content-->
@endsection
