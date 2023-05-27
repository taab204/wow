{{-- @extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized')) --}}

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
                
                <img class="img-fluid p-4" src="{{ asset('images/illustration/401-error-unauthorized.svg')}}" alt="" />
                                    <p class="lead">Se niega el acceso a esta vista.</p>
                                    <a class="text-arrow-icon" href="{{ route('admin_home') }}">
                                        <i class="ms-0 me-1" data-feather="arrow-left"></i>
                                        Ir a Inicio
                                    </a>

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