<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view ('Products.index', compact('products'));
    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->back();
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request, Product $product){
        $data = $request ->validate([
            'name'=>'string|required',
            'prise'=>'required|decimal:0,2',
            'descripshion'=>'string'
        ]);
        $product->create($data);
        return redirect()->back();
    }
}
