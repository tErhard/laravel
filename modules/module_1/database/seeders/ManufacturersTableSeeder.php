<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create([
            'brand' => 'Apple',
            'country' => 'USA',
            'contact_phone' => '+1 (800) 692-7753',
            'email' => 'info@apple.com',
        ]);

        Manufacturer::create([
            'brand' => 'Samsung',
            'country' => 'South Korea',
            'contact_phone' => '+82 2-2053-3000',
            'email' => 'support@samsung.com',
        ]);

        // Add more manufacturers here...
    }
}
