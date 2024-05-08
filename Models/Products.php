<?php

class Products
{
    public string $image;
    public array $genere;
    public $id;
    public string $description;
    public string $title;


    public function __construct(array $data)
    {
        $this->image = $data['image'];
        $this->genere = $data['genere'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->title = $data['title'] ?? null;
    }

    public function play()
    {
        echo '' . $this->id . '' . 'is playing';
    }
}
