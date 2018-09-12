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
  printf("<p>Lecturer: %s (%s det er en lang time) %s\n"
          , $this->getLecturer()
          , $this->getDuration()
          , $this->getTopic());
  }
}

 ?>
