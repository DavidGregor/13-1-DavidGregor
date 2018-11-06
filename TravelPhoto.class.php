<?php
/*
   Represents a single travel photo
 */
class TravelPhoto {
  private $date, $fileName, $description, $title, $latitude, $longitude, $ID;
  static $photoID;
  
  function __construct($fileName, $title, $date, $latitude, $longitude) {
    $this->fileName = $fileName;
    $this->title = $title;
    $this->date = $date;
    $this->latitude = $latitude;
    $this->longitude = $longitude;
  }
  
  public function __toString() {
    return "<img src='".$fileName."' title='".$title."' alt='".$title."'>";
  }
}

?>