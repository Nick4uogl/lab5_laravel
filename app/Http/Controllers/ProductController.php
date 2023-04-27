<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(): View
    {
        return view('home', [
            'products' => Product::all(),
        ]);
    }

    public function showSingle(int $id): View
    {
        return view('productPage', [
            'product' => Product::find($id),
        ]);
    }

    public function create(Request $request)
    {
        $productFields = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'discount' => 'required'
        ]);

        Product::create($productFields);

        return redirect('/products');
    }
}
