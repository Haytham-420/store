@extends('layouts.front')
@section('content')

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">



        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
                                  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Category Filter -->
        <form method="GET" action="{{ url('/') }}"
            style="background-color: #9ebad6; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            <div class="form-group">
                <label for="category" style=" margin-bottom: 15px;">افرز حسب الصنف:</label>
                <select name="category" id="category" class="form-control" onchange="this.form.submit()">
                    <option value="">جميع الأصناف</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $category ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>

        <hr class="featurette-divider">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @inject('productController', 'App\Http\Controllers\ProductController')
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong
                                class="d-inline-block mb-1 text-primary">{{$productController->getCategoryName($product)}}</strong>
                            <h5 class="mb-1">{{$product->name}}</h5>
                            <div class="mb-1 text-muted">${{$product->price}}</div>
                            <p class="card-text mb-auto" style="height: 50px; overflow: hidden;">{{$product->description}}</p>
                            <a class="btn btn-secondary " href="#">عرض التفاصيل</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="https://www.aaronfaber.com/wp-content/uploads/2017/03/product-placeholder-wp.jpg" alt="Product Image" width="200" height="250" class="bd-placeholder-img">
                        </div>
                    </div>
                </div>

                {{-- end --}}
            @endforeach
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
