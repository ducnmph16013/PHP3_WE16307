@extends('layouts.admin.master')

@section('title', 'Danh muc san pham')

@section('content')
    <div class="row">
        <a href="/admin/category/add"><button type="button" class="btn btn-primary">Them</button></a>
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
                        <th>Ten danh muc</th>
                        <th class="text-right">Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                        <tr>
                            <td>{{ $cat->name }}</td>
                            <td class="text-right">
                                <a href="{{ route('admin.category.edit', $cat->id) }}" class="btn btn-icon btn-primary"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.category.delete', $cat->id) }}" method="POST" class="d-inline" onclick="return confirm('Ban co muon xoa danh muc nay?')">
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