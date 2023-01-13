<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Factory::create();
        
        for ($i=0; $i < 100; $i++) { 
            $word=$faker->word;
            $slug=Str::slug($word);
            Post::create([
                'title' => $word,
                'slug' => $slug,
                'content' => $faker->text(100),
                'priority' => $faker->randomElement(['','normal','important'])
            ]);
        }
       
    }
}
