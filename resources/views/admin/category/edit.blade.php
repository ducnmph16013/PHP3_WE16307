@extends('layouts.admin.master')

@section('title', 'Sua danh muc san pham')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
                <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-success text-center">{{ session()->get('error') }}</div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">Them danh muc</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.category.update', $cat->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Ten danh muc</label>
                            <input type="text" name="name" value="{{$cat->name}}" class="form-control">
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Them</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection