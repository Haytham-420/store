@extends('layouts.admin')
@section('content')
    <div class="container pt-5 mt-5">
        <h2 class="mb-4"> أضف صنف جديد</h2>
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text p-3" id="basic-addon1">اسم الصنف</span>
                <input type="text" class="form-control p-3" id="name" name="name" placeholder="اسم الصنف"
                    value="{{ old('name') }}" aria-label="اسم الصنف" aria-describedby="basic-addon1">
            </div>
            @if ($errors->has('name'))
                <div class="text-danger">{{ $errors->first('name') }}</div>
            @endif
            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-lg btn-success p-3">
            </div>
        </form>
    </div>
@endsection
