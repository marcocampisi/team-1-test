<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::withoutForeignKeyConstraints(function(){
            Product::truncate();
        });

        $products = [
            [
                'name' => '24_hours',
                'price' => 2.99,
                'duration' => 24
            ],
            [
                'name' => '72_hours',
                'price' => 5.99,
                'duration' => 72
            ],
            [
                'name' => '144_hours',
                'price' => 9.99,
                'duration' => 144
            ]];

        foreach ($products as $product)
        {
            Product::create([
                'name' => $product->name,
                'price'=> $product->price,
                'duration'=> $product->duration
            ]);
        }
    }
}
