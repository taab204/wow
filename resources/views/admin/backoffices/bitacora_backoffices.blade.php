@extends('admin.layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Bitacora</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Inicio</a></li>
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

                <!-- Timelime example  -->
                <div class="row">
                  <div class="col-md-12">
                    <!-- The time line -->
                    @foreach ($badmin as $row )
                    <div class="timeline">


                        <div class="time-label">
                            <span class="bg-purple"><i class="fas fa-calendar"></i>  {{ $row->created_at->format('d/m/Y')}} </span>
                            <span class="bg-purple"><i class="fas fa-clock"></i>  {{ $row->created_at->format('H:i:s A')}}</span>
                          </div>

                          <div>
                            <i class="fas fa-user bg-purple"></i>
                            <div class="timeline-item">
                              <span class="time"><i class="fas fa-clock"></i>  {{ $row->created_at->format('h:m:s A')}}</span>
                              <h3 class="timeline-header no-border"><a href="#"> {{ $row->RELEMPLEADO->name}}</a>  Registo el estado : {{ $row->RELESTADO->name}}</h3>


                              <div class="timeline-body">
                                <h4>Registro : {{ $row->obs}}</h4>
                              </div>

                            </div>
                          </div>

                      <div>
                        <i class="fas fa-bullhorn bg-purple"></i>
                        <div class="timeline-item">

                          <h3 class="timeline-header"><a href="#">IP Registrado : </a>{{ $row->ip}}</h3>

                        </div>
                      </div>
                      <div>
                        <i class="fas fa-clock bg-purple"></i>

                      </div>
                    </div>
                    @endforeach

                  </div>
                  <!-- /.col -->
                </div>
              </div>
              <!-- /.timeline -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
