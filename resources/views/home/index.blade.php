@extends('layouts.front')
@section('content')

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
