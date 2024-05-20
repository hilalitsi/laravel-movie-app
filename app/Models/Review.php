<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => '01',
            'poster' => 'movie-01.jpg',
            'movie' => 'Jojo Bizarre Adventure',
            'user' => 'Hirohito',
            'rating' => '8,5',
            'date' => '1987-01-01',
        ],
        [
            'id' => '02',
            'poster' => 'movie-02.jpg',
            'movie' => 'Noragami',
            'user' => 'Kim Il Sung',
            'rating' => '7,8',
            'date' => '2010-12-06',
        ],
        [
            'id' => '03',
            'poster' => 'movie-03.jpg',
            'movie' => 'Wind Breaker',
            'user' => 'Mao Zedong',
            'rating' => '7,7',
            'date' => '2021-01-13',
        ],
        [
            'id' => '04',
            'poster' => 'movie-04.jpg',
            'movie' => 'SPY X Family',
            'user' => 'Takefusa Kubo',
            'rating' => '8,2',
            'date' => '2019-03-25',
        ],
        [
            'id' => '05',
            'poster' => 'movie-05.jpeg',
            'movie' => 'Attack on Titan',
            'user' => 'Ucup',
            'rating' => '9,1',
            'date' => '2009-09-09',
        ],       
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
