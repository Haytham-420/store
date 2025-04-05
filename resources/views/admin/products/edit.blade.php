@extends('layouts.admin')
@section('content')
    <div class="container pt-5 mt-5">
        <h2 class="mb-4">تعديل المنتج</h2>
        <form action="{{ url('admin/products/update/' . $product->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="input-group mb-3">
                <span class="input-group-text p-3" id="basic-addon1">اسم المنتج</span>
                <input type="text" class="form-control p-3" id="name" name="name"
                    value="{{ old('name', $product->name) }}" aria-label="اسم المنتج" aria-describedby="basic-addon1">
            </div>
            @if ($errors->has('name'))
                <div class="text-danger pb-3">{{ $errors->first('name') }}</div>
            @endif

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text p-3" id="basic-addon2">الكمية</span>
                        <input type="number" class="form-control p-3" id="quantity" name="quantity"
                            value="{{ old('quantity', $product->quantity) }}" aria-label="الكمية"
                            aria-describedby="basic-addon2">
                    </div>
                    @if ($errors->has('quantity'))
                        <div class="text-danger pb-3">{{ $errors->first('quantity') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text p-3" id="basic-addon3">السعر</span>
                        <input type="number" class="form-control p-3" id="price" name="price"
                            value="{{ old('price', $product->price) }}" step="0.01" aria-label="السعر"
                            aria-describedby="basic-addon3">
                    </div>
                    @if ($errors->has('price'))
                        <div class="text-danger pb-3">{{ $errors->first('price') }}</div>
                    @endif
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text p-3" id="basic-addon4">وصف المنتج</span>
                <textarea class="form-control p-3" id="description" name="description" rows="3" aria-label="وصف المنتج"
                    aria-describedby="basic-addon4">{{ old('description', $product->description) }}</textarea>
            </div>
            @if ($errors->has('description'))
                <div class="text-danger pb-3">{{ $errors->first('description') }}</div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text p-2" id="basic-addon5">اختر الصنف</span>
                        <select name="category" id="category" class="form-control dropdown" aria-label="اختر الصنف"
                            aria-describedby="basic-addon5">
                            <option class="p-2" value="0" disabled>اختر الصنف &#x26DB; </option>
                            @foreach ($categories as $category)
                                <option class="p-2" value="{{ $category->id }}"
                                    {{ old('category', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <span class="input-group-text py-2 px-4 bg-secondary dropdown-toggle text-light"></span>
                    </div>
                    @if ($errors->has('category'))
                        <div class="text-danger pb-3">{{ $errors->first('category') }}</div>
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-lg btn-success p-3">
            </div>
        </form>
    </div>
@endsection
