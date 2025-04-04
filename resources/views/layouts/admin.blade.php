<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Store Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard-rtl/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/dashboard.rtl.css') }}" rel="stylesheet">
</head>

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

                <!-- Category Filter -->

                <form method="GET" class="mx-5" action="{{ route('products.index') }}">
                    <div class="row justify-content-center">
                        <div class="input-group">
                            <span class="input-group-text p-2 bg-secondary text-light" id="basic-addon1">افرز حسب
                                الصنف:</span>
                            <select name="category" id="category" class="form-control text-dark bg-light dropdown"
                                aria-label="اختر الصنف" aria-describedby="basic-addon1" onchange="this.form.submit()">
                                <option class="collapsed" value="">جميع الأصناف</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id == $category ? 'selected' : '' }}>
                                        {{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text p-3 bg-secondary dropdown-toggle text-light"></span>
                        </div>
                    </div>
                </form>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                            class="d-block mx-2 link-light btn btn-primary text-decoration-none">
                            {{ __('Login') }}
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="d-block mx-2 link-black btn btn-info text-decoration-none">
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

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-5 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-home align-text-bottom" aria-hidden="true">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span data-feather="home" class="align-text-bottom"></span>
                                المتجر
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-shopping-cart align-text-bottom" aria-hidden="true">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                المنتجات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-layers align-text-bottom" aria-hidden="true">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                الأصناف
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <p class="float-end">
        <a href="#" class="link-light">
            <button class="btn btn-lg rounded-circle back-to-top">↑</button>
        </a>
    </p>

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
