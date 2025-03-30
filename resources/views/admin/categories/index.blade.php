@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
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
                <!-- Example Product Row -->
                @foreach ($categories as $key => $category)
                    <tr>
                        <th scope="row">{{ ++$key  }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('admin/categories/edit/'.$category->id)}}" class="btn btn-sm btn-info">
                                تعديل
                            </a>
                            <a href="{{ url('admin/categories/delete/'.$category->id) }}" class="btn btn-sm btn-danger">
                                حذف
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$categories->links()}}
    </div>
@endsection
