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
                                            <div
                                              id="accordionMarginOne"
                                              class="accordion-collapse collapse"
                                              aria-labelledby="headingMarginOne"
                                              data-bs-parent="#accordionMargin"
                                            >
                                              <div class="accordion-body">
                                                <label>Informante Sr(a) :&nbsp;</label> {{ $dateros_backoffices->dname }}
                                                    &nbsp;&nbsp;
                                                    <label>Su Celular :&nbsp;</label> {{ $dateros_backoffices->dcel }} &nbsp;&nbsp;
                                                    <label>Registro Fecha / Hora :&nbsp;</label>
                                                    {{ $dateros_backoffices->created_at }}
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <form action="{{ route('admin_daterobackoffices_update', $dateros_backoffices->id) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                {{-- <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label class="form-label">Tipo</label>
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
                                                        <label class="form-label">DNI </label>
                                                        <input type="number" name="dni"class="form-control" id="dni"
                                                            placeholder="Ingresar DNI"
                                                            value="{{ $dateros_backoffices->dni }}">
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
                                                    <label class="form-label">Nonbre y Apellido </label>
                                                    <input type="text" name="name"class="form-control text-uppercase"
                                                        placeholder="Ingresar Nombre Plan"
                                                        value="{{ $dateros_backoffices->name }}">
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Celular </label>
                                                    <input type="number" name="cel"class="form-control" id="cel"
                                                        placeholder="Ingresar " value="{{ $dateros_backoffices->cel }}">
                                                        <script>
                                                            var input = document.getElementById('cel');
                                                            input.addEventListener('input', function() {
                                                                if (this.value.length > 9)
                                                                    this.value = this.value.slice(0, 9);
                                                            })
                                                        </script>

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Otro Celular </label>
                                                    <input type="number" name="cel2"class="form-control" id="cel2"
                                                        placeholder="Ingresar " value="{{ $dateros_backoffices->cel2 }}">
                                                        <script>
                                                            var input = document.getElementById('cel2');
                                                            input.addEventListener('input', function() {
                                                                if (this.value.length > 9)
                                                                    this.value = this.value.slice(0, 9);
                                                            })
                                                        </script>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="form-label">Dirección </label>
                                                    <input type="text" name="direc"class="form-control text-uppercase"
                                                        placeholder="Ingresar Direccion"
                                                        value="{{ $dateros_backoffices->direc }}">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Direccion Referencia </label>
                                                    <input type="text" name="dref"class="form-control text-uppercase"
                                                        placeholder="Ingresar Direccion Referencia"
                                                        value="{{ $dateros_backoffices->dref }}">

                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Email (Referido) </label>
                                                    <input type="text" name="email"class="form-control text-lowercase"
                                                        placeholder="Ingresar Nombre Plan"
                                                        value="{{ $dateros_backoffices->email }}">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="form-label">Nombre Padre</label>
                                                    <input type="text" name="np"class="form-control text-uppercase"
                                                        placeholder="Ingresar " value="{{ $dateros_backoffices->np }}">

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Nombre Madre</label>
                                                        <input type="text" name="nm"class="form-control text-uppercase"
                                                            placeholder="Ingresar "
                                                            value="{{ $dateros_backoffices->nm }}">
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Lugar Nacimiento </label>
                                                    <input type="text" name="lnac"class="form-control text-uppercase"
                                                        placeholder="Ingresar Lugar Nacimiento"
                                                        value="{{ $dateros_backoffices->lnac }}">

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Fecha Nacimiento </label>
                                                    <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fnac" value="{{ $dateros_backoffices->fnac }}" />
                                                    
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Departamento </label>
                                                    <select class="form-select select2" name="depart" id="depart">
                                                        <option value="{{ $dateros_backoffices->depart }}">
                                                            {{ $dateros_backoffices->RELDEPARTAMENTO->nom_dep }}</option>
                                                        @foreach ($depart_backoffices as $row)
                                                            <option value="{{ $row->id }}">{{ $row->nom_dep }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-2">
                                                    <label class="form-label">Provincia</label>
                                                    <select class="form-select select2" name="provin" id="provin">
                                                        <option value="{{ $dateros_backoffices->provin }}">
                                                            {{ $dateros_backoffices->RELPROVINCIA->nom_pro }}</option>
                                                        @foreach ($provin_backoffices as $row)
                                                            <option value="{{ $row->id }}">{{ $row->nom_pro }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Editar Distrito</label>
                                                        <input type="text" name="distri"class="form-control text-uppercase"
                                                            placeholder="Ingresar "
                                                            value="{{ $dateros_backoffices->distri }}">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Plan Seleccionado</label>
                                                        <select class="form-select select2" name="id_plan">
                                                            <option value="{{ $dateros_backoffices->id_plan }}">
                                                                {{ $dateros_backoffices->CON->plan }}</option>
                                                            @foreach ($planes_backoffices as $planes)
                                                                <option value="{{ $planes->id }}">{{ $planes->plan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Estado </label>
                                                        <select class="form-select select2" name="id_estado">
                                                            <option value="{{ $dateros_backoffices->id_estado }}">
                                                                {{ $dateros_backoffices->RELESTADO->name }}</option>
                                                            @foreach ($estados_backoffices as $estado)
                                                                <option value="{{ $estado->id }}">{{ $estado->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Codigo Cliente</label>
                                                        <input type="text" name="codinst"class="form-control"
                                                            placeholder="Ingresar Codigo Cliente"
                                                            value="{{ $dateros_backoffices->codinst }}">
                                                    </div>

                                                </div>
                                                <div class="col-md-2">

                                                    <label class="form-label">Fecha Instalación </label>
                                                    <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="finst" value="{{ $dateros_backoffices->finst }}" />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Observación</label>
                                                <textarea id="postEditor" name="obs" class="form-control text-uppercase" placeholder="Ingresar" cols="30"
                                                            rows="3">{{ $dateros_backoffices->obs }}</textarea>
                                                


                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary">Registar Tratamiento</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Galeria de Fotos de DNI, Recibo: y Grabación</div>
                                <div class="card-body text-center">
                                    <div class="card-header">Foto DNI Frontal
                                        <a href="{{ asset('uploads/datero/' . $dateros_backoffices->fdni) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $dateros_backoffices->fdni) }}"
                                                alt="" height="100" width="100"/></a>
                                    </div>
                                    <br>
                                    <div class="card-header">Foto DNI Posterior

                                        <a href="{{ asset('uploads/datero/' . $dateros_backoffices->fdni1) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $dateros_backoffices->fdni1) }}"
                                                alt="" height="100" width="100"/></a>
                                    </div>
                                    <br>


                                    <div class="card-header">Foto Recibo Luz o Agua
                                        <a href="{{ asset('uploads/datero/' . $dateros_backoffices->frecib) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $dateros_backoffices->frecib) }}"
                                                alt="" height="100" width="100"/></a>
                                    </div>
                                    <br>


                                    <div class="card-header">Foto Evaluación
                                        <a href="{{ asset('uploads/datero/' . $dateros_backoffices->ceval) }}"
                                            target="_blank"><img class="img-account-profile rounded"
                                                src="{{ asset('uploads/datero/' . $dateros_backoffices->ceval) }}"
                                                alt="" height="100" width="100"/></a>
                                    </div>
                                    <br>


                                    <div class="card-header">Grabación

                                        <audio controls>
                                            <source src="{{ asset('uploads/datero/' . $dateros_backoffices->grab) }}"
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
