<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required'
        ], [
            'required'  => ':attribute khong duoc de trong'
        ], [
            'name'  => 'Ten danh muc'
        ]);
        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        return redirect()
                ->route('admin.category.list')
                ->with('success', 'Them danh muc thanh cong');
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('admin.category.edit', compact('cat'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'  => 'required'
        ], [
            'required'  => ':attribute khong duoc de trong'
        ], [
            'name'  => 'Ten danh muc'
        ]);
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->save();
        return redirect()
                ->route('admin.category.list')
                ->with('success', 'Cap nhat danh muc thanh cong');

    }

    public function destroy($id){
        Category::find($id)->delete();
        return redirect()
                ->route('admin.category.list')
                ->with('success', 'Xoa danh muc thanh cong');
    }

}
