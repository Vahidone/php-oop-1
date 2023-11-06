<?php
class Movie
{
    public $title;

    public $description;

    public $img_url;

    public $cast;

    public $genre;

    function __construct(
        $title,
        $description,
        $img_url,
        $cast,
        $genre
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->genre = $genre;
    }
    function getMovieDetails()
    {
        return "title : $this->title | Description $this->description";
    }

    function getTitle()
    {
        return $this->title;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getImg()
    {
        return $this->img_url;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function getCast()
    {
        return $this->cast;
    }
}
