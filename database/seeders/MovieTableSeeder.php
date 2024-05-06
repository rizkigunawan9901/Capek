<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshanks-redemption',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/YJTKlAvbDo4',
                'thumbnail' => 'https://fastly.picsum.photos/id/1/300/300.jpg',
                'rating' => 9.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Shank Redemption',
                'slug' => 'the-shanks-redemption',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/YJTKlAvbDo4',
                'thumbnail' => 'https://fastly.picsum.photos/id/1/300/300.jpg',
                'rating' => 9.3,
                'is_featured' => 0,
            ]
            ];
            Movie::insert($movies);
    }
}
