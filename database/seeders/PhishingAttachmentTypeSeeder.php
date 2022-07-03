<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhishingAttachmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachment_types = [
            [
                'name' => 'photo.png',
                'type' => 'image'
            ],
            [
                'name' => 'geo.jpg',
                'type' => 'image'
            ],
            [
                'name' => 'animal.jpg',
                'type' => 'image'
            ],
            [
                'name' => 'network_book.pdf',
                'type' => 'pdf'
            ],
            [
                'name' => 'python.pdf',
                'type' => 'pdf'
            ],
            [
                'name' => 'file56.rar',
                'type' => 'rar'
            ],
            [
                'name' => 'file_hack.zip',
                'type' => 'zip'
            ],
            [
                'name' => 'batcher.exe',
                'type' => 'exe'
            ],
            [
                'name' => 'song-mp3.exe',
                'type' => 'exe'
            ],
            [
                'name' => 'hello_iloveyou.exe',
                'type' => 'exe'
            ],
        ];
        foreach($attachment_types as $type){
        $type = \App\Models\PhishingAttachmentTypes::updateOrCreate($type);
        }
    }
}
