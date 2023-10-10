<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Review;

use Illuminate\Support\Facades\Schema;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::withoutForeignKeyConstraints(function(){
            Review::truncate();
        });

        for($i = 0; $i < 100; $i++){
            $randomTeacherId = Teacher::inRandomOrder()->first()->id;
            //$imgCV = fake()->imageUrl();
            Review::create([
                'name' => fake()->name(),
                'content' => fake()->text(),
                'rating' => fake()->numberBetween(1, 10)
            ]);
        }
    }
}
