<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Store Front Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel-rtl/">


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('assets/dist/css/carousel.rtl.css') }}" rel="stylesheet"> --}}

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/dashboard.rtl.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/headers.css')}}" rel="stylesheet">
</head>

<body>

    {{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">اسم الشركة</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="عرض/إخفاء لوحة التنقل">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="بحث"
            aria-label="بحث">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                {{-- <a class="nav-link px-3" href="#">تسجيل الخروج</a> --}}
    <!-- Authentication Links -->
    {{-- @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link px-3" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link px-3 dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item px-3 " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    {{ __('تسجيل الخروج') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    </div>
    </div>
    </header> --}}


    <header class="p-3  mb-3 fixed-top text-bg-dark shadow border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">الرئيسية</a></li>
                    <li><a href="{{ route('products.index') }}" class="nav-link px-2 text-white">المنتجات</a></li>
                    <li><a href="{{ route('categories.index') }}" class="nav-link px-2 text-white">الأصناف</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">الدعم الفني</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="ابحث..." aria-label="Search">
                </form>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="d-block mx-2 link-light btn btn-secondary text-decoration-none">
                            {{ __('Login') }}
                        </a>
                    @endif

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="d-block mx-2 link-light btn btn-secondary text-decoration-none">
                        {{ __('Register') }}
                    </a>
                    @endif
                @else


                <div class="dropdown text-end">
                    <a href="#" class="d-block link-light btn btn-secondary text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('images/Haytham-pfp-600.png')}}" alt="meow user" width="40" height="40"
                            class="rounded-circle">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu bg-dark text-small">
                        <li><a class="dropdown-item text-white" href="#">cart</a></li>
                        <li><a class="dropdown-item text-white" href="#">Profile</a></li>
                        <li><a class="dropdown-item text-white" href="#">Checkout</a></li>
                        <li>
                            <hr class="dropdown-divider bg-light ">
                        </li>
                        <li><a class="dropdown-item text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            {{ __('تسجيل الخروج') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </header>

    <main>

        @yield('content')

    </main>

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">عد إلى الأعلى</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">سياسة الخصوصية</a> &middot; <a
                href="#">شروط
                الاستخدام</a></p>
    </footer>

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
