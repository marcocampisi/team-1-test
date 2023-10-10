<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Message;

use Illuminate\Support\Facades\Schema;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::withoutForeignKeyConstraints(function(){
            Message::truncate();
        });

        for($i = 0; $i < 100; $i++){
            $randomTeacherId = Teacher::inRandomOrder()->first()->id;
            //$imgCV = fake()->imageUrl();
            Review::create([
                'name' => fake()->name(),
                'content' => fake()->text(),
            ]);
        }
    }
}
