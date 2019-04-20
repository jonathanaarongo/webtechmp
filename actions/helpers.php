<?php

  define("NOSPACE", 1);
  define("SPACE", 2);

  define ("POST", $_POST);
  define ("GET", $_GET);

  function isset_and ($data = POST, $vars = array()) {
    foreach($vars as $var)
      if (!isset($data[$var]))
        return false;
      else if(is_string($data[$var]) && strlen($data[$var]) == 0)
        return false;

    return true;
  }

  function isset_or ($data = POST, $vars = array()) {
    foreach($vars as $var)
      if (isset($data[$var]))
        return true;

    return false;
  }

  function sanitize ($string, $space_type=SPACE, $filter = FILTER_SANITIZE_STRING, $cnx = null) {
    $new_string = filter_var(trim($string), $filter);

    if ($space_type == NOSPACE)
      $new_string = preg_replace("/\s+/", "", $new_string);
    else if ($space_type == SPACE)
      $new_string = preg_replace("/\s+/", " ", $new_string);

    if (isset($cnx))
      $new_string = $cnx->escape_string($new_string);

    return $new_string;
  }

  function load_navigation($data = array()) {
    extract($data);
    include "partials/navigation.php";
  }

  function load_dashboard($data = array()) {
    extract($data);
    include "partials/dashboard.php";
  }
