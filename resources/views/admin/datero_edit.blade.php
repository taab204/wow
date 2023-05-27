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
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 class="card-title">EDITAR</h4>
                                      </div>
                                    <div class="card-body">
                                      <form action="{{ route('admin_datero_update',$datero_data->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                    
                                                    <div class="card card-primary card-outline">
                                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                                            <div class="card-header">
                                                                <h4 class="card-title w-100">
                                                                    Información del Datero:
                                                                </h4>
                                                            </div>
                                                        </a>
                                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <label>Informante Sr(a) :&nbsp;</label> {{ $datero_data->dname }} &nbsp;&nbsp;
                                                                <label>Su Celular :&nbsp;</label> {{ $datero_data->dcel }} &nbsp;&nbsp;
                                                                <label>Registro Fecha / Hora :&nbsp;</label> {{ $datero_data->created_at }}
                                                            </div>
                                                        </div>
                                                    </div>
                    
                    
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Editar DNI (Referido) :</label>
                                                <input type="text" name="dni"class="form-control"  placeholder="Ingresar DNI" value="{{ $datero_data->dni }}">
                                              </div>
                    
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Editar Nonbre y Apellido (Referido) :</label>
                                                <input type="text" name="name"class="form-control"  placeholder="Ingresar Nombre Plan" value="{{ $datero_data->name }}">
                                              </div>
                    
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Editar Celular (Referido) :</label>
                                                <input type="text" name="cel"class="form-control"  placeholder="Ingresar Nombre Plan" value="{{ $datero_data->cel }}">
                                              </div>
                    
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Editar Email (Referido) :</label>
                                                <input type="text" name="email"class="form-control"  placeholder="Ingresar Nombre Plan" value="{{ $datero_data->email }}">
                                              </div>
                    
                                              <div class="form-group">
                                                <label>Plan Seleccionado:</label>
                                                <select class="form-control" name="id_plan">
                                                <option value="{{ $datero_data->id_plan }}">{{ $datero_data->CON->plan}}</option>
                                                    @foreach ($planes_data as $planes)
                                                    <option value="{{ $planes->id}}">{{ $planes->plan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                    
                                                <div class="form-group">
                                                    <label>Estado :</label>
                                                    <select class="form-control" name="id_estado">
                                                        <option value="{{ $datero_data->id_estado}}">{{ $datero_data->RELESTADO->name}}</option>
                                                            @foreach ($estados_data as $estado)
                                                            <option value="{{ $estado->id}}">{{ $estado->name }}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                    
                                                <div class="form-group">
                                                    <label>Observacion :</label>
                                                    <textarea name="obs" class="form-control" placeholder="Ingresar Nombre Plan" cols="30" rows="3">{{ $datero_data->obs }}</textarea>
                                                </div>
                    
                    
                    
                                        </div>
                                        <!-- /.card-body -->
                    
                                        <div class="card-footer">
                                          <button type="submit" class="btn btn-primary">Registar Tratamiento</button>
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
     <!-- BEGIN: Content-->

  
@endsection





















