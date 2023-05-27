@extends('admin.layout.app')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                Crear
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="#">
                                <i class="me-1" data-feather="arrow-left"></i>
                                Ir a Lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-fluid px-4 mt-4">
            <div class="row">

                <div class="col-xl-12">

                    <div class="card mb-4">
                        <div class="card-header text-center">Detalles</div>
                        <div class="card-body">
                            <form action="{{ route('admin_cliente_storecampo') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ingresar Nombres y Apellidos :</label>
                                                <input type="text" name="name"class="form-control" placeholder="Ingresar Nombres y Apellidos" value="{{ old('name') }}" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Celular o Telef. :</label>
                                                <input type="number" class="form-control" name="cel" placeholder="Ingresar Celular o Telef." value="{{ old('cel') }}" required="">
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



                                    <div class="form-group">
                                        <label>Seleccionar Plan:</label>
                                        <select class="form-control" name="id_plan" value="{{ old('id_plan') }}">
                                            <option value="1">Seleccionar</option>
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
                                    <div class="form-group">
                                        <label>Observacion :</label>
                                        <textarea name="obs" class="form-control" placeholder="Ingresar Observación o dejar en blanco" cols="30" rows="3" value="{{ old('obs') }}"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_admin" value="{{ auth()->user()->id }}">
                                    </div>




                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

</div>
@endsection




