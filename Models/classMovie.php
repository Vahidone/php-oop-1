<?php
require_once __DIR__ . 'production.php';

class Movie extends Production {
    public $published_year;
    public $running_time;

    function __construct(
        $title,
        $description,
        $img_url,
        $cast,
        $genre,
        $published_year,
        $running_time
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->genre = $genre;
        $this->published_year = $published_year;
        $this->running_time = $running_time;
    }
}
