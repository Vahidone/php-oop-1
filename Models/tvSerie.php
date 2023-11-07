<?php
require_once __DIR__ . '/Production.php';

class TvSerie extends Production {
  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(
    $title,
    $description,
    $img_url,
    $cast,
    $genre,
    $aired_from_year,
    $aired_to_year,
    $number_of_episodes,
    $number_of_seasons
  ) {
    $this->title = $title;
    $this->description = $description;
    $this->img_url = $img_url;
    $this->cast = $cast;
    $this->genre = $genre;
    $this->aired_from_year = $aired_from_year;
    $this->aired_to_year = $aired_to_year;
    $this->number_of_episodes = $number_of_episodes;
    $this->number_of_seasons = $number_of_seasons;
  }
}
