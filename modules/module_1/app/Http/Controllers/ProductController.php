<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Manufacturer;

class ProductController extends Controller
{
    public function index($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        $products = $manufacturer->products;

        return view('products.index', compact('manufacturer', 'products'));
    }
}
