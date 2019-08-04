<?php

namespace Code\Money;

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

use PDO;
use PDOException;

class Connect {

  private static $instance;
  private static $error;

  public static function getInstance(): ?PDO {
    try {
      self::$instance = new PDO(DNS, USER, PASS, OPTIONS);
    } catch (PDOException $e) {
      self::$error = $e;
    }

    return self::$instance;

  }

  public static function getError(): ?PDOException {
    return self::$error;
  }
}