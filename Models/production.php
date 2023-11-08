
<?php
class Production {
  public $title;
  public $description;
  public $img_url;
  public $cast;
  public $genre;

  public function __construct(string $title, string $description, string $img_url, array $cast, array $genre) {
    if(empty($title)) {
      throw new Exception ('Ci deve essere un titolo'); 
    } else {
      $this->title = $title;
    }
    
    $this->description = $description;
    $this->img_url = $img_url;
    $this->cast = $cast;
    $this->genre = $genre;
  }
}
