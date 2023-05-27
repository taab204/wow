<nav class="header-navbar navbar navbar-expand-lg align-items-center navbar-light navbar-shadow fixed-top">
    
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item dropdown dropdown-notification me-25">
                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                    <i class="ficon" data-feather="bell"></i>
                    @if (Auth::user()->unreadNotifications()->count()>0)
                    <span class="badge rounded-pill bg-danger badge-up">
                        @php $ncount = Auth::user()->unreadNotifications()->count() @endphp {{ $ncount }} 
                    </span>
                        
                    @endif


                    
                </a>

                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                  <li class="dropdown-menu-header">
                    <div class="dropdown-header d-flex">
                      <h4 class="notification-title mb-0 me-auto">Notificaciones</h4>
                      {{-- <div class="badge rounded-pill badge-light-primary">@php $ncount = Auth::user()->unreadNotifications()->count() @endphp {{ $ncount }} Nuevos</div> --}}
                      <div class="badge rounded-pill badge-light-primary"><a href="{{ route('admin_mark_all_notifications') }} ">Todos leídos</a></div>
                    </div>
                  </li>
                        @php
                            $user = Auth::user();
                        @endphp
                            <li class="scrollable-container media-list">
                                @foreach (  Auth::user()->unreadNotifications as $notificaiones)
                                <a class="d-flex" href="{{ route('admin_mark_a_notification',[$notificaiones->id]) }}">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">
                                                    <i class="avatar-icon" data-feather="{{ $notificaiones->data['icon'] }}"></i>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading">
                                                <span class="fw-bolder">{{ $notificaiones->data['id_admin'] }}</span>
                                                <span class="badge rounded-pill badge-light-success">{{ ($notificaiones->data['title'])}}  {{ ($notificaiones->data['id_estado'])}}</span>
                                            </p>
                                            <p class="media-heading">
                                                <span class="fw-bolder"> {{ ($notificaiones->data['depart'])}}</span>
                                            </p>
                                        
                                        <small class="notification-text">  {{ Carbon\Carbon::parse($notificaiones->created_at)->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </li>
                    {{-- <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Ver</a></li> --}}
                </ul>
            </li>

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex"><span class="user-name fw-bolder">{{ Auth::guard('admin')->user()->name }}</span><span class="user-status">{{ Auth::guard('admin')->user()->rol }}</span></div><span class="avatar"><img class="round" src="{{ asset('uploads/'. Auth::guard('admin')->user()->foto) }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{ route('admin_profile') }}"><i class="me-50" data-feather="user"></i> Perfil</a>
                    {{-- <a class="dropdown-item" href="#"><i class="me-50" data-feather="mail"></i> Inbox</a>
                    <a class="dropdown-item" href="#"><i class="me-50" data-feather="check-square"></i> Task</a>
                    <a class="dropdown-item" href="#"><i class="me-50" data-feather="message-square"></i> Chats</a> --}}
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="#"><i class="me-50" data-feather="settings"></i> Settings</a>
                    <a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a>
                    <a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a> --}}
                    <a class="dropdown-item" href="{{ route('admin_logout') }}"><i class="me-50" data-feather="power"></i> Salir</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<script>
    function sendMarkResquest(id=null){
        return $.ajax("route('mark')")

    }
</script>