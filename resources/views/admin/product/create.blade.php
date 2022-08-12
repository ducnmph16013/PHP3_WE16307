@extends('layouts.admin.master')

@section('title', 'Them san pham')

@section('content')
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class='form-group'>
            <label for="">Name</label>
            <input type="text" name='name' class='form-control'>
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class='form-group'>
            <label for="">Price</label>
            <input type="text" name='price' class='form-control'>
            @error('price')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class='form-group'>
            <label for="">Discount</label>
            <input type="text" name='discount' value="0" class='form-control'>
            @error('discount')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class='form-group'>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" name="image" id="formFile">
              </div>
              @error('image')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class='form-group'>
            <label for="">Categogry</label>
            <select name="category_id" class="form-control">
                <option >Chon danh muc:</option>
                @foreach ($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Noi dung</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <div class='form-group'>
            <label for="">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Hien thi
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Khong hien thi
                </label>
              </div>
        </div>
        <div class='form-group'>
            <button type="submit" class="btn btn-primary">ADD</button>
        </div>

    </form>
@endsection

@section('custom-script')
   <script>
       $(document).ready(function(){
           CKEDITOR.replace('content')
       })
    </script> 
@endsection