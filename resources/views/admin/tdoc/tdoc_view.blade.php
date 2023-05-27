@extends('admin.layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Documento</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Documento</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-info btn-xm" href="{{ route('admin_planes_add') }}">
                                    <i class="fas fa-pencil-alt"></i>Nuevo
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="administrador" class="table table-bordered table-striped projects">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nombre</th>
                                            <th data-visible='false'>Detalle</th>
                                            <th>Precio Venta</th>
                                            <th>Precio Pago</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th data-visible='false'>Fecha/Hora - Ingreso</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($planes as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td> {{ $row->plan }}</td>
                                                <td> {{ $row->detail }}</td>
                                                <td> S/. {{ $row->price_vent }}</td>
                                                <td> S/. {{ $row->price_pag }}</td>
                                                <td> {{ $row->fini }}</td>
                                                <td> {{ $row->ffin }}</td>
                                                <td> {{ $row->created_at }}</td>
                                                <td class="project-actions text-right">
                                                    @if ($row->status == 1)
                                                        <a href="{{ route('admin_estados_planes_estado', $row->id) }}"
                                                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                                    @else
                                                        <a href="{{ route('admin_estados_planes_estado', $row->id) }}"
                                                            class="btn btn-danger btn-sm"><i class="fas fa-eye"></i></a>
                                                    @endif

                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('admin_planes_edit', $row->id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>

                                                    </a>
                                                    <!--<a class="btn btn-danger btn-sm" href="{{ route('admin_planes_delete', $row->id) }}"  onClick="return confirm('Estas seguro?');">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Eliminar
                                                        </a> -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseNine">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Planes Desactivados
                                </h4>
                            </div>
                        </a>
                        <div id="collapseNine" class="collapse" data-parent="#accordion">
                            <div class="card-body">

                                <!-- Small boxes (Stat box) -->
                                <div class="row">
                                    <div class="col-12">
                                            <div class="card-body">
                                                <table id="PlanesD" class="table table-bordered table-striped projects">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Nombre Plan</th>
                                                            <th>Detalle</th>
                                                            <th>Precio Venta</th>
                                                            <th>Precio Pago</th>
                                                            <th>Estado</th>
                                                            <th>Fecha Inicio</th>
                                                            <th>Fecha Fin</th>
                                                            <th>Fecha/Hora - Ingreso</th>
                                                            <th>Ver </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($planesd as $row)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>

                                                                <td> {{ $row->plan }}</td>
                                                                <td> {{ $row->detail }}</td>
                                                                <td> {{ $row->price_vent }}</td>
                                                                <td> {{ $row->price_pag }}</td>
                                                                <td> {{ $row->status }}</td>
                                                                <td> {{ $row->fini }}</td>
                                                                <td> {{ $row->ffin }}</td>
                                                                <td> {{ $row->created_at }}</td>
                                                                <td class="project-actions text-right">
                                                                    @if ($row->status == 1)
                                                                        <a href="{{ route('admin_estados_planes_estado', $row->id) }}"
                                                                            class="btn btn-success btn-sm"><i
                                                                                class="fas fa-eye"></i></a>
                                                                    @else
                                                                        <a href="{{ route('admin_estados_planes_estado', $row->id) }}"
                                                                            class="btn btn-danger btn-sm"><i
                                                                                class="fas fa-eye"></i></a>
                                                                    @endif

                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>

                                                </table>
                                            </div>
                                            <!-- /.card-body -->

                                        <!-- /.card -->
                                    </div>




                                </div>
                                <!-- /.row -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->
@endsection
