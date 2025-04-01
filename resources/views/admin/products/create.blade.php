@extends('layouts.admin')
@section('content')
    <div class="container pt-5 mt-5">
        <h2 class="mb-4">أضف منتج جديد</h2>
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text p-3" id="basic-addon1">اسم المنتج</span>
                <input type="text" id="name" name="name" class="form-control p-3" placeholder="منتح جديد"
                    aria-label="الاسم" aria-describedby="basic-addon1">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text p-3" id="basic-addon2">الكمية</span>
                        <input type="number" class="form-control p-3" id="quantity" name="quantity" placeholder="الكمية"
                            aria-label="الكمية" aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text p-3" id="basic-addon3">السعر</span>
                        <input type="number" class="form-control p-3" id="price" name="price" placeholder="السعر"
                            step="0.01" aria-label="السعر" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text p-3" id="basic-addon4">وصف المنتج</span>
                <textarea class="form-control p-3" id="description" name="description" rows="3" aria-label="وصف المنتج"
                    aria-describedby="basic-addon4"></textarea>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text p-2" id="basic-addon5">اختر الصنف</span>
                        <select name="category" id="category" class="form-control dropdown" aria-label="اختر الصنف"
                            aria-describedby="basic-addon5">
                            <option class="p-2" value="0" selected disabled>اختر الصنف &#x26DB; </option>
                            @foreach ($categories as $category)
                                <option class="p-2" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <span class="input-group-text py-2 px-4 bg-secondary dropdown-toggle text-light"></span>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-lg btn-success p-3">
            </div>
        </form>
    </div>
@endsection
