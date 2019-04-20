<?php
  session_start();
  unset($_SESSION["account"]);
  header("Location: /webtechmp/login.php");
  ?>
