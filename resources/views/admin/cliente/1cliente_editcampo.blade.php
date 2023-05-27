@extends('admin.layout.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Cliente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Cliente</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                  <div class="card-header">
                    <a class="btn btn-info btn-xm" href="{{ url('admin/cliente/viewasesor/'.auth()->user()->id) }}">
                        <i class="fas fa-list"></i> <span>Ir a Lista</span>
                    </a>
                </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('admin_cliente_updatecampo',$cliente_data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        {{-- <div class="form-group">
                            <label for="exampleInputFile">Ingrese Imagen* / Medidas: 570 x 415</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="exampleInputFile" value="{{ $cliente_data->foto }}">
                                <label class="custom-file-label" for="exampleInputFile">{{ $cliente_data->foto }}</label>
                              </div>
                            </div>
                          </div> --}}
                          <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Foto DNI Frontal *</label>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('uploads/datero/'.$cliente_data->fdni) }}" alt="" class="img-fluid mb-3">
                                        </div>
                                        <label for="exampleInputFile"></label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" name="fdni" class="custom-file-input" id="exampleInputFile" value="{{ $cliente_data->fdni }}">
                                            <label class="custom-file-label" for="exampleInputFile">{{ $cliente_data->fdni }}</label>
                                          </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Foto DNI Posterior *</label>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('uploads/datero/'.$cliente_data->fdni1) }}" alt="" class="img-fluid mb-3">
                                        </div>
                                        <label for="exampleInputFile"></label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" name="fdni1" class="custom-file-input" id="exampleInputFile" value="{{ $cliente_data->fdni1 }}">
                                            <label class="custom-file-label" for="exampleInputFile">{{ $cliente_data->fdni1 }}</label>
                                          </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Foto Recibo Luz o Agua*</label>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('uploads/datero/'.$cliente_data->frecib) }}" alt="" class="img-fluid mb-3">
                                        </div>
                                        <label for="exampleInputFile"></label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" name="frecib" class="custom-file-input" id="exampleInputFile" value="{{ $cliente_data->frecib }}">
                                            <label class="custom-file-label" for="exampleInputFile">{{ $cliente_data->frecib }}</label>
                                          </div>
                                        </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto DNI Frontal * </label><span>(Referido)</span>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="fdni" class="custom-file-input"
                                                id="exampleInputFile" title="Solo Foto">
                                            <label class="custom-file-label" for="exampleInputFile">Tomar Foto DNI
                                                Frontal</label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto DNI Posterior *
                                    </label><span>(Referido)</span>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="fdni1" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Tomar Foto DNI
                                                Posterior</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Recibo Luz o Agua*
                                    </label><span>(Referido)</span>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="frecib" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label btn-success" for="exampleInputFile">Tomar
                                                Foto Recibo Luz o Agua</label>
                                        </div>


                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto DNI Delante (Referido) *:</label>
                                    <input type="file"  capture="camera" name="fdni" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto DNI Atras (Referido) *:</label>
                                    <input type="file"  capture="camera" name="fdni1" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto Recibo Luz o Agua (Referido) *:</label>
                                    <input type="file"  capture="camera" name="frecib" >
                                </div>
                            </div> --}}
                        </div>
                          <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>DNI :</label>
                                    <input type="number" class="form-control" name="dni" placeholder="Ingrese DNI" value="{{ $cliente_data->dni }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombres y Apellidos :</label>
                                    <input type="text" name="name"class="form-control" placeholder="Ingrese Nombres y Apellidos" value="{{ $cliente_data->name }}">
                                  </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Celular  :</label>
                                    <input type="number" class="form-control" name="cel" placeholder="Ingrese Celular " value="{{ $cliente_data->cel }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Celular Opcional :</label>
                                    <input type="number" class="form-control" name="cel2" placeholder="Ingrese Celular Opcional" value="{{ $cliente_data->cel2 }}">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Direccion :</label>
                                    <input type="text" class="form-control" name="direc" placeholder="Ingrese Dirección" value="{{ $cliente_data->direc }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Referencia de la Dirección :</label>
                                    <input type="text" class="form-control" name="dref" placeholder="Ingrese Referencia de la Dirección" value="{{ $cliente_data->dref }}">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email :</label>
                                    <input type="text" class="form-control" name="email" placeholder="Ingrese Email" value="{{ $cliente_data->email }}">
                                </div>

                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>
                          <div class="row">
                            {{-- <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lugar Nacimiento :</label>
                                    <input type="text" name="lnac"class="form-control"
                                        placeholder="Ingresar Lugar Nacimiento"
                                        value="{{ $cliente_data->lnac }}">
                                </div>
                            </div> --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha Nacimiento :</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fnac" value="{{ $cliente_data->fnac }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Departamento:</label>
                                    <input type="text" name="depart"class="form-control" placeholder="Ingresar " value="{{ $cliente_data->depart }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Provincia:</label>
                                    <input type="text" name="provin"class="form-control" placeholder="Ingresar " value="{{ $cliente_data->provin }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Distrito:</label>
                                    <input type="text" name="distri"class="form-control" placeholder="Ingresar " value="{{ $cliente_data->distri }}">
                                </div>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Plan Seleccionado:</label>
                                    <select class="form-control" name="id_plan">
                                    <option value="{{ $cliente_data->id_plan }}">{{ $cliente_data->RELPLAN->plan}}</option>
                                        @foreach ($planes as $row)
                                        <option value="{{ $row->id}}">{{ $row->plan }}</option>
                                        @endforeach
                                    </select>
                                    </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Estado :</label>
                                    <select class="form-control" name="id_estado">
                                        <option value="{{ $cliente_data->id_estado }}" >{{ $cliente_data->RELESTADO->name }} </option>
                                        @foreach ($estados as $row)

                                        <option value="{{ $row->id}}">{{ $row->name }}</option>

                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            {{-- <div class="col-md-3">
                                <div class="form-group">
                                    <label>Cod. Instalación :</label>
                                    <input type="number" class="form-control" name="codinst" placeholder="Ingrese Codigo Instalación" value="{{ $cliente_data->codinst }}">
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Fecha Instalacion:</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="finst" value="{{ $cliente_data->finst }}">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                            </div> --}}
                          </div>



                    <!-- Date dd/mm/yyyy -->

                    <!-- /.form group -->

                    {{-- <div class="form-group">
                        <label>Nombre Padre:</label>
                        <input type="text" class="form-control" name="np" placeholder="Ingrese Nombre Padre" value="{{ $cliente_data->np }}">
                    </div>

                    <div class="form-group">
                        <label>Nombre Madre :</label>
                        <input type="text" class="form-control" name="nm" placeholder="Ingrese Nombre Madre" value="{{ $cliente_data->nm }}">
                    </div> --}}



                    <div class="form-group">
                        <label>Observacion :</label>
                        <textarea name="obs" class="form-control" placeholder="Ingresar" cols="30" rows="3">{{ $cliente_data->obs }}</textarea>
                    </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
              </div>
              <!--/.col (left) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection





















