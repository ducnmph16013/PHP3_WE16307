<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    
    public function index(){
        return view('client.product');
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('client.product', compact('product'));
    }
    
}
