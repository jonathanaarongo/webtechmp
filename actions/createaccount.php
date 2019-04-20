<?php
  header('Content-Type: application/json');
  include_once "./database.php";
  include_once "./helpers.php";
  include_once "./classes/Users.php";

  $results = array("status" => 0, "message" => "Incomplete data sent...");
  if (isset_and(POST, array("userName", "passWord","firstName","lastName","eMail","birthDate"))) {
    $userName = sanitize(POST["userName"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);
    $passWord = sanitize(POST["passWord"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);
    $firstName = sanitize(POST["firstName"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);
    $lastName = sanitize(POST["lastName"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);
    $eMail = sanitize(POST["eMail"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);
    $birthDate = sanitize(POST["birthDate"], NOSPACE, FILTER_SANITIZE_STRING, $mysqli);

    $account = User::create($mysqli);
    if ($account == null)
    $results["message"] = "No data sent!";

    else {
      $results["message"] ="Account Created Successfully!";

  $query3 ="SELECT * FROM users ORDER BY userID DESC LIMIT 1";
  $result3= mysqli_query($mysqli, $query3);
  while ($latest= mysqli_fetch_array($result3,MYSQLI_ASSOC)){
    $userID=$latest['userID'];
    if (!file_exists('users/$latest')) {
        mkdir('users/$latest', 0777, true);
        }
      }

  }
}


  echo json_encode($results);

?>
