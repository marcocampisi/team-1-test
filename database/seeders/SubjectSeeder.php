<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model

use App\Models\Subject;

use Illuminate\Support\Facades\Schema;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::withoutForeignKeyConstraints(function(){
            Subject::truncate();
        });

        $subjects = [
            'Arpa',
            'Batteria',
            'Canto',
            'Chitarra',
            'Pianoforte',
            'Violino',
            'Violoncello',
            'Xilofono'
        ];

        foreach ($subjects as $subject)
        {
            Subject::create([
                'name' => $subject
            ]);
        }
        
    }
}
