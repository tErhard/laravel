<?php

namespace Database\Seeders;


    use Illuminate\Database\Seeder;
    use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'iPhone 12',
            'manufacturer_id' => 1,
            'price' => 999,
            'production_date' => '2020-10-23',
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S21',
            'manufacturer_id' => 2,
            'price' => 899,
            'production_date' => '2021-01-29',
        ]);

        // Add more products here...
    }
}
