@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
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
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('categories/edit'.$category->id)}}" class="btn btn-sm btn-warning">
                                تعديل
                            </a>
                            <a href="{{ url('categories/delete'.$category->id) }}" class="btn btn-sm btn-danger">
                                حذف
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
