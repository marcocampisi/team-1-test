<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model
use App\Models\Teacher;
use App\Models\Subject;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //Storage::deleteDirectory('')
        //Storage::makeDirectory('')

        Schema::withoutForeignKeyConstraints(function(){
            Teacher::truncate();
        });

        for ($i = 0; $i < 30; $i++){
            $randomSubjectId = Subject::inRandomOrder()->first()->id;
            //$imgCV = fake()->imageUrl();
            Teacher::create([
                'email' => fake()->safeEmail(),
                'password' => fake()->password(),
                'firstName' => fake()->firstName(),
                'lastName' => fake()->lastName(),
                'bio' => fake()->paragraph(),
                //CV
                //photo
                'phone' => fake()->number(10),
                'sponsoredUntil' => fake()->dateTimeBetween('now', '+1 week'),
                'service' => fake()->word(),
                'price' => fake()->decimal(4, 2),
                
            ]);
        }

        /*
         $table->email();
            $table->password();
            $table->firstName();
            $table->lastName();
            $table->bio();
            $table->CV();
            $table->photo();
            $table->phone();
            $table->sponsoredUntil();
            $table->service();
            $table->price();
        */
        
    }
}
