<?php

  define("DB_SERVER", "localhost");
  define("DB_PORT", 3306);
  define("DB_UNAME", "root");
  define("DB_PASS", "");
  define("DB_SCHEMA", "webtechmp2.0");

  $mysqli = new mysqli(DB_SERVER, DB_UNAME, DB_PASS, DB_SCHEMA);
  $mysqli->set_charset("utf8");
  if ($mysqli->connect_errno) {
    die("Cannot connect to databse: " + $mysqli->connect_error);
  }
  ?>
