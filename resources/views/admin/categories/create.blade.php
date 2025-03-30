@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4"> أضف صنف جديد</h2>
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم الصنف</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم الصنف"
                    value="{{ old('name') }}">
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
