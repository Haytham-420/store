@extends('layouts.front')
@section('content')
    <div class="container py-3">

        <div class="row pt-5 mb-3 justify-content-center">
            @if (session('login_success'))
                <div class="alert alert-success alert-dismissible fade col-md-6 show mt-5" role="alert">
                    <p class="h5">{{ session('login_success') }}
                        <strong>مرحباً بك {{ Auth::user()->name }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
                    </p>
                </div>
            @endif
        </div>

        <!-- Category Filter -->

        <form method="GET" action="{{ url('/home') }}">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="input-group mt-3 mb-3 ">
                        <span class="input-group-text p-2 bg-secondary text-light" id="basic-addon1">افرز حسب الصنف:</span>
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
            </div>
        </form>

        <hr class="featurette-divider">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @inject('productController', 'App\Http\Controllers\ProductController')
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-1 text-primary">{{ $product->category->name }}</strong>
                            <h5 class="mb-1">{{ $product->name }}</h5>
                            <div class="mb-1 text-muted">${{ $product->price }}</div>
                            <p class="card-text mb-auto" style="height: 50px; overflow: hidden;">
                                {{ $product->description }}
                            </p>
                            <a class="btn btn-secondary " href="#">عرض التفاصيل</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="https://www.aaronfaber.com/wp-content/uploads/2017/03/product-placeholder-wp.jpg"
                                alt="Product Image" width="200" height="250" class="bd-placeholder-img">
                            {{-- <img src="{{asset('images/Haytham-pfp-600.png')}}" alt="Product Image" width="200" height="250"
                                class="bd-placeholder-img" style="object-fit: contain;"> --}}
                        </div>
                    </div>
                </div>
                {{-- end --}}
            @endforeach
        </div><!-- /.row -->

        {{ $products->links() }}

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
