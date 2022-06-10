<?php

class Date
{
  private $year;
  private $month;
  private $day;

  public function __construct($year, $month, $day)
  {
    $this->year = $year;
    $this->month = $month;
    $this->day = $day;
  }

  public function getYear()
  {
    return $this->year;
  }

  public function getMonth()
  {
    return $this->month;
  }

  public function getDay()
  {
    return $this->day;
  }

  public function __destruct()
  {
    echo("<script>console.log('Обєкт знищено.');</script>");
  }
}
