<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['brand', 'country', 'phone', 'email'];
}

$manufacturers = Manufacturer::all();
foreach ($manufacturers as $manufacturer) {
    echo $manufacturer->name;
}

$manufacturer = new Product;
$manufacturer->brand = 'Apple';
$manufacturer->country = 'USA';
$manufacturer->phone = '+1 (800) 692-7753';
$manufacturer->email = 'info@apple.com';
$manufacturer->save();
