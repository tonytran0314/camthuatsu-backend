<?php

namespace Database\Seeders;

use App\Models\Sound;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = database_path('data/sounds.json');
        if (!File::exists($jsonPath)) {
            $this->command->error("Error: sounds.json file not found!");
            return;
        }

        $jsonData = File::get($jsonPath);
        $sounds = json_decode($jsonData, true);

        foreach ($sounds as $index => $sound) {
            Sound::create([
                'title' => $sound['title'],
                'sound_file' => $sound['sound_file'],
                'image_file' => $sound['image_file'],
                'original_url' => $sound['original_url']
            ]);
        }

        $this->command->info('Sounds seeded successfully!');
    }
}
