<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => '01',
            'poster' => 'movie-01.jpg',
            'name' => 'Jojo Adventure',
            'description' => '"JoJos Bizarre Adventure" is an epic anime about the Joestar family who use their special power, "Stand", to fight strange enemies. With incredible action and iconic character designs, this is an unforgettable series for anime fans.',
        ],
        [
            'id' => '02',
            'poster' => 'movie-02.jpg',
            'name' => 'Noragami',
            'description' => '"Noragami" is an anime about Yato, a minor god, Hiyori, a girl trapped between the world of humans and spirits, and Yukine, a spirit. They go on an adventure against evil spirit creatures while uncovering the mystery of Yatos past.',
        ],
        [
            'id' => '03',
            'poster' => 'movie-03.jpg',
            'name' => 'Wind Breaker',
            'description' => '"Wind Breaker" is a shonen anime that tells the story of Haruka Sakura, a teenager who joins the citys protectors to fight crime. In the process, he learns the true meaning of strength and the importance of friendship.',
        ],
        [
            'id' => '04',
            'poster' => 'movie-04.jpg',
            'name' => 'SPY X Family',
            'description' => '"SPY x FAMILY" is an anime about a spy who disguises himself as the father of a talented daughter, along with his cunning wife and son, while carrying out a secret mission.',
        ],
        [
            'id' => '05',
            'poster' => 'movie-05.jpeg',
            'name' => 'Attack on Titan',
            'description' => '"Attack on Titan" is an anime about humans surviving against the attack of a giant Titan, focusing on the journey of Eren Yeager and his friends in fighting this threat.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
