<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'genre_id' => '1',
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);
    
        Movie::create([
            'id' => 2,
            'title' => 'Noragami',
            'genre_id' => '2',
            'poster' => 'movie-02.jpg',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);
    
        Movie::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'genre_id' => '3',
            'poster' => 'movie-03.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);

        Movie::create([
            'id' => 4,
            'title' => 'Spy X Family',
            'genre_id' => '4',
            'poster' => 'movie-04.jpg',
            'synopsis' => 'A spy, Twilight, creates a fake family for a mission. He adopts Anya, a telepath, and marries Yor, an assassin. Unaware of each others true identities, they navigate life balancing secret missions and family dynamics.',
        ]);

        Movie::create([
            'id' => 5,
            'title' => 'Attack on Titan',
            'genre_id' => '5',
            'poster' => 'movie-05.jpeg',
            'synopsis' => 'Humanity battles for survival against giant humanoid Titans. Eren Yeager and his friends join the military to fight these creatures and uncover dark secrets about the Titans and their world.',
        ]);
    }
}
