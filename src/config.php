<?php

define('DRIVER', 'pgsql');
define('HOST', 'localhost');
define('USER', 'postgres');
define('PASS', 'a0l11e4x23');
define('DATABASE', 'money');
define('OPTIONS', array(
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
  PDO::ATTR_CASE => PDO::CASE_NATURAL,
));
define('DNS', DRIVER . ':host=' . HOST . ';dbname=' . DATABASE);
