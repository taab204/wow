@extends('admin.layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editar Documento</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Editar Documento</li>
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
                                <a class="btn btn-info btn-xm" href="{{ route('admin_planes_view') }}">
                                    <i class="fas fa-list"></i> <span>Ir a Lista</span>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin_planes_update', $planes->id) }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Editar Nombre Plan :</label>
                                                <input type="text" name="plan"class="form-control"
                                                    placeholder="Ingresar Nombre Plan" value="{{ $planes->plan }}">
                                            </div>

                                        </div>
                                        <div class="col-md-2">

                                            <label for="exampleInputEmail1">Editar Precio Venta:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">S/.</span>
                                                </div>
                                                <input type="number" step="0.01" name="price_vent" class="form-control" value="{{ $planes->price_vent }}">
                                              </div>

                                        </div>
                                        <div class="col-md-2">

                                            <label for="exampleInputEmail1">Editar Precio Pago:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">S/.</span>
                                                </div>
                                                <input type="number" step="0.01" name="price_pag" class="form-control" value="{{ $planes->price_pag }}">
                                              </div>



                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Editar Fecha Inicio de plan:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        data-inputmask-alias="datetime"
                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fini"
                                                        value="{{ $planes->fini }}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Editar Fecha Fin de plan:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        data-inputmask-alias="datetime"
                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask name="ffin"
                                                        value="{{ $planes->ffin }}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">

                                        {{-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Estado :</label>
                                                <select class="form-control" name="status" value="{{ $planes->status }}">
                                                    <option value="{{ $planes->status }}">{{ $planes->status }}</option>
                                                    <option value="1">Activado</option>
                                                    <option value="0">Desactivado</option>
                                                </select>
                                            </div>

                                        </div> --}}
                                    </div>



                                    <div class="form-group">
                                        <label>Editar Detalle Plan :</label>
                                        <textarea name="detail" class="form-control" placeholder="Ingresar Nombre Plan" cols="30" rows="3">{{ $planes->detail }}</textarea>
                                    </div>





                                    <!-- Date dd/mm/yyyy -->

                                    <!-- /.form group -->
                                    <!-- Date dd/mm/yyyy -->

                                    <!-- /.form group -->



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
