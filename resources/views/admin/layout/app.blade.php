<!DOCTYPE html>

{{-- <html class="loading semi-dark-layout" lang="es" data-layout="semi-dark-layout" data-textdirection="ltr"> --}}
<html class="loading" lang="es" data-layout="semi-dark-layout" data-textdirection="ltr">

<head>
    @include('admin.layout.head')
</head>


<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-sticky   footer-fixed menu-expanded pace-done" data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    {{-- <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col=""> --}}
        

    @if (Auth::user())
        @include('admin.layout.nav')

        @if (auth()->user()->rol == 'Administrador')
            @include('admin.layout.mnu_administrador')
        @elseif (auth()->user()->rol == 'Backoffice')
            @include('admin.layout.mnu_backoffice')
        @elseif (auth()->user()->rol == 'Supervisor-Backoffice')
            @include('admin.layout.mnu_backoffices')
        @elseif (auth()->user()->rol == 'Supervisor-Tecnico')
            @include('admin.layout.mnu_tecnicos')
        @elseif (auth()->user()->rol == 'Asistente')
            @include('admin.layout.mnu_asistente')
        @elseif (auth()->user()->rol == 'Tecnico')
            @include('admin.layout.mnu_tecnico')
        @elseif (auth()->user()->rol == 'Supervisor-Asesor')
            @include('admin.layout.mnu_asesors')
        @elseif (auth()->user()->rol == 'AsesorCall')
            @include('admin.layout.mnu_asesorcall')
        @elseif (auth()->user()->rol == 'AsesorCampo')
            @include('admin.layout.mnu_asesorcampo')
        @elseif (auth()->user()->rol == 'Tesoreria')
            @include('admin.layout.mnu_tesoreria')
        @elseif (auth()->user()->rol == 'Almacen')
            @include('admin.layout.mnu_almacen')
        @elseif (auth()->user()->rol == 'Supervisor-Ventas')
            @include('admin.layout.mnu_sventas')
        @endif
        @yield('content')
    @else
        @yield('contenido')
    @endif

    @include('admin.layout.footer')

    @include('admin.layout.script')




    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Encontramos',
                    text: 'Error!',
                    footer: '<a href="">Comunicar a TI</a>'
                })
            </script>
        @endforeach
    @endif

    @if (session()->get('error'))
        <script>
            // toastr.error('Error.');
            Swal.fire({
                icon: 'error',
                title: 'Encontramos',
                text: 'Error!',
                footer: '<a href="">Comunicar a TI</a>'
            })
        </script>
    @endif

    @if (session()->get('estado'))
        <script>
            // toastr.success("El estado se Actualizo!", "Notificación");
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'El estado se Actualizo!!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @if (session()->get('crear'))
        <script>
            // toastr.success("Se grabo con Exito!", "Notificación");
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'Se grabo con Exito!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
    @if (session()->get('actualizo'))
        <script>
            // toastr.success("Se actualizo con Exito!", "Notificación");
            Swal.fire(
                'Se actualizo con Exito!',
                '',
                'success'
            )
        </script>
    @endif

    @if (session()->get('eliminar'))
        <script>
            // toastr.success("Se actualizo con Exito!", "Notificación");
            Swal.fire(
                '¡Eliminado!',
                'Su registro ha sido eliminado..',
                'success'
            )
        </script>
    @endif

    <script>
        window.onload = function(){
            var fecha = new Date(); //Fecha Actual
            var dia = fecha.getDate(); // obteniendo el dia
            var mes = fecha.getMonth()+1; // obteniendo el mes
            var ano = fecha.getFullYear(); // obteniendo el año
    
            if(dia<10)
                dia='0'+dia; //agrega 0 si es menor a 10
            if (mes<10)
                mes = '0' + mes; //agrega 0 si es menor a 10
            document.getElementById('finf').value = ano+ "-"+mes+"-"+dia;
        }
    </script>

    <script>
        var input = document.getElementById('dni');
        input.addEventListener('input', function() {
            if (this.value.length > 8)
                this.value = this.value.slice(0, 11);
        })
        var input = document.getElementById('cel');
        input.addEventListener('input', function() {
            if (this.value.length > 9)
                this.value = this.value.slice(0, 9);
        })
        var input = document.getElementById('cel2');
        input.addEventListener('input', function() {
            if (this.value.length > 9)
                this.value = this.value.slice(0, 9);
        })
    </script>


    <script>
        $(function() {
            $("#slider").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#planesD_wrapper .col-md-6:eq(0)');
            $("#administrador").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#planesD_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#areas").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#planesA_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#planesA").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#planesA_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#planesD").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#planesD_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#estadosA").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#estadosA_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#estadosD").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#estadosD_wrapper .col-md-6:eq(0)');
        });
    </script>


    <script>
        $(function() {
            $("#empleadosA").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": false,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#empleadosA_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#empleadosD").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#empleadosD_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $(function() {
            $("#clientes").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#clientes_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#capacitaciones").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#capacitaciones_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#asesorCampo").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#capacitaciones_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        $(function() {
            $("#backOffice").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#capacitaciones_wrapper .col-md-6:eq(0)');
            $("#asesorCall").DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "lengthMenu": [
                    [50, 100, 500, 1000],
                    [50, 100, 500, 1000]
                ],
            }).buttons().container().appendTo('#capacitaciones_wrapper .col-md-6:eq(0)');
        });
    </script>

