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
                        <h2 class="content-header-title float-start mb-0">Perfil</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Inicio</a> </li>
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

                <section class="app-user-view-account">
                    <div class="row">
                      <!-- User Sidebar -->
                      <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                        <!-- User Card -->
                        <div class="card">
                          <div class="card-body">
                            <div class="user-avatar-section">
                              <div class="d-flex align-items-center flex-column">
                                <img
                                  class="img-fluid rounded mt-3 mb-2"
                                  src="{{ asset('uploads/'.Auth::guard('admin')->user()->foto) }}"
                                  height="110"
                                  width="110"
                                  alt="User avatar"
                                />
                                <div class="user-info text-center">
                                  <h4>{{Auth::guard('admin')->user()->name }}</h4>
                                  <span class="badge bg-light-secondary">{{Auth::guard('admin')->user()->rol }}</span>
                                </div>
                              </div>
                            </div>
                            {{-- <div class="d-flex justify-content-around my-2 pt-75">
                              <div class="d-flex align-items-start me-2">
                                <span class="badge bg-light-primary p-75 rounded">
                                  <i data-feather="check" class="font-medium-2"></i>
                                </span>
                                <div class="ms-75">
                                  <h4 class="mb-0">1.23k</h4>
                                  <small>Tasks Done</small>
                                </div>
                              </div>
                              <div class="d-flex align-items-start">
                                <span class="badge bg-light-primary p-75 rounded">
                                  <i data-feather="briefcase" class="font-medium-2"></i>
                                </span>
                                <div class="ms-75">
                                  <h4 class="mb-0">568</h4>
                                  <small>Projects Done</small>
                                </div>
                              </div>
                            </div> --}}
                            <br>
                            <h4 class="fw-bolder border-bottom pb-50 mb-1">  </h4>
                            <form class="form-horizontal" action="{{route('admin_profile_submit')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Seleccione Nueva Imagen para su perfil:</label>
                                    <input class="form-control" type="file" id="formFile"  name="foto">
                                </div>
                                
                                <button class="btn btn-primary" type="submit">Actualizar Imagen</button>
                            </form>
                            {{-- <div class="info-container">
                              <ul class="list-unstyled">
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">DNI:</span>
                                    <span>{{ Auth::guard('admin')->user()->dni }}</span>
                                  </li>
                                

                                
                                  
                              </ul>
                              <div class="d-flex justify-content-center pt-2">
                                 <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser" data-bs-toggle="modal">
                                  Edit
                                </a>
                                <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspender Cuenta</a>
                              </div>
                            </div> --}}
                          </div>
                        </div>
                        <!-- /User Card -->
                        
                      </div>
                      <!--/ User Sidebar -->
                  
                      <!-- User Content -->
                      <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                        <!-- User Pills -->
                        <ul class="nav nav-pills mb-2">
                            <li class="nav-item">
                              <a class="nav-link active" id="perfil-tab-fill" data-bs-toggle="pill" href="#perfil-fill" aria-expanded="true">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Perfil</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="seguridad-tab-fill" data-bs-toggle="pill" href="#seguridad-fill" aria-expanded="false"
                                ><i data-feather="lock" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Cambiar Clave</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="notificaciones-tab-fill" data-bs-toggle="pill" href="#notificaciones-fill" aria-expanded="true">
                                    <i data-feather="bell" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Notificaciones</span>
                                </a>
                            </li>
                              
                        </ul>
                        
                  
                        <!-- Activity Timeline -->
                        <div class="card">
                            
                          {{-- <h4 class="card-header">User Activity Timeline</h4> --}}
                          <div class="card-body pt-1">

                            <div class="tab-content">
                                <div
                                  role="tabpanel"
                                  class="tab-pane active"
                                  id="perfil-fill"
                                  aria-labelledby="perfil-tab-fill"
                                  aria-expanded="true">
                                  
                                    <h4 class="fw-bolder border-bottom pb-50 mb-1">Detalles : Perfil de {{Auth::guard('admin')->user()->rol }}</h4>
                                    
                                    <li class="mb-75">
                                        <span class="fw-bolder me-25">Rol:</span>
                                        <span>{{ Auth::guard('admin')->user()->rol }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Nombres:</span>
                                        <span>{{ Auth::guard('admin')->user()->name }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Dirección:</span>
                                        <span>{{ Auth::guard('admin')->user()->address }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Estado:</span>
                                        <span class="badge bg-light-success">Activo</span>
                                      </li>
                                      
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">1° Celular:</span>
                                        <span>{{ Auth::guard('admin')->user()->tel1 }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">2° Celular:</span>
                                        <span>{{ Auth::guard('admin')->user()->tel2 }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Fecha Ingreso:</span>
                                        <span>{{ Auth::guard('admin')->user()->fin }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Sexo:</span>
                                        <span>{{ Auth::guard('admin')->user()->sexo }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Email:</span>
                                        <span>{{ Auth::guard('admin')->user()->email }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Fecha Nacimiento:</span>
                                        <span>{{ Auth::guard('admin')->user()->fnaci }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Sexo:</span>
                                        <span>{{ Auth::guard('admin')->user()->sexo }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Nombre de Banco:</span>
                                        <span>{{ Auth::guard('admin')->user()->nbanco }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Nuemro de Cuenta:</span>
                                        <span>{{ Auth::guard('admin')->user()->ncuenta }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">Estado Civil:</span>
                                        <span>{{ Auth::guard('admin')->user()->ecivil }}</span>
                                      </li>
                                      <li class="mb-75">
                                        <span class="fw-bolder me-25">N° de Hijos:</span>
                                        <span>{{ Auth::guard('admin')->user()->nhijos }}</span>
                                      </li>
                                   


                                  
                                </div>
                                <div
                                  class="tab-pane"
                                  id="seguridad-fill"
                                  role="tabpanel"
                                  aria-labelledby="seguridad-tab-fill"
                                  aria-expanded="false">
                                  <form class="form-horizontal" action="{{route('admin_profile_submit')}}" method="post" enctype="multipart/form-data">
                                    @csrf
    
                                    {{-- <div class="mb-3">
                                        <label for="formFile" class="form-label">Seleccione Imagen</label>
                                        <input class="form-control" type="file" id="formFile"  name="foto">
                                    </div> --}}
    
    
                                    <!-- Form Group (username)-->
                                    {{-- <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Nombre y Apellidos</label>
    
                                        <input class="form-control" id="inputUsername" type="text" name="name" value="{{ Auth::guard('admin')->user()->name }}"/>
                                    </div> --}}
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">Contraseña</label>
                                            <input class="form-control" id="inputFirstName" type="text" name="password" />
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Repetir Contraseña</label>
                                            <input class="form-control" id="inputLastName" type="text"  name="retype_password" />
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    {{-- <div class="row gx-3 mb-3">
                                        <!-- Form Group (organization name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Organization name</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap" />
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Location</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA" />
                                        </div>
                                    </div> --}}
                                    <!-- Form Group (email address)-->
                                    {{-- <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" name="email" value="{{ Auth::guard('admin')->user()->email }}" />
                                    </div> --}}
                                    <!-- Form Row-->
                                    {{-- <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567" />
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputBirthday">Birthday</label>
                                            <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988" />
                                        </div>
                                    </div> --}}
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit">Actualizar Clave</button>
                                </form>
                                </div>
                                <div
                                  class="tab-pane"
                                  id="notificaciones-fill"
                                  role="tabpanel"
                                  aria-labelledby="notificaciones-tab-fill"
                                  aria-expanded="false">
                                  <p>
                                    <h4>Estamos trabajando... tenga paciencia. Gracias</h4>
                                    




                                  </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- /Activity Timeline -->
                        
                      </div>
                      <!--/ User Content -->
                    </div>
                  </section>
                





            </div>
        </div>


<div id="layoutSidenav_content">
    <main>
        
    </main>

</div>
</div>

@endsection
