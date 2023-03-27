<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/products', function () {
    $products = Product::all();
    return view('products.index', ['products' => $products]);
});

Route::get('/products/create', function () {
    return view('products.create');
});

Route::post('/products', function () {
    $product = new Product;
    $product->name = request('name');
    $product->manufacturer = request('manufacturer');
    $product->price = request('price');
    $product->production_date = request('production_date');
    $product->save();
    return redirect('/products');
});

Route::get('/products/{product}', function (Product $product) {
    return view('products.show', ['product' => $product]);
});

Route::get('/manufacturers/{id}/products', 'ProductController@index')->name('products.index');
Route::get('/manufacturers/{id}/edit', 'ManufacturerController@edit')->name('manufacturers.edit');
Route::put('/manufacturers/{id}', 'ManufacturerController@update')->name('manufacturers.update');
