<?php

include_once __DIR__ . '/Products.php';

class Book extends Products
{
    public int $pageCount;
    public string $status;
    public array $authors;
    public $isbn;
    public string $longDescription;

    public function __construct(array $data)
    {
        $commonArray = [
            'image' => $data['thumbnailUrl'] ?? '',
            'genere' => $data['categories'] ?? '',
            'id' => 'b-' . $data['_id'],
            'description' => $data['shortDescription'] ?? $data['longDescription'],
            'title' => $data['title'],
        ];
        parent::__construct($commonArray);
        $this->pageCount = $data['pageCount'];
        $this->status = $data['status'];
        $this->authors = $data['authors'] ?? [];
        $this->isbn = $data['isbn'];
        $this->longDescription = $data['longDescription'] ?? '';
    }
}
