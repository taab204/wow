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
                                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                  </li>
                  <li class="breadcrumb-item active">Layout Full
                  </li> --}}
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
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <div class="alert-body"><strong>Comunicado:</strong> Todos los Asesores deben de ir al modulo
                                &nbsp;<a class="text-primary" href="{{ route('campacitacionempleado') }}" target="_blank">CAPACITACIÓN</a>&nbsp; .</div>
                        </div>
                    </div>
                </div><!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>🎉 Al MEJOR ASESOR! 🎉</h5>
                                    <p class="card-text font-small-3">Puesdes ser tú.</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="#">100</a>
                                    </h3>
                                    {{-- <button type="button" class="btn btn-primary">Ver más</button> --}}
                                    <img src="{{ asset('images/illustration/badge.svg') }}" class="congratulation-medal"
                                        alt="Medal Pic" />
                                    <p class="card-text font-small-3">Ventas por mes</p>
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-5 col-md-6 col-12">
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
                                                    <h4 class="fw-bolder mb-0">{{ $total_venta }}</h4>
                                                    <p class="card-text font-small-3 mb-0">Registro SGC</p>
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
                                                    <h4 class="fw-bolder mb-0">{{ $total_pendiente }}</h4>
                                                    <p class="card-text font-small-3 mb-0">Pendientes</p>
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
                                                    <h4 class="fw-bolder mb-0">{{ $total_volver_llamar }}</h4>
                                                    <p class="card-text font-small-3 mb-0">Completados</p>
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

                        <!-- Transaction Card -->
                        <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-transaction">
                            <div class="card-header">
                            <h4 class="card-title">Registros del Día 
                                <div class="small">
                                <span class="fw-500 text-primary">@php
                                    $fecha = new DateTime();
                                    $nombre_dia = $fecha->format('w');
                                    switch ($nombre_dia) {
                                        case 1:
                                            $nombre_dia = 'Lunes';
                                            break;
                                        case 2:
                                            $nombre_dia = 'Martes';
                                            break;
                                        case 3:
                                            $nombre_dia = 'Miercoles';
                                            break;
                                        case 4:
                                            $nombre_dia = 'Jueves';
                                            break;
                                        case 5:
                                            $nombre_dia = 'Viernes';
                                            break;
                                        case 6:
                                            $nombre_dia = 'Sabado';
                                            break;
                                        case 0:
                                            $nombre_dia = 'Domingo';
                                            break;
                                    }
                                    echo $nombre_dia;
                                @endphp</span>
                                , @php
                                    $dt = new DateTime();
                                    echo $dt->format(' d M Y');
                                @endphp
                                @php
                                    $dt = new DateTime();
                                    echo $dt->format('H:i:s');
                                @endphp
                            </div>
                        </h4>
                            {{-- <div class="dropdown chart-dropdown">
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Last Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                                </div>
                            </div> --}}
                            </div>
                            <div class="card-body">
                                
                             @foreach ($relacion_Ventas_Asesores as $row)   
                            <div class="transaction-item">
                                
                                <div class="d-flex">
                                <div class="avatar bg-light-primary rounded float-start">
                                    <div class="avatar-content">
                                    <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                
                                    
                                
                                <div class="transaction-percentage">
                                    <h6 class="transaction-title"></h6>
                                    
                                    <small>{{$row->asesor }}</small>
                                </div>
                                </div>
                                <div class="fw-bolder text-danger">{{ $row->total }}</div>
                                 
                            </div>
                            @endforeach 
                           
                            {{-- <div class="transaction-item">
                                <div class="d-flex">
                                <div class="avatar bg-light-info rounded float-start">
                                    <div class="avatar-content">
                                    <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                    </div>
                                </div>
                                <div class="transaction-percentage">
                                    <h6 class="transaction-title">Transfer</h6>
                                    <small>Refund</small>
                                </div>
                                </div>
                                <div class="fw-bolder text-success">+ $98</div>
                            </div> --}}
                            </div>
                        </div>
                        </div>
                        <!--/ Transaction Card -->
                    </div>


                    <div class="row match-height">
                        {{-- <div class="col-lg-4 col-12">
    <div class="row match-height">
      <!-- Bar Chart - Orders -->
      <div class="col-lg-6 col-md-3 col-6">
        <div class="card">
          <div class="card-body pb-50">
            <h6>Orders</h6>
            <h2 class="fw-bolder mb-1">2,76k</h2>
            <div id="statistics-order-chart"></div>
          </div>
        </div>
      </div>
      <!--/ Bar Chart - Orders -->

      <!-- Line Chart - Profit -->
      <div class="col-lg-6 col-md-3 col-6">
        <div class="card card-tiny-line-stats">
          <div class="card-body pb-50">
            <h6>Profit</h6>
            <h2 class="fw-bolder mb-1">6,24k</h2>
            <div id="statistics-profit-chart"></div>
          </div>
        </div>
      </div>
      <!--/ Line Chart - Profit -->

      <!-- Earnings Card -->
      <div class="col-lg-12 col-md-6 col-12">
        <div class="card earnings-card">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <h4 class="card-title mb-1">Earnings</h4>
                <div class="font-small-2">This Month</div>
                <h5 class="mb-1">$4055.56</h5>
                <p class="card-text text-muted font-small-2">
                  <span class="fw-bolder">68.2%</span><span> more earnings than last month.</span>
                </p>
              </div>
              <div class="col-6">
                <div id="earnings-chart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Earnings Card -->
    </div>
  </div> --}}

                        <!-- Revenue Report Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-revenue-budget">
                                <div class="row mx-0">
                                    <div class="col-md-8 col-12 revenue-report-wrapper">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <h4 class="card-title mb-50 mb-sm-0"> Total de Validados por Asesores</h4>
                                            {{-- <div class="d-flex align-items-center">
              <div class="d-flex align-items-center me-2">
                <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                <span>Earning</span>
              </div>
              <div class="d-flex align-items-center ms-75">
                <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                <span>Expense</span>
              </div>
            </div> --}}
                                        </div>

                                        {{-- <div id="revenue-report-chart"></div> --}}
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="userChart"
                                                    style="min-height: 250px; height: 750px; max-height: 750px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-4 col-12 budget-wrapper">
                                        {{-- <div class="btn-group">
            <button
              type="button"
              class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              2020
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">2020</a>
              <a class="dropdown-item" href="#">2019</a>
              <a class="dropdown-item" href="#">2018</a>
            </div>
          </div> --}}
                                        <h4 class="card-title mb-50 mb-sm-0">Pendientes por Meses</h4>
                                        {{-- <h2 class="mb-25">S/23232</h2> --}}
                                        {{-- <div class="d-flex justify-content-center">
            <span class="fw-bolder me-25">Budget:</span>
            <span>56,800</span>
          </div> --}}
                                        {{-- <div id="budget-chart"></div> --}}
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="myChart"
                                                    style="min-height: 250px; height: 750px; max-height: 750px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                        {{-- <button type="button" class="btn btn-primary">Mas</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Revenue Report Card -->
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    {{-- <script>
                                $(document).ready(function){
                                    const cData = JSON.parse('</*?php echo $infcom; ?>')

                                };
                            </script> --}}

                    <script type="text/javascript">
                        var labels = {{ Js::from($labels) }};
                        var users = {{ Js::from($data) }};

                        const data = {
                            labels: labels,
                            datasets: [{
                                label: 'Total Pendientes',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: users,
                            }]
                        };

                        const config = {
                            type: 'bar',
                            data: data,
                            options: {}
                        };

                        const myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
                    </script>
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <!-- CHARTS -->
                    <script>
                        var ctx = document.getElementById('userChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            // The type of chart we want to create
                            type: 'bar',
                            // The data for our dataset
                            data: {
                                labels: {!! json_encode($chart->labels) !!},
                                datasets: [{
                                    label: 'Total',
                                    backgroundColor: {!! json_encode($chart->colours) !!},
                                    data: {!! json_encode($chart->dataset) !!},
                                }, ]
                            },
                            // Configuration options go here
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,
                                            callback: function(value) {
                                                if (value % 1 === 0) {
                                                    return value;
                                                }
                                            }
                                        },
                                        scaleLabel: {
                                            display: false
                                        }
                                    }]
                                },
                                legend: {
                                    labels: {
                                        // This more specific font property overrides the global property
                                        fontColor: '#122C4B',
                                        fontFamily: "'Muli', sans-serif",
                                        padding: 25,
                                        boxWidth: 25,
                                        fontSize: 14,
                                    }
                                },
                                layout: {
                                    padding: {
                                        left: 10,
                                        right: 10,
                                        top: 0,
                                        bottom: 10
                                    }
                                }
                            }
                        });
                    </script>

                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
