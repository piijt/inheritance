<?php
class LiveLecture extends Product {
  protected $lecturer;
  protected $duration;
  protected $topic;

  public function __construct($title, $type, $duration,
                              $lecturer, $topic) {
    $this->lecturer = $lecturer;
    $this->topic = $topic;
    $this->duration = $duration;
    $this->title = $title;
    $this->type = $type;
  }

  public function getLecturer() {
    return $this->lecturer;
  }

  public function getDuration() {
    return $this->duration;
  }

  public function getTopic() {
    return $this->topic;
  }

  public function display() {
  printf("<p>Lecturer: %s %s %s %s %s \n"
          , $this->getProductType()
          , $this->getTitle()
          , $this->getLecturer()
          , $this->getDuration()
          , $this->getTopic());
  }
}

 ?>
