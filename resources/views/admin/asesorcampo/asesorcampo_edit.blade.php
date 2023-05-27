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
                                    <li class="breadcrumb-item"><a
                                            href="{{ url('admin/asesorcampo/viewasesorcampo/' . auth()->user()->id) }}">Clientes</a>
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
                                <div class="card-header text-center">
                                    <h1>Detalles</h1>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin_updateasesorcampo', $cliente_data->id) }}" method="post"
                                        enctype="multipart/form-data">

                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">DNI</label>
                                                        <input type="number" class="form-control" name="dni" id="dni"
                                                            placeholder="Ingrese" value="{{ $cliente_data->dni }}">
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
                                                        <label class="form-label">Nombres y Apellidos</label>
                                                        <input type="text" name="name"class="form-control text-uppercase"
                                                            placeholder="Ingrese" value="{{ $cliente_data->name }}">
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Celular</label>
                                                        <input type="number" class="form-control" name="cel" id="cel"
                                                            placeholder="Ingrese" value="{{ $cliente_data->cel }}">
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
                                                        <label class="form-label">Celular Opcional</label>
                                                        <input type="number" class="form-control" name="cel2" id="cel2"
                                                            placeholder="Ingrese" value="{{ $cliente_data->cel2 }}">
                                                            <script>
                                                                var input = document.getElementById('cel');
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
                                                        <label class="form-label">Dirección</label>
                                                        <input type="text" class="form-control text-uppercase" name="direc"
                                                            placeholder="Ingrese" value="{{ $cliente_data->direc }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Referencia de la Dirección</label>
                                                        <input type="text" class="form-control text-uppercase" name="dref"
                                                            placeholder="Ingrese" value="{{ $cliente_data->dref }}">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" class="form-control text-lowercase" name="email"
                                                            placeholder="Ingrese" value="{{ $cliente_data->email }}">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="form-label">Fecha Nacimiento</label>
                                                    <div class="input-group input-group-joined">
                                                        <span class="input-group-text"> <i
                                                                data-feather="calendar"></i></span>
                                                        <input class="form-control ps-0" type="text"
                                                            data-inputmask-alias="datetime" placeholder="dd/mm/yyyy"
                                                            name="fnac"value="{{ $cliente_data->fnac }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">


                                                    <div class="form-group">
                                                        <label class="form-label">Departamento</label>
                                                        <select class="select2 form-select" name="depart"
                                                            id="depart">
                                                            <option value="{{ $cliente_data->depart }}">
                                                                {{ $cliente_data->RELDEPARTAMENTO->nom_dep }}</option>
                                                            @foreach ($depart_ecam as $row)
                                                                <option value="{{ $row->id }}">{{ $row->nom_dep }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Provincia</label>
                                                    <select class="select2 form-select" name="provin" id="provin">
                                                        <option value="{{ $cliente_data->provin }}">
                                                            {{ $cliente_data->RELPROVINCIA->nom_pro }}</option>
                                                        @foreach ($provin_ecam as $row)
                                                            <option value="{{ $row->id }}">{{ $row->nom_pro }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Distrito</label>
                                                        <input type="text" name="distri"class="form-control text-uppercase"
                                                            placeholder="Ingresar " value="{{ $cliente_data->distri }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Plan Seleccionado:</label>
                                                        <select class="select2 form-select" name="id_plan">
                                                            <option value="{{ $cliente_data->id_plan }}">
                                                                {{ $cliente_data->RELPLAN->plan }}</option>
                                                            @foreach ($planes as $row)
                                                                <option value="{{ $row->id }}">{{ $row->plan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Estado :</label>
                                                        <select class="select2 form-select" name="id_estado">
                                                            <option value="{{ $cliente_data->id_estado }}">
                                                                {{ $cliente_data->RELESTADO->name }} </option>
                                                            @foreach ($estados as $row)
                                                                <option value="{{ $row->id }}">{{ $row->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Observación</label>
                                                <textarea id="postEditor" class="form-control text-uppercase" name="obs"
                                                    placeholder="Ingresar Observación o dejar en blanco" cols="30" rows="3"> {{ $cliente_data->obs }}</textarea>
                                            </div>
                                            <br>




                                            <label class="form-label">
                                                <h1>Archivos : Fotos de DNI, Recibo, Grabación y Evalucación :</h1>
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
