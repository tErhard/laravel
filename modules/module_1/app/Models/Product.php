<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'manufacturer', 'price', 'production_date'];
}

$products = Product::all();
foreach ($products as $product) {
    echo $product->name;
}

$product = new Product;
$product->name = 'iPhone 12';
$product->manufacturer = 1;
$product->price = 999;
$product->production_date = '2020-10-23';
$product->save();
