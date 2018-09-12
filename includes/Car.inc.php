<?php

class Car extends Vehicle {
    protected $doors;
    protected $trailer;

    public function __construct($brand, $color, $name,
                                $trailer, $doors) {
        parent::__construct($brand, $color, $name);
        $this->trailer = $trailer;
        $this->doors = $doors;
        $this->setType('car');
    }

    public function getTrailer() {
        $this->trailer;
        if ($this->trailer == TRUE) {
          return sprintf("with trailer");
        }
        else {
          return sprintf("without trailer");
        }
    }

    public function getDoors() {
      return $this->doors;
    }


    public function __toString() {
        return sprintf("%s %s %s %s\n"
                , parent::__toString()
                , $this->getType()
                , $this->getTrailer()
                , $this->getDoors());

    }
}

 ?>
