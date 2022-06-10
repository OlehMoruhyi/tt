<?php

class Database
{
  const DB_HOSTNAME = 'localhost';
  const DB_USERNAME = 'root';
  const DB_PASSWORD = 'HelloWorld8723';
  const DB_NAME = 'dnd';

  private static $instance;

  private function __construct()
  {
  }
  private function __clone()
  {
  }
  private function __sleep()
  {
  }
  private function __wakeup()
  {
  }

  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      $c = __CLASS__;
      self::$instance = new $c;
    }
    return self::$instance;
  }

  public function connect()
  {
    $db = mysqli_connect(self::DB_HOSTNAME, self::DB_USERNAME, self::DB_PASSWORD, self::DB_NAME);

    if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
    }

    return $db;
  }
}
