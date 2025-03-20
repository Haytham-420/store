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
            @foreach ($products as $product)
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="product-card">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em">140x140</text>
                        </svg>

                        <h2 class="fw-normal">{{$product->name}}</h2>
                        <p>{{$product->description}}</p>
                        <p><a class="btn btn-secondary mt-auto" href="#">عرض التفاصيل</a></p>
                    </div>
                </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
