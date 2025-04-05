@extends('layouts.admin')
@section('content')
    <div class="container pt-5 mt-5">
        {{-- Display Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">إضافة صنف جديد</a>
        <h2 class="mb-4">قائمة الأصناف</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('admin/categories/edit/' . $category->id) }}" class="btn btn-sm btn-warning">
                                تعديل
                            </a>
                            <a href="{{ url('admin/categories/delete/' . $category->id) }}" class="btn btn-sm btn-danger">
                                حذف
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection
