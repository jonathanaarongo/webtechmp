<?php
  header('Content-Type: application/json');
  include_once "database.php";
  include_once "helpers.php";
  include_once "classes/Users.php";

  $results = array("status" => 0, "message" => "Incomplete data sent...");
  if (isset_and(POST, array("username", "password"))) {
    $username = sanitize(POST["username"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);
    $password = sanitize(POST["password"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);

    $account = User::login($mysqli, $username, $password);
    if ($account == null)
    $results["message"] = "Incorrect username or password...";
    else {
      session_start();
      $_SESSION["account"] = serialize($account);
      $results["status"] = 1;
      $results["message"] = "Succesfully logged in! Redirecting...";

      if (!isset($_POST["ajax"]))
        header("Location: ../dashboard.php");
    }
  }

  echo json_encode($results);

?>
