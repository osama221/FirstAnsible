<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MillionairCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => [
                    'en' => 'Cyber Security',
                    'ar' => 'أمن المعلومات'
                ],
                'short_name'=>'cs'
            ]
            // [
            //     'name' => [
            //         'en' => 'Phishing',
            //         'ar' => 'التصيد الإلكترونى'
            //     ],
            //     'short_name'=>'ph'

            // ],
            // [
            //     'name' => [
            //         'en' => 'System Admin',
            //         'ar' => 'مسؤول النظام'
            //     ],
            //     'short_name'=>'sa'

            // ],
            // [
            //     'name' => [
            //         'en' => 'General Information',
            //         'ar' => 'معلومات عامة'
            //     ],
            //     'short_name'=>'gi'
            // ]    
        ];
        foreach($categories as $category){
        $category = \App\Models\MillionairCategories::updateOrCreate($category);
        }
    }
}
