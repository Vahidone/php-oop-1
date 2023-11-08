<?php
require_once __DIR__ . '/Production.php';

class Movie extends Production {

    use published_year;
    public $running_time;

    public function __construct(
        string $title,
        string $description,
        string $img_url,
        array $cast,
        array $genre,
        int $published_year,
        int $running_time
    ) {

        

        parent::__construct( $title,  $description,  $img_url,  $cast, $genre);

        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->genre = $genre;
        $this->published_year = $published_year;
        $this->running_time = $running_time;
 
    }

    public function addActor($actorName){
        $this->cast[] = $actorName;
    }

    public function removeActor($actorName) {
        $indexToRemove = array_search($actorName, $this->cast);
        if($indexToRemove !== false){
            array_splice($this->cast, $indexToRemove, 1);
        }
    }
}
