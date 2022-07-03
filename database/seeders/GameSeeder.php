<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            [
                'title' => [
                    'en' => 'Email Phishing',
                    'ar' => 'تصيد البريد الإلكترونى'
                ],
                'description' => [
                    'en' => 'Phishing is a type of online scam where criminals impersonate legitimate organizations via email, text message, advertisement or other means in order to steal sensitive information',
                    'ar' => 'التصيد الاحتيالي هو نوع من عمليات الاحتيال عبر الإنترنت حيث ينتحل المجرمون صفة المنظمات الشرعية عبر البريد الإلكتروني أو الرسائل النصية أو الإعلانات أو غيرها من الوسائل لسرقة معلومات حساسة'
                ]
                ],
            [
                'title' => [
                    'en' => 'who will win the million',
                    'ar' => 'من سيربح المليون'
                ],
                'description' => [
                    'en' => 'questionnaire game',
                    'ar' => 'لعبة استبيان'
                ]
            ]
        ];

        foreach($games as $game){
            $game = \App\Models\Games::updateOrCreate($game);
        }
    }
}
