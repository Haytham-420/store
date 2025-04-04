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
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/dashboard.rtl.css') }}" rel="stylesheet">
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
            fill: currentColor.
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden.
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch.
        }

        .back-to-top {
            background-color: rgb(133, 18, 251);
            background: :hover:rgb(1, 1, 1);
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000.
        }

        .back-to-top:hover {
            background: rgb(255, 0, 255);
        }
    </style>

</head>

<body>

    <header class="p-3  mb-3 fixed-top text-bg-dark shadow border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 px-3 text-decoration-none">
                    <img src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="Bootstrap Logo" width="40"
                        height="32">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ url('/') }}" class="nav-link px-3 text-primary">
                            <button class="btn btn-secondary btn-sm rounded-pill ">الرئيسية</button>
                        </a></li>
                    <li><a href="{{ route('products.index') }}" class="nav-link px-3 text-primary">
                            <button class="btn btn-secondary btn-sm rounded-pill ">المنتجات</button>
                        </a></li>
                    <li><a href="{{ route('categories.index') }}" class="nav-link px-3 text-primary">
                            <button class="btn btn-secondary btn-sm rounded-pill ">الأصناف</button>
                        </a></li>
                    <li><a href="#" class="nav-link px-3 text-primary">
                            <button class="btn btn-secondary btn-sm rounded-pill ">الدعم الفني</button>
                        </a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="GET"
                    action="{{ route('products.search') }}">
                    <input type="search" name="query" class="form-control" placeholder="ابحث..." aria-label="Search">
                </form>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="d-block mx-2 link-light btn btn-primary text-decoration-none">
                            {{ __('Login') }}
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="d-block mx-2 link-black btn btn-info text-decoration-none">
                            {{ __('Register') }}
                        </a>
                    @endif
                @else
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-light btn btn-secondary text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/Haytham-pfp-600.png') }}" alt="meow user" width="32"
                                height="32" class="rounded-circle">
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
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </header>

    <main>

        @yield('content')
    </main>


    <p class="float-end">
        <a href="#" class="link-light">
            <button class="btn btn-lg rounded-circle back-to-top">↑</button>
        </a>
    </p>

    <!-- FOOTER -->
    <footer class="container">

        <p>&copy; 2002–2025 Company, Inc. &middot; <a href="#">سياسة الخصوصية</a> &middot; <a href="#">شروط
                الاستخدام</a></p>
    </footer>

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
