<?php

include_once __DIR__ . '/Products.php';

class Movie extends Products
{
    public bool $adult;
    public string $originalLanguage;
    public string $originalTitle;
    public string $releaseDate;
    public $popularity;
    public bool $video;
    public $voteAverage;
    public string $posterPath;
    public int $voteCount;

    public function __construct(array $data)
    {
        $this->adult = $data['adult'];
        $this->posterPath = $data['poster_path'];
        $this->originalTitle = $data['original_title'];
        $this->originalLanguage = $data['original_language'];
        $this->voteAverage = $data['vote_average'];
        $this->voteCount = $data['vote_count'];
        $commonArray = [
            'image' => $data['backdrop_path'] ?? '',
            'genere' => $data['genre_ids'] ?? '',
            'id' => 'm-' . $data['id'],
            'description' => $data['overview'] ?? '',
            'title' => $data['title'],
        ];
        parent::__construct($commonArray);
    }
}
