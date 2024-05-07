<?php



class Movie
{
    public bool $adult;
    public string $backdropPath;
    public array $genereIds;
    public int $movieId;
    public string $originalLanguage;
    public string $originalTitle;
    public string $overview;
    public $popularity;
    public string $posterPath;
    public string $releaseDate;
    public string $title;
    public bool $video;
    public $voteAverage;
    public int $voteCount;

    public function __construct(array $data)
    {
        $this->adult = $data['adult'];
        $this->backdropPath = $data['backdrop_path'] ?? '';
        $this->genereIds = $data['genre_ids'];
        $this->movieId = $data['id'];
        $this->originalLanguage = $data['original_language'];
        $this->originalTitle = $data['original_title'];
        $this->overview = $data['overview'];
        $this->popularity = $data['popularity'];
        $this->posterPath = $data['poster_path'];
        $this->releaseDate = $data['release_date'];
        $this->title = $data['title'];
        $this->video = $data['video'];
        $this->voteAverage = $data['vote_average'];
        $this->voteCount = $data['vote_count'];
    }

    public function play()
    {
        echo '' . $this->movieId . '' . 'is playing';
    }
}
