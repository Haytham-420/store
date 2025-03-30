@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">أضف منتج جديد</h2>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
            </div>
            <div class="mb-3">
                <label for="quantityFormControlInput" class="form-label">الكمية</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="الكمية">
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="السعر" step="0.01">
            </div>
            <div class="mb-3">
                <label for="descriptionFormControlTextarea" class="form-label">وصف المنتج</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">اختر الصنف</label>
                <select name="category" id="category" class="form-control">
                    <option value="0" selected disabled>اختر الصنف &#x26DB; </option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection
