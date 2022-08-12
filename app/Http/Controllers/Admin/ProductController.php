<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('admin.product.list', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required',
            'discount'  => 'required',
            'image' => 'required|image',
            'category_id'   => 'required|not_in:0'
        ], [
            'required'  => ':attribute khong duoc de trong',
            'image' => 'Sai dinh dang hinh anh'
        ], [
            'name'  => 'Ten san pham',
            'price' => 'Gia san pham',
            'discount'  => '% giam gia',
            'image' => 'Anh dai dien',
            'category_id'   => 'Danh muc san pham'
        ]);

        $product = new Product();
    
            $product->fill($request->all());
    
            if ($request->hasFile('image')) {
                // 2.1 Xử lý tên file
                $thumb = $request->image;
                $thumbName = $thumb->hashName();
                // 2.2 Lưu file vào trong bộ nhớ
                // 2.3 Lấy đường dẫn file vừa lưu gán vào cho $user
                $product->image = $thumb->storeAs('images/products', $thumbName);
                // Lưu vào thư mục storages/app/images/users
                // Cần link vào public để đọc ảnh
                // config/filesystems.php mảng links public images ~ storage images
                // chạy lệnh php artisan storage:link để link thư mục
            } else {
                $product->image = 'default.jpg';
            }
            // 3. Lưu $user vào CSDL
            $product->save();
            return redirect()->route('admin.product.list')->with('success', 'Thêm mới sản phẩm thành công');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }
    
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->fill($request->all());
    
            if ($request->hasFile('image')) {
                // 2.1 Xử lý tên file
                $thumb = $request->image;
                $thumbName = $thumb->hashName();
                // 2.2 Lưu file vào trong bộ nhớ
                // 2.3 Lấy đường dẫn file vừa lưu gán vào cho $user
                $product->image = $thumb->storeAs('images/products', $thumbName);
                // Lưu vào thư mục storages/app/images/users
                // Cần link vào public để đọc ảnh
                // config/filesystems.php mảng links public images ~ storage images
                // chạy lệnh php artisan storage:link để link thư mục
            }
            // 3. Lưu $user vào CSDL
            $product->save();
            return redirect()->route('admin.product.list')->with('success', 'Cap nhat san pham thanh cong');
    }

}