<script>
    $(function() {
        $("#reporte_supervisor_ventas").DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": true,
            "info": true,
            "paging": true,
            "lengthMenu": [
                [50, 100, 500, 1000],
                [50, 100, 500, 1000]
            ],
        }).buttons().container().appendTo('#capacitaciones_wrapper .col-md-6:eq(0)');        
    });
</script>

<script>
    $(function() {
        $("#TValidados").DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": true,
            "info": true,
            "paging": true,
            "lengthMenu": [
                [50, 100, 500, 1000],
                [50, 100, 500, 1000]
            ],
        }).buttons().container().appendTo('#TValidados_wrapper .col-md-6:eq(0)');        
    });
</script>


<script>
    $(function() {
        $("#TPagos").DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": true,
            "info": true,
            "paging": true,
            "lengthMenu": [
                [50, 100, 500, 1000],
                [50, 100, 500, 1000]
            ],
        }).buttons().container().appendTo('#TPagos_wrapper .col-md-6:eq(0)');        
    });
</script>

<script>
    $(function() {
        $("#TCompletados").DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": true,
            "info": true,
            "paging": true,
            "lengthMenu": [
                [50, 100, 500, 1000],
                [50, 100, 500, 1000]
            ],
        }).buttons().container().appendTo('#TCompletados_wrapper .col-md-6:eq(0)');        
    });
</script>

<script>
    $(function() {
        $("#TTodos").DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": true,
            "info": true,
            "paging": true,
            "lengthMenu": [
                [50, 100, 500, 1000],
                [50, 100, 500, 1000]
            ],
        }).buttons().container().appendTo('#TTodos_wrapper .col-md-6:eq(0)');        
    });
</script>

<script>
    $(function() {
        $("#reporte_tesoreria_pagos").DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": true,
            "info": true,
            "paging": true,
            "lengthMenu": [
                [50, 100, 500, 1000],
                [50, 100, 500, 1000]
            ],
        }).buttons().container().appendTo('#reporte_tesoreria_pagos_wrapper .col-md-6:eq(0)');        
    });
</script>



    {{-- <script>
        $(function() {

            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "buttons": ["excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $("#administrador").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "buttons": ["excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#administrador_wrapper .col-md-6:eq(0)');
            $("#PlanesDD").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "buttons": ["excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#PlanesDD_wrapper .col-md-6:eq(0)');
            $("#backoffice").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "searching": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#backoffice_wrapper .col-md-6:eq(0)');
            $("#backoffices").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "searching": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#backoffices_wrapper .col-md-6:eq(0)');
            $("#backofficep").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "searching": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#backofficep_wrapper .col-md-6:eq(0)');
            $("#backofficesc").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "searching": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#backofficesc_wrapper .col-md-6:eq(0)');
            $("#backofficesgc").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "searching": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#backofficesgc_wrapper .col-md-6:eq(0)');
            $("#backofficer").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "searching": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#backofficer_wrapper .col-md-6:eq(0)');
            $("#asesores").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#asesores_wrapper .col-md-6:eq(0)');
            $("#capacitaciones").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#capacitaciones_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script> --}}


    <script>
        $(function() {
            $("#id_estado").change(function() {
                if ($(this).val() === "16") {
                    $("#codinst").prop("disabled", false);
                } else {
                    $("#codinst").prop("disabled", true);
                }
            });
        });
    </script>

</body>

</html>
