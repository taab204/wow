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
                                    <li class="breadcrumb-item"><a href="{{ route('admin_cliente_view') }}">Clientes</a>
                                    </li>
                                    <li class="breadcrumb-item active">Editar </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">

                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="me-1"
                                        data-feather="check-square"></i><span class="align-middle">Todo</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1"
                                        data-feather="message-square"></i><span class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a>
                                <a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Agengas</span></a>
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
                                <div class="card-header text-center">Detalles</div>
                                <div class="card-body">
                                    <form action="{{ route('admin_cliente_update', $cliente_data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                {{-- <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label class="form-label-outside" for="form-1-name">Tipo *:</label>
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
                                                        <label class="form-label">Numero DNI</label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='edit-2'></i></span>
                                                            <input type="number" class="form-control"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" id="dni"
                                                                name="dni" value="{{ $cliente_data->dni }}"
                                                                required="" />
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nombres y Apellidos </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='user'></i></span>
                                                            <input type="text" class="form-control text-uppercase"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" name="name"
                                                                value="{{ $cliente_data->name }}" required="" />
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Celular </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='phone'></i></span>
                                                            <input type="number" class="form-control"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" id="cel"
                                                                name="cel"
                                                                value="{{ $cliente_data->cel }}"
                                                              required="" />
                                                        </div>


                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Celular Opcional </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='phone'></i></span>
                                                            <input type="number" class="form-control"
                                                                placeholder="INGRESAR" 
                                                                aria-label="Username"
                                                                aria-describedby="basic-addon5" id="cel2"
                                                                name="cel2" value="{{ $cliente_data->cel2 }}"
                                                                required="" />
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Direccion </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='map-pin'></i></span>
                                                            <input type="text" class="form-control text-uppercase"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" name="direc"
                                                                value="{{ $cliente_data->direc }}" required="" />
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Referencia de la Dirección </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='map-pin'></i></span>
                                                            <input type="text" class="form-control text-uppercase"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" name="dref"
                                                                value="{{ $cliente_data->dref }}" />
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Email </label>

                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='at-sign'></i></span>
                                                            <input type="email" class="form-control text-lowercase"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" name="email"
                                                                value="{{ $cliente_data->email }}" required="" />
                                                        </div>


                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Fecha Nacimiento </label>
                                                        <div class="input-group input-group-joined">
                                                            <span class="input-group-text">
                                                                <i data-feather="calendar"></i>
                                                            </span>
                                                            <input type="text" id="fp-default"
                                                                class="form-control flatpickr-basic"
                                                                placeholder="YYYY-MM-DD" name="fnac"
                                                                value="{{ $cliente_data->fnac }}" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Lugar Nacimiento </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='map-pin'></i></span>
                                                            <input type="text" class="form-control text-uppercase"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" name="lnac"
                                                                value="{{ $cliente_data->lnac }}" />
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Nombre Padre </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='user'></i></span>
                                                            <input type="text" class="form-control text-uppercase"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" name="np"
                                                                value="{{ $cliente_data->np }}" />
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Nombre Madre </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon5"><i
                                                                    data-feather='user'></i></span>
                                                            <input type="text" class="form-control text-uppercase"
                                                                placeholder="INGRESAR" aria-label="Username"
                                                                aria-describedby="basic-addon5" name="nm"
                                                                value="{{ $cliente_data->nm }}" />
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="form-label">Departamento </label>
                                                    <select class="select2 form-select" name="depart" id="depart">
                                                        <option value="{{ $cliente_data->depart }}">
                                                            {{ $cliente_data->RELDEPARTAMENTO->nom_dep }}</option>
                                                        @foreach ($depart_cliente as $row)
                                                            <option value="{{ $row->id }}">{{ $row->nom_dep }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Provincia </label>


                                                        <select class="select2 form-select" name="provin"
                                                            id="provin">
                                                            <option value="{{ $cliente_data->provin }}">
                                                                {{ $cliente_data->RELPROVINCIA->nom_pro }}</option>
                                                            @foreach ($provin_cliente as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->nom_pro }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Distrito </label>
                                                        <input type="text" name="distri"class="form-control"
                                                            placeholder="Ingresar "
                                                            value="{{ old('distri') }}{{ $cliente_data->distri }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Plan Seleccionado :</label>
                                                        <select class="select2 form-select" name="id_plan">
                                                            <option value="{{ $cliente_data->id_plan }}">
                                                                {{ $cliente_data->RELPLAN->plan }}</option>
                                                            @foreach ($planes as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->plan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Estado </label>
                                                        <select class="select2 form-select" name="id_estado">
                                                            <option value="{{ $cliente_data->id_estado }}">
                                                                {{ $cliente_data->RELESTADO->name }} </option>
                                                            @foreach ($estados as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Cod. Instalación </label>
                                                        <div class="input-group input-group-merge mb-2">
                                                            <span class="input-group-text" id="basic-addon-search2"><i
                                                                    data-feather='key'></i></span>
                                                            <input type="number" class="form-control"
                                                                placeholder="INGRESAR" aria-label="Search..."
                                                                aria-describedby="basic-addon-search2" name="codinst"
                                                                value="{{ $cliente_data->codinst }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Fecha Instalación </label>

                                                        <div class="input-group input-group-joined">
                                                            <span class="input-group-text">
                                                                <i data-feather="calendar"></i>
                                                            </span>
                                                            <input type="text" id="fp-default"
                                                                class="form-control flatpickr-basic"
                                                                placeholder="YYYY-MM-DD" name="finst"
                                                                value="{{ $cliente_data->finst }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Asignar Asesor </label>

                                                        <select class="select2 form-select" name="id_admin">
                                                            <option value="{{ $cliente_data->id_admin }}">
                                                                {{ $cliente_data->RELEMPLEADO->name }} -
                                                                {{ $cliente_data->RELEMPLEADO->rol }} </option>

                                                            @foreach ($admins as $empleado)
                                                                <option value="{{ $empleado->id }}">
                                                                    {{ $empleado->name }} -
                                                                    {{ $empleado->rol }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Observacion </label>
                                                <textarea class="form-control text-uppercase" type="text" placeholder="INGRESAR" name="obs" cols="30"
                                                    rows="3" name="detail">{{ $cliente_data->obs }}</textarea>
                                            </div>
                                            <br>

                                            <label class="form-label">
                                                <h1>Modificar Archivos :</h1>
                                            </label>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label class="form-label">Foto DNI Frontal </label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="fdni" value="{{ $cliente_data->fdni }}">
                                                </div>

                                                <div class="col-xl-4">
                                                    <label class="form-label">Foto DNI Posterior </label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="fdni1" value="{{ $cliente_data->fdni1 }}">
                                                </div>

                                                <div class="col-xl-4">
                                                    <label class="form-label">Foto Recibo Luz o Agua </label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="frecib" value="{{ $cliente_data->frecib }}">
                                                </div>


                                                <div class="col-xl-4">
                                                    <label class="form-label">Evaluación </label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="ceval" value="{{ $cliente_data->ceval }}">
                                                </div>
                                                <div class="col-xl-4">
                                                    <label class="form-label">Grabación .Wav</label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="grab" value="{{ $cliente_data->grab }}">
                                                </div>

                                            </div>
                                            <br>

                                            <button type="submit" class="btn btn-primary">Actualizar</button>
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
                                        <a href="{{ asset('uploads/datero/' . $cliente_data->fdni) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $cliente_data->fdni) }}" alt=""
                                                height="100" width="100" /></a>
                                    </div>
                                    <br>

                                    <div class="card-header">Foto DNI Posterior
                                        <a href="{{ asset('uploads/datero/' . $cliente_data->fdni1) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $cliente_data->fdni1) }}"
                                                alt="" height="100" width="100" /></a>
                                    </div>
                                    <br>

                                    <div class="card-header">Foto Recibo Luz o Agua
                                        <a href="{{ asset('uploads/datero/' . $cliente_data->frecib) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $cliente_data->frecib) }}"
                                                alt="" height="100" width="100" /></a>
                                    </div>
                                    <br>

                                    <div class="card-header">Foto Evaluación
                                        <a href="{{ asset('uploads/datero/' . $cliente_data->ceval) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $cliente_data->ceval) }}"
                                                alt="" height="100" width="100" /></a>
                                    </div>
                                    <br>

                                    <div class="card-header">Grabación
                                        <audio controls>
                                            <source src="{{ asset('uploads/datero/' . $cliente_data->grab) }}"
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
