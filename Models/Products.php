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
        $this->image = $data['image'] ?? '';
        $this->genere = $data['genere'];
        $this->id = $data['id'];
        $this->description = $data['description'];
        $this->title = $data['title'];
    }

    public function play()
    {
        echo '' . $this->id . '' . 'is playing';
    }
}
