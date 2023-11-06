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

}