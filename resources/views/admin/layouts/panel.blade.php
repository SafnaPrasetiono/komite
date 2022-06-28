<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="safna prasetiono">
    <meta name="description"
        content="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu (KOPITU) dibentuk sebagai wadah di tingkat nasional yang menyatukan pelaku usaha dan pemangku kepentingan lain baik pemerintah maupun non pemerintah lintas sectoral dan multi sectoral untuk bersinergi meningkatkan kemampuan bersaing UMKM Indonesia.">
    <meta name="keywords" content="kopitu, kopitu umkm, komite, komite umkm, komite-umkm, umkm"
        type="application/rss+xml" title="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu » Feed"
        href="https://www.kopitu.co.id/feed/">
    <link rel="alternate" type="application/rss+xml"
        title="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu » Comments Feed"
        href="https://www.kopitu.co.id/comments/feed/">

    <meta name="msapplication-navbutton-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />
    <link rel="icon" type="image/png" href="{{asset('/images/logo/kopitu.png')}}" />


    @yield('head')
    <link rel="stylesheet" href="{{ url('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/admin/panel.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/animated.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('/dist/owl/css/owl.carousel.min.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Pacifico&display=swap"
        rel="stylesheet">
    @livewireStyles
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">10</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2 overflow-hidden text-truncate" href="#">
                                <p class="lh-1 mb-0 fw-bold">Sample</p>
                                <small class="content-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Quia sint laboriosam in architecto earum.</small>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            @if (auth('admin')->user()->avatar == 'sample-images.png')
                    <img src="{{ url('images/avatar/' . auth('admin')->user()->avatar) }}"
                        alt="{{auth('admin')->user()->username}}" class="img-user" width="64px"
                        height="64px">
                    @else
                    <img src="{{ url('images/avatar/admin/' . auth('admin')->user()->avatar) }}"
                        alt="{{auth('admin')->user()->username}}" class="img-user" width="64px"
                        height="64px">
                    @endif
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                @if (auth('admin')->user()->avatar == 'sample-images.png')
                                <img src="{{ url('images/avatar/' . auth('admin')->user()->avatar) }}"
                                    alt="{{auth('admin')->user()->username}}" class="img-user me-2" width="64px"
                                    height="64px">
                                @else
                                <img src="{{ url('images/avatar/admin/' . auth('admin')->user()->avatar) }}"
                                    alt="{{auth('admin')->user()->username}}" class="img-user me-2" width="64px"
                                    height="64px">
                                @endif
                                <div class="d-block mt-1">
                                    <p class="fw-bold m-0 lh-1">{{auth('admin')->user()->username}}</p>
                                    <small>{{auth('admin')->user()->email}}</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="btnLogout dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block p-3">
                    @if (auth('admin')->user()->avatar == 'sample-images.png')
                    <img src="{{ url('images/avatar/' . auth('admin')->user()->avatar) }}"
                        alt="{{auth('admin')->user()->username}}" class="slider-img-user mb-2" width="64px"
                        height="64px">
                    @else
                    <img src="{{ url('images/avatar/admin/' . auth('admin')->user()->avatar) }}"
                        alt="{{auth('admin')->user()->username}}" class="slider-img-user mb-2" width="64px"
                        height="64px">
                    @endif
                    <p class="fw-bold mb-0 lh-1 text-white">{{auth('admin')->user()->username}}</p>
                    <small class="text-white">{{auth('admin')->user()->email}}</small>
                </div>
            </div>
            <div class="slider-body px-1 pb-4">
                <nav class="nav flex-column" id="nav-acordion" role="tablist" aria-multiselectable="true">
                    <a class="nav-link px-3 active" href="{{ route('admin.index') }}">
                        <i class="fa fa-home box-icon" aria-hidden="true"></i>Home
                    </a>
                    <a class="nav-link px-3" href="{{ route('admin.profile') }}">
                        <i class="fas fa-user box-icon" aria-hidden="true"></i>Profile
                    </a>
                    <hr class="soft my-1 bg-white">
                    {{-- <a class="nav-link d-flex align-items-center px-3" href="#loker" type="button"
                        data-bs-toggle="collapse" data-bs-target="#loker" aria-expanded="true" aria-controls="loker">
                        <i class="fas fa-briefcase box-icon fa-fw"></i>Loker <i class="fas fa-angle-down ms-auto"></i>
                    </a>
                    <div id="loker" class="accordion-collapse collapse" data-bs-parent="#nav-accordion">
                        <a class="nav-link ps-4" href="#">
                            <i class="fas fa-users box-icon fa-fw"></i>Magang
                        </a>
                        <a class="nav-link ps-4" href="#">
                            <i class="far fa-user-hard-hat box-icon fa-fw"></i>Bursa Kerja
                        </a>
                    </div> --}}
                    <a class="nav-link px-3" href="{{ route('admin.events') }}">
                        <i class="fas fa-calendar-alt box-icon"></i>Events
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="{{ route('admin.news') }}">
                        <i class="fas fa-newspaper box-icon" aria-hidden="true"></i>Berita
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="{{ route('admin.gallery') }}">
                        <i class="fas fa-images box-icon"></i>Galery
                    </a>
                    <a class="nav-link px-3" href="{{ route('admin.banners') }}">
                        <i class="fas fa-image box-icon"></i>Banners
                    </a>
                    {{--
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="#">
                        <i class="fas fa-file-alt box-icon fa-fw"></i>Pages
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fas fa-users box-icon fa-fw"></i>User Data
                    </a> --}}
                    <hr class="soft my-1 bg-white">
                    <a class="btnLogout nav-link px-3" href="#">
                        <i class="fas fa-sign-out-alt box-icon"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            @yield('pages')
        </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ url('/dist/style/js/popper.js') }}"></script>
    <script src="{{ url('/dist/app/js/app.js') }}"></script>
    <script src="{{ url('/dist/style/js/alert.js') }}"></script>
    <script src="{{ url('/dist/style/js/admin/panel.js') }}"></script>
    {{-- <script src="{{ url('/dist/style/js/admin/chart.js') }}"></script> --}}
    <script src="{{ url('/dist/ckeditor5/ckeditor.js') }}"></script>
    @livewireScripts

    @yield('script')

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Good Jobs!',
            text: '{{ session()->get("success") }}',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: '{{ session()->get("error") }}',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
    @endif

</body>

</html>