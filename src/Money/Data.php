<?php

namespace Code\Money;

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

class Data {

  private $sql;

  public function __construct() {
    // ...
  }

  public function list() {
    $this->sql = "SELECT * FROM users";
    return $this;
  }

  public function fetch() {
    try {
      $lis = Connect::getInstance()->prepare($this->sql);
      $lis->execute();

      if ($lis->rowCount()) {
        return $lis->fetchAll();
      }

    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
