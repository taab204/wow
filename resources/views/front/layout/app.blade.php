<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>TechymTel</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('front/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fonts.css') }}">
    <script type="text/javascript">
        document.oncontextmenu = function() {
            return false;
        }
    </script>

</head>

<body>
    <!-- Page preloader-->
    <div class="page-loader">
        <div class="page-loader-body">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"> </div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"> </div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"> </div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"> </div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-->
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-corporate">
                <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
                    data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true"
                    data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span>
                    </div>
                    <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
                        <div class="rd-navbar-top-panel-inner">
                            <ul class="list-inline">
                                <li class="box-inline list-inline-item"><span
                                        class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                                    <ul class="list-comma">
                                        <li><a href="https://bit.ly/3pGgcZt">946 6611 11</a></li>
                                        <!-- <li><a href="tel:#">   </a></li> -->
                                    </ul>
                                </li>
                                <!-- <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></li> -->
                                <li class="box-inline list-inline-item"><span
                                        class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a
                                        href="mailto:#">ventas@wow.net.pe</a></li>
                            </ul>
                            <ul class="list-inline">
                                <!--<li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                   <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>-->
                            </ul>
                        </div>
                        <div class="rd-navbar-top-panel-inner"><a
                                class="button button-sm button-secondary button-nina"
                                href="{{ route('admin_login') }}" target="{_blank}">Ingresar</a></div>
                    </div>
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img
                                        class="logo-default" src="{{ asset('front/images/logo-default-208x46.png') }}"
                                        alt="" width="208" height="46" /><img class="logo-inverse"
                                        src="{{ asset('front/images/logo-inverse-208x46.png') }}" alt=""
                                        width="208" height="46" /></a></div>
                        </div>
                        <div class="rd-navbar-aside-center">
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="#">Inicio</a>
                                    </li>
                                    <!-- <li><a href="about-us.html">Planes</a>
                                    </li> -->
                                    <li><a href="#">Contacto</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina"
                                href="https://bit.ly/3pGgcZt">946 661 111</a></div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="section">
            <div class="swiper-form-wrap">
                <!-- Swiper-->
                <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker"
                    data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-slide-bg="{{ asset('front/images/swiper-slide-1.jpg') }}">
                            <div class="swiper-slide-caption">
                                <div class="container container-bigger swiper-main-section">
                                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                            <h2>APROVECHA</h2>
                                            <div class="divider "></div>
                                            <!-- <p class="text-spacing-sm"> </p><a class="button button-default-outline button-nina button-sm" href="#">Asesor</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide-bg="{{ asset('front/images/swiper-slide-2.jpg') }}">
                            <div class="swiper-slide-caption">
                                <div class="container container-bigger swiper-main-section">
                                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                            <h2>Esta Promoción</h2>
                                            <div class="divider "></div>
                                            <!-- <p class="text-spacing-sm"> </p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide-bg="{{ asset('front/images/swiper-slide-3.jpg') }}">
                            <div class="swiper-slide-caption">
                                <div class="container container-bigger swiper-main-section">
                                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                            <h2>Duplica Tu Velocidad</h2>
                                            <div class="divider "></div>
                                            <!-- <p class="text-spacing-sm"> </p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Swiper controls-->
                    <div class="swiper-pagination-wrap">
                        <div class="container container-bigger">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container container-bigger form-request-wrap form-request-wrap-modern ">
                    <div class="row row-fix justify-content-sm-center justify-content-lg-end">

                        <div class="col-lg-6 col-xxl-5">
                            <div class="form-request form-request-modern bg-gray-lighter novi-background">
                                <h5>Infórmanos de tu Referido : </h5>
                                <h7>Tus datos WOW! valen</h7>

                                <!-- RD Mailform-->
                                <form class="rd-mailform form-fix" action="{{ route('front_datero') }}"
                                    method="post" enctype="multipart/form-data">
                                    <div class="row row-5 row-fix">
                                        @csrf

                                        <div class="col-sm-12">
                                            <label class="form-label-outside" for="form-1-name">DNI (Referido)</label>
                                            <input class="form-input" id="form-1-name" type="text" name="dni"
                                                placeholder="Ingresar DNI (Referido)" value="{{ old('dni') }}" required="" />
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="form-label-outside" for="form-1-name">Nombres y Apellidos (Referido)</label>
                                            <input class="form-input" id="form-1-name" type="text" name="name"
                                                placeholder="Ingresar Nombres y Apellidos (Referido)"
                                                value="{{ old('name') }}"required="" />
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="form-label-outside" for="form-1-name">Celular (Referido)</label>
                                            <input class="form-input" id="form-1-name" type="tel" name="cel"
                                                placeholder="Ingresar Celular (Referido)"
                                                value="{{ old('cel') }}" required=""/>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="form-label-outside" for="form-1-name">Correo Electronico</label>
                                            <input class="form-input" id="form-1-name" type="email" name="email"
                                                placeholder="Ingresar Correo Electronico (Referido)"
                                                value="{{ old('email') }}" required=""/>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="form-label-outside" for="form-1-name">Plan :</label>
                                            <select
                                                class="form-control  select2-container--bootstrap select2-search--dropdown  select2-search__field"
                                                name="id_plan" required="">
                                                <option value="1">Seleccione su plan</option>
                                                @foreach ($planes as $row)
                                                    <option value="{{ $row->id }}">{{ $row->plan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="form-label-outside" for="form-1-name">Nombres y Apellidos (Datero)</label>
                                            <input class="form-input" id="form-1-name" type="text" name="dname"
                                                placeholder="Ingresar Nombres y Apellidos (Datero)"
                                                value="{{ old('dname') }}" required=""/>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="form-label-outside" for="form-1-name">Celular
                                                (Datero)</label>
                                            <input class="form-input" id="form-1-name" type="tel" name="dcel"
                                                placeholder="Ingresar Celular (Datero)"
                                                value="{{ old('dcel') }}" required=""/>
                                        </div>


                                    </div>
                                    <div class="form-wrap form-button">
                                        <button class="button button-block button-secondary" data-toggle="modal"
                                            data-target=".bd-example-modal-xl" type="submit">Enviar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Tips & tricks-->
        <section class="section section-lg novi-background bg-cover bg-default text-center">
            <div class="container-wide">
                <div class="row row-50">
                    <div class="col-sm-12">
                        <h3>Nuestros Planes</h3>

                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-carousel-team owl-carousel-inset" data-items="1"
                            data-md-items="2" data-xl-items="3" data-stage-padding="15" data-loop="true"
                            data-margin="30" data-mouse-drag="false" data-dots="true" data-autoplay="true">

                            @foreach ($slide_all as $item)
                                <article class="post-blog"><a class="post-blog-image"><img
                                            src="{{ asset('uploads/' . $item->foto) }}" alt=""
                                            width="570" height="415" /></a>
                                    <div class="post-blog-caption">
                                        <div class="post-blog-caption-header">

                                            <ul class="post-blog-tags">
                                                <li><a class="button-tags" href="">{{ $item->ref }}</a>
                                                </li>
                                            </ul>

                                            @if ($item->btext != '')
                                                <ul class="post-blog-tags">
                                                    <li><a class="button-tags"
                                                            href="{{ $item->burl }}">{{ $item->btext }}</a></li>
                                                </ul>
                                            @endif

                                        </div>
                                        <div class="post-blog-caption-body">
                                            <h5><a class="post-blog-title">{!! $item->text !!}</a></h5>
                                        </div>

                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Minimal-->
        <footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker">
            <div class="container container-wide">
                <div class="row row-fix justify-content-sm-center align-items-md-center row-15">
                    <div class="col-md-10 col-lg-7 col-xl-4">
                        <p class="text-spacing-sm"><a class="button button-sm button-secondary button-nina">Dirección : </a></p><a class="button button-default-outline button-nina button-sm" href="#">Urb. La Moderna Mz G Lt 21</a>
                    </div>

                    <div class="col-md-10 col-lg-7 col-xl-4">
                        <p class="text-spacing-sm"><a class="button button-sm button-secondary button-nina">Teléfono : </a></p><a class="button button-default-outline button-nina button-sm" href="#">946661111</a>
                    </div>

                    <div class="col-md-10 col-lg-7 col-xl-4">
                        <p class="text-spacing-sm"><a class="button button-sm button-secondary button-nina">Correo : </a></p><a class="button button-default-outline button-nina button-sm" href="#">ventas@wow.net.pe</a>
                    </div>

                    <div class="col-md-10 col-lg-7 col-xl-4">
                                <a class="brand-name" href="index.html"><img class="logo-default"
                                src="{{ asset('front/images/sello_footer.png') }}" alt="" width="100"
                                height="46" /><img class="logo-inverse"
                                src="{{ asset('front/images/sello_footer.png') }}" alt="" width="100"
                                height="46" /></a>
                    </div>

                </div>
            </div>
            <div class="container container-wide">
                <div class="row row-fix justify-content-sm-center align-items-md-center row-15">
                    <div class="col-md-10 col-lg-7 col-xl-4">
                        <p class="right">&#169;&nbsp;<span class="copyright-year"></span> Reservados todos los derechos. &nbsp; &nbsp;<a href="">TechymTel</a></p>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <!-- coded by barber-->

    <div class="modal fade bd-example-modal-xl">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_kvdn44jg.json" background="transparent"
            speed="1" style="width: 900px; height: 900px;" loop autoplay></lottie-player>

        <div class="modal-dialog modal-xl">
            <button type="button" class="button button-block button-secondary" data-dismiss="modal">Gracias Tus datos fueron enviados</button>
        </div>
    </div>
</body>
<script type="module" src="https://cdn.jsdelivr.net/npm/@leadsales/leadclick@1.11.1/dist/leadclick/leadclick.esm.js"></script>

<leadclick-widget integrations="2" fburl="https://www.m.me/WowInternet.pe"
    igurl="https://www.instagram.com/leadsales.io/?hl=es"
    waurl="https://api.whatsapp.com/send?phone=51946661111&text=Quiero%20contratar%20el%20servicio%20de%20*WOW*%2C%20por%20favor%20m%C3%A1s%20informaci%C3%B3n%20de%20los%20planes%2C%20vengo%20de%20la%20p%C3%A1gina."
    cta="Contactate con un asesor especializado WOW VENTAS" fontcolor="#e17d0a" bgcolor="#5d0be3"
    instructions="Quiero contratar plan" orientation="left" visible_integrations="WhatsApp,Facebook"
    ispremium="false">
</leadclick-widget>


</html>
