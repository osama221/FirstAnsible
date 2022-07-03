<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MillionairQuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'easy'
            ],
            [
                'name' => 'medium'
            ],
            [
                'name' => 'hard'
            ],
        ];
        foreach($types as $type){
        $type = \App\Models\MillionairQuestionsType::updateOrCreate($type);
        }
    }
}
