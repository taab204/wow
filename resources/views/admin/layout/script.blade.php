@yield('scripts')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{ asset('vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset('vendors/js/extensions/polyfill.min.js')}}"></script>

    <script src="{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/jszip.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>

    <script src="{{ asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>

    <script src="{{ asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{ asset('vendors/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('vendors/js/extensions/moment.min.js')}}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> --}}
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('js/core/app-menu.min.js')}}"></script>
    <script src="{{ asset('js/core/app.min.js')}}"></script>
    <script src="{{ asset('js/scripts/customizer.min.js')}}"></script>
    <!-- END: Theme JS-->


    <!-- BEGIN: Page JS-->
    <script src="{{ asset('js/scripts/pages/auth-login.js')}}"></script>
    <script src="{{ asset('js/scripts/components/components-navs.min.js')}}"></script>
    {{-- <script src="{{ asset('js/scripts/tables/table-datatables-basic.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/scripts/tables/table-datatables-advanced.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/scripts/tables/table-datatables-advanced.js')}}"></script> --}}
      {{-- <script src="{{ asset('js/scripts/tables/table-marra.js')}}"></script> --}}
    <script src="{{ asset('js/scripts/components/components-navs.min.js')}}"></script>
    <script src="{{ asset('js/scripts/extensions/ext-component-sweet-alerts.min.js')}}"></script>
    <script src="{{ asset('js/scripts/forms/pickers/form-pickers.min.js')}}"></script>
    <script src="{{ asset('js/scripts/forms/form-select2.min.js')}}"></script>

    <script src="{{ asset('js/scripts/pages/app-calendar-events.min.js')}}"></script>

    <script src="{{ asset('js/scripts/pages/app-calendar.min.js')}}"></script>
    <!-- END: Page JS-->


<script>
  $(window).on('load',  function(){
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  })
</script> 
<!-- END: Body-->
