<?php

  class User {

    public  $userID,$userType, $userName, $passWord, $firstName,$lastName, $birthDate,
            $eMail, $pathToDP;

    public function __construct($userID,$userType, $userName, $passWord, $firstName,$lastName, $birthDate,
                    $eMail, $pathToDP) {

      $this->userId = $userID;
      $this->$userType= $userType;
      $this->username = $userName;
      $this->password = $passWord;
      $this->firstname = $firstName;
      $this->lastname = $lastName;
      $this->birthdate = $birthDate;
      $this->email = $eMail;
      $this->image = $pathToDP;
    }

    public static function login($mysqli, $username, $password) {
      $stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `userName` = ? AND `passWord` = ? LIMIT 1");
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();

      $result = $stmt->get_result();
      $rows = $result->num_rows;

      $user = null;
      while ($row = $result->fetch_assoc()) {
        $user = new User($row['userID'],$row['userType'], $row['userName'], $row['passWord'], $row['firstName'], $row['lastName'],  $row['birthDate'],
        $row['eMail'], $row['pathToDP']);
      }

      $stmt->close();
      return $user;
    }

    public static function get($mysqli, $id) {
      $stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `userID` = ? LIMIT 1");
      $stmt->bind_param("i", $id);
      $stmt->execute();

      $result = $stmt->get_result();
      $rows = $result->num_rows;

      $user = null;
      while ($row = $result->fetch_assoc()) {
        $user = new User($row['userID'],$row['userType'], $row['userName'], $row['passWord'], $row['firstName'], $row['lastName'],  $row['birthDate'],
        $row['eMail'], $row['pathToDP']);
      }

      $stmt->close();
      return $user;
    }


    public static function type_description($mysqli, $userType) {
      $stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `userType` = ? LIMIT 1");
      $stmt->bind_param("i", $userType);
      $stmt->execute();

      $stmt->bind_result($description);

      $stmt->close();
      return $description;
    }

      public static function get_userID($mysqli, $userId) {
      $stmt = $mysqli->prepare("SELECT `userID` FROM `users` WHERE `userID` = ? LIMIT 1");
      $stmt->bind_param("i", $userId);
      $stmt->execute();

      $result = $stmt->get_result();
      $stmt->close();

      return $result->fetch_assoc()["principalID"];
      }
  }
?>
