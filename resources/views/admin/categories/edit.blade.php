@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">تعديل الصنف </h2>
        <form action="{{url('categories/update/' . $category->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم الصنف</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}">
                @if ($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection