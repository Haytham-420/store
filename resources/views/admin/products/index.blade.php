@extends('layouts.admin')
@section('content')
    <div class="container pt-5 mt-5">
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">إضافة منتج جديد</a>
        <h2 class="mb-4">قائمة المنتجات</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Product Row -->
                @foreach ($products as $key => $product)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name}}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <a href="{{ url('admin/products/edit/'.$product->id)}}" class="btn btn-sm btn-warning">
                                تعديل
                            </a>
                            <a href="{{ url('admin/products/delete/'.$product->id) }}" class="btn btn-sm btn-danger">
                                حذف
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{$products->links()}}
    </div>
@endsection
