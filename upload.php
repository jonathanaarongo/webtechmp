<?php
include_once "actions/helpers.php";
include_once "actions/classes/Users.php";
include_once "actions/database.php";
session_start();

  if (!isset($_SESSION["account"])) {
    header("Location: ../../login.php");
    die();
  }


  $user = unserialize($_SESSION["account"], array("User"));

$localuserID= $user->userId;

if (! empty($_FILES)) {
    $imagePath = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : "Undefined";
    $targetPath = "users/$localuserID/";
    $imagePath = $targetPath . $imagePath;
    $tempFile = $_FILES['file']['tmp_name'];

    $targetFile = $targetPath . $_FILES['file']['name'];
    $fileName= $_FILES["file"]["name"];
    if (move_uploaded_file($tempFile, $targetFile)) {
        echo "true";
    } else {
        echo "false";
    }
    
    $sql = "INSERT INTO `images` (imageName,userID,pathtoImage) VALUES ('{$fileName}','{$localuserID}','{$imagePath}')";
    $result= mysqli_query($mysqli, $sql);

}
?>
