<?php
require("Date.php");

class DateTime1 extends Date
{
  private $hour;
  private $minute;
  private $sec;

  public function __construct($year, $month, $day, $hour, $minute, $sec)
  {
    parent::__construct($year, $month, $day);

    $this->hour = $hour;
    $this->minute = $minute;
    $this->sec = $sec;
  }

  public function getHour()
  {
    return $this->hour;
  }

  public function getMinute()
  {
    return $this->minute;
  }

  public function getSec()
  {
    return $this->sec;
  }

  public function __toString(){
    return $this->getYear().".".$this->getMonth().".".$this->getDay()." ".$this->getHour().":".$this->getMinute().":".$this->getSec();
  }


  public function __destruct()
  {
      echo("<script>console.log('Обєкт знищено.');</script>");;
  }
}
