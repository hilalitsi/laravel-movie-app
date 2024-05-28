<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'movie_id' => '01',
            'poster' => 'movie-01.jpg',
            'user' => 'Hirohito',
            'rating' => '8,5',
            'date' => '1987-01-01',
        ]);

        Review::create([
            'id' => 2,
            'title' => 'Noragami',
            'movie_id' => '02',
            'poster' => 'movie-02.jpg',
            'user' => 'Kim Il Sung',
            'rating' => '7,8',
            'date' => '2010-12-06',
        ]);

        Review::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'movie_id' => '03',
            'poster' => 'movie-03.jpg',
            'user' => 'Mao Zedong',
            'rating' => '7,7',
            'date' => '2021-01-13',
        ]);

        Review::create([
            'id' => 4,
            'title' => 'Spy X Family',
            'movie_id' => '04',
            'poster' => 'movie-04.jpg',
            'user' => 'Takefusa Kubo',
            'rating' => '8,2',
            'date' => '2019-03-25',
        ]);

        Review::create([
            'id' => 5,
            'title' => 'Attack on Titan',
            'movie_id' => '05',
            'poster' => 'movie-05.jpeg',
            'user' => 'Ucup',
            'rating' => '9,1',
            'date' => '2009-09-09',
        ]);
        
    }
}
