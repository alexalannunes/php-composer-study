<?php

namespace Code\Models;

use Code\Money\Data;

class Users extends Data {

  public function __construct() {
    parent::__construct('users');
  }
}