<?php

class Book
{
    public $id;
    public $title;
    public $author;
    public function __construct($id, $title, $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
    }
}