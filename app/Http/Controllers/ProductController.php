<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $prod = Product::orderBy('name')->get();

        return inertia('Product', [
            'product' => $prod
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        Product::create($request->all());

        return redirect('/products')->with('create', 'Product created successfully');
    }

    public function show()
    {
        $prods = Product::orderBy('name')->get();

        $pdf = Pdf::loadView('product-list', compact('prods'));
        return $pdf->download('product-list.pdf');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products')->with('delete', 'Product deleted successfully');
    }
}
