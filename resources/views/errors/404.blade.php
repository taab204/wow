{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}



@include('admin.layout.head')

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <!-- Error page-->
          <div class="misc-wrapper"><a class="brand-logo" href="{{ route('admin_home') }}">
              
              <h2 class="brand-text text-primary ms-1">MARRA</h2></a>
            <div class="misc-inner p-2 p-sm-3">
              <div class="w-100 text-center">
                <h2 class="mb-1">Página no encontrada 🕵🏻‍♀️</h2>
                <p class="mb-2">Ups! 😖 La URL solicitada no se encontró en este servidor.</p><a class="btn btn-primary mb-2 btn-sm-block" href="{{ route('admin_home') }}">Ir a Inicio</a><img class="img-fluid" src="{{ asset('images/pages/error.svg')}}" alt="Error page"/>
              </div>
            </div>
          </div>
          <!-- / Error page-->
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('js/core/app-menu.min.js')}}"></script>
<script src="{{ asset('js/core/app.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('js/scripts/pages/auth-login.js')}}"></script>
<!-- END: Page JS-->

<script>
  $(window).on('load',  function(){
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  })
</script>