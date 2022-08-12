@extends('layouts.admin.master')

@section('title', 'Danh sach san pham')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
                <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-success text-center">{{ session()->get('error') }}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Hinh anh</th>
                        <th>Ten san pham</th>
                        <th>Gia</th>
                        <th>Tinh trang</th>
                        <th class="text-right">Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td><img src="/{{$product->image}}" style="width:100px;aspect-ratio:1/1;object-fit:cover"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>@if($product->status == 1) Hien thi @else Khong hien thi @endif</td>
                            <td class="text-right">
                                <a href="{{route('admin.product.edit', $product->id) }}" class="btn btn-icon btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="" method="POST" class="d-inline" onclick="return confirm('Ban co muon xoa danh muc nay?')">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection