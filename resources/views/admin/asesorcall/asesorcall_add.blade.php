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
                                        <form action="{{ route('admin_storeasesorcall') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="form-label">DNI </label>
                                                    <input type="number" class="form-control" name="dni" id="dni"
                                                        placeholder="Ingresar" value="{{ old('dni') }}" required>
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
                                                    <label class="form-label">Ingresar Nombres y Apellidos </label>
                                                    <input type="text" name="name"class="form-control text-uppercase"
                                                        placeholder="Ingresar" value="{{ old('name') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="form-label">Celular </label>
                                                    <input type="number" class="form-control" name="cel" id="cel"
                                                        placeholder="Ingresar" value="{{ old('cel') }}" required>
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
                                                        placeholder="Ingresar" value="{{ old('cel2') }}">
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
                                                    <label class="form-label">Dirección </label>
                                                    <input type="text" class="form-control text-uppercase" name="direc"
                                                        placeholder="Ingresar" value="{{ old('direc') }}" required>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Referencia de la Dirección </label>
                                                    <input type="text" class="form-control text-uppercase" name="dref"
                                                        placeholder="Ingresar" value="{{ old('dref') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label">Email </label>
                                                    <input type="email" class="form-control text-lowercase" name="email"
                                                        placeholder="Ingresar" value="{{ old('email') }}" required>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-3">
                                                    <label class="form-label" for="fp-default">Fecha Nacimiento</label>
                                                    <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="fnac" value="{{ old('fnac') }}" />
                                                  
                                            </div>

                                            <div class="col-md-3">

                                                <label class="form-label">Departamento :</label>
                                                <select class="select2 form-select" name="depart" value="{{ old('depart') }}"
                                                    required>
                                                    <option value="">Seleccione</option>
                                                    @foreach ($depart_ecall as $row)
                                                        <option value="{{ $row->id }}">{{ $row->nom_dep }} </option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Provincia</label>
                                                <select class="select2 form-select" name="provin" value="{{ old('provin') }}" required>
                                                    <option value="">Seleccione</option>
                                                    @foreach ($provin_ecall as $row)
                                                        <option value="{{ $row->id }}">{{ $row->nom_pro }}</option>
                                                    @endforeach
                                                </select>


                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label">Distrito</label>
                                                    <input type="text" name="distri"class="form-control text-uppercase"
                                                        placeholder="Ingresar" value="{{ old('distri') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label class="form-label">Seleccionar Plan</label>
                                                <select class="select2 form-select" name="id_plan" value="{{ old('id_plan') }}"
                                                    required>
                                                    <option value="">Seleccione</option>
                                                    @foreach ($planes as $plan)
                                                        <option value="{{ $plan->id }}">{{ $plan->plan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Observación</label>

                                            <textarea id="postEditor" name="obs" class="form-control text-uppercase"
                                                placeholder="Ingresar Observación o dejar en blanco" cols="30"
                                                rows="3" value="{{ old('obs') }}"></textarea>
                                        </div>


                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="id_admin"
                                                value="{{ auth()->user()->id }}">
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
