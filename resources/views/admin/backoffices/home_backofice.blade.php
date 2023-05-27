@extends('admin.layout.app')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a>
                                    </li>
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
                                        class="align-middle">Agendas</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">ESTADISTICAS</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0"> </p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">{{ $total_porpagar }}</h4>
                                                    <p class="card-text font-small-3 mb-0">Por Pagar</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">{{ $total_pagado }} </h4>
                                                    <p class="card-text font-small-3 mb-0"> Pagados</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">{{ $total_validado }}</h4>
                                                    <p class="card-text font-small-3 mb-0">Validado</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                            <div class="avatar bg-light-success me-2">
                                                <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">$9745</h4>
                                                <p class="card-text font-small-3 mb-0">Revenue</p>
                                            </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>


                    <div class="row match-height">
                        
                    </div>
                    
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
            <!-- Full calendar start -->
<section>
    <div class="card-header">
        <h4 class="card-title">En desarrollo las agendas Paciencia saldra bien... :)</h4>
        <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0"> </p>
        </div>
    </div>
    <div class="app-calendar overflow-hidden border">
      <div class="row g-0">
        <!-- Sidebar -->
        <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column" id="app-calendar-sidebar">
          <div class="sidebar-wrapper">
            <div class="card-body d-flex justify-content-center">
              <button
                class="btn btn-primary btn-toggle-sidebar w-100"
                data-bs-toggle="modal"
                data-bs-target="#add-new-sidebar"
              >
                <span class="align-middle">Crear</span>
              </button>
            </div>
            <div class="card-body pb-0">
              <h5 class="section-label mb-1">
                <span class="align-middle">Filtros</span>
              </h5>
              <div class="form-check mb-1">
                <input type="checkbox" class="form-check-input select-all" id="select-all" checked />
                <label class="form-check-label" for="select-all">Ver Todos</label>
              </div>
              <div class="calendar-events-filter">
                <div class="form-check form-check-danger mb-1">
                  <input
                    type="checkbox"
                    class="form-check-input input-filter"
                    id="personal"
                    data-value="personal"
                    checked
                  />
                  <label class="form-check-label" for="personal">Personal</label>
                </div>
                <div class="form-check form-check-primary mb-1">
                  <input
                    type="checkbox"
                    class="form-check-input input-filter"
                    id="business"
                    data-value="business"
                    checked
                  />
                  <label class="form-check-label" for="business">Empresas</label>
                </div>
                <div class="form-check form-check-warning mb-1">
                  <input type="checkbox" class="form-check-input input-filter" id="family" data-value="family" checked />
                  <label class="form-check-label" for="family">Familia</label>
                </div>
                <div class="form-check form-check-success mb-1">
                  <input
                    type="checkbox"
                    class="form-check-input input-filter"
                    id="holiday"
                    data-value="holiday"
                    checked
                  />
                  <label class="form-check-label" for="holiday">Otros</label>
                </div>
                <div class="form-check form-check-info">
                  <input type="checkbox" class="form-check-input input-filter" id="etc" data-value="etc" checked />
                  <label class="form-check-label" for="etc">ETC</label>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-auto">
            <img
              src="{{ asset('images/pages/calendar-illustration.png')}}"
              alt="Calendar illustration"
              class="img-fluid"
            />
          </div>
        </div>
        <!-- /Sidebar -->
  
        <!-- Calendar -->
        <div class="col position-relative">
          <div class="card shadow-none border-0 mb-0 rounded-0">
            <div class="card-body pb-0">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
        <!-- /Calendar -->
        <div class="body-content-overlay"></div>
      </div>
    </div>
    <!-- Calendar Add/Update/Delete event modal-->
    <div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
      <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title">Crear</h5>
          </div>
          <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
            <form class="event-form needs-validation" data-ajax="false" novalidate>
              <div class="mb-1">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Event Title" required />
              </div>
              <div class="mb-1">
                <label for="select-label" class="form-label">Label</label>
                <select class="select2 select-label form-select w-100" id="select-label" name="select-label">
                  <option data-label="primary" value="Business" selected>Business</option>
                  <option data-label="danger" value="Personal">Personal</option>
                  <option data-label="warning" value="Family">Family</option>
                  <option data-label="success" value="Holiday">Holiday</option>
                  <option data-label="info" value="ETC">ETC</option>
                </select>
              </div>
              <div class="mb-1 position-relative">
                <label for="start-date" class="form-label">Start Date</label>
                <input type="text" class="form-control" id="start-date" name="start-date" placeholder="Start Date" />
              </div>
              <div class="mb-1 position-relative">
                <label for="end-date" class="form-label">End Date</label>
                <input type="text" class="form-control" id="end-date" name="end-date" placeholder="End Date" />
              </div>
              <div class="mb-1">
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input allDay-switch" id="customSwitch3" />
                  <label class="form-check-label" for="customSwitch3">All Day</label>
                </div>
              </div>
              <div class="mb-1">
                <label for="event-url" class="form-label">Event URL</label>
                <input type="url" class="form-control" id="event-url" placeholder="https://www.google.com" />
              </div>
              <div class="mb-1 select2-primary">
                <label for="event-guests" class="form-label">Add Guests</label>
                <select class="select2 select-add-guests form-select w-100" id="event-guests" multiple>
                  <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                  <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                  <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                  <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                  <option data-avatar="9-small.png" value="Sandy Vega">Sandy Vega</option>
                  <option data-avatar="11-small.png" value="Cheryl May">Cheryl May</option>
                </select>
              </div>
              <div class="mb-1">
                <label for="event-location" class="form-label">Location</label>
                <input type="text" class="form-control" id="event-location" placeholder="Enter Location" />
              </div>
              <div class="mb-1">
                <label class="form-label">Description</label>
                <textarea name="event-description-editor" id="event-description-editor" class="form-control"></textarea>
              </div>
              <div class="mb-1 d-flex">
                <button type="submit" class="btn btn-primary add-event-btn me-1">Add</button>
                <button type="button" class="btn btn-outline-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary update-event-btn d-none me-1">Update</button>
                <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/ Calendar Add/Update/Delete event modal-->
  </section>
  <!-- Full calendar end -->
        </div>
    </div>
    <!-- END: Content-->
@endsection

