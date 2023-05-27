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
                        <h2 class="content-header-title float-start mb-0">Vista</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/asesorcall/viewasesorcall/' . auth()->user()->id) }}">Vista</a> </li>
                            <li class="breadcrumb-item active">Vista </li>
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
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <!-- Account details card-->
                                            <div class="card mb-4">
                                                <div class="card-header text-center">Detalles</div>
                                                <div class="card-body">
                                                    <form>
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>DNI :</label>
                                                                        <input type="text" class="form-control" value="{{ $cliente_detail->dni }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nombres y Apellidos :</label>
                                                                        <input type="text" class="form-control text-uppercase" value="{{ $cliente_detail->name }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Celular :</label>
                                                                        <input type="text" class="form-control" value="{{ $cliente_detail->cel }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Celular Opcional :</label>
                                                                        <input type="text" class="form-control" value="{{ $cliente_detail->cel2 }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label>Direccion :</label>
                                                                        <input type="text" class="form-control text-uppercase" value="{{ $cliente_detail->direc }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Referencia de la Dirección :</label>
                                                                        <input type="text" class="form-control text-uppercase" value="{{ $cliente_detail->dref }}" disabled>
                                                                    </div>
            
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Email :</label>
                                                                        <input type="text" class="form-control text-lowercase" value="{{ $cliente_detail->email }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label>Fecha Nacimiento :</label>
                                                                    <input type="text" class="form-control" value="{{ $cliente_detail->fnac }}" disabled>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Departamento:</label>
                                                                        {{-- <input type="text" class="form-control" value="{{ $cliente_detail->RELPLAN->plan }}" disabled> --}}
                                                                        <input type="text" class="form-control" value="{{ $cliente_detail->RELDEPARTAMENTO->nom_dep }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Provincia:</label>
                                                                        <input type="text" class="form-control" value="{{ $cliente_detail->RELPROVINCIA->nom_pro }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Distrito:</label>
                                                                        <input type="text" class="form-control text-uppercase" value="{{ $cliente_detail->distri }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label class="small mb-1">Seleccionar Plan</label>
                                                                    <input type="text" class="form-control" value="{{ $cliente_detail->RELPLAN->plan }}" disabled>
                                                                </div>
            
                                                                <div class="col-md-3">
                                                                    <label class="small mb-1">Estado</label>
                                                                    <input type="text" class="form-control" value=" {{ $cliente_detail->RELESTADO->name }}" disabled>
                                                                </div>
            
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Observacion :</label>
                                                                <textarea class="form-control text-uppercase" name="obs" placeholder="Sin registro" cols="30" rows="20" disabled> {{ $cliente_detail->obs }}</textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card mb-4 mb-xl-0">
            
                                        <div class="card-header">Galeria de Fotos de DNI, Recibo: y Grabación</div>
                                        <div class="card-body text-center">
                                            <div class="card-header">Foto DNI Frontal
                                                <a href="#" disabled><img class="img-account-profile rounded"
                                                        src="{{ asset('uploads/datero/' . $cliente_detail->fdni) }}"
                                                        alt="" height="100" width="100"/></a>
                                            </div>
                                            <br>
            
                                            <div class="card-header">Foto DNI Posterior
                                                <a href="#" disabled><img class="img-account-profile rounded" src="{{ asset('uploads/datero/' . $cliente_detail->fdni1) }}" alt="" height="100" width="100" /></a>
                                            </div>
                                            <br>
            
                                            <div class="card-header">Foto Recibo Luz o Agua
                                                <a href="#" disabled><img class="img-account-profile rounded" src="{{ asset('uploads/datero/' . $cliente_detail->frecib) }}" alt="" height="100" width="100" /></a>
                                            </div>
                                            <br>
            
                                            <div class="card-header">Foto Evaluación
                                                <a href="#" disabled><img class="img-account-profile rounded" src="{{ asset('uploads/datero/' . $cliente_detail->ceval) }}" alt="" height="100" width="100" /></a>
                                            </div>
                                            <br>
            
                                            <div class="card-header">Grabación
                                                <audio controls>
                                                    <source src="{{ asset('uploads/datero/' . $cliente_detail->grab) }}"
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
