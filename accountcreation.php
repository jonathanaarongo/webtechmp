<?php
include_once "actions/database.php";
include_once "actions/helpers.php";
 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="msapplication-TileColor" content="logo#ffffff">
  <meta name="msapplication-TileImage" content="logo/ms-icon-144x144.png">
  <meta name="theme-color" content="logo#ffffff">
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Go && Indefenzo Photogallery Login</title>
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="semantic/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="semantic/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/icon.css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="semantic/dist/components/form.js"></script>
  <script src="semantic/dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-image: url(images/1.png);
      background-color: #DADADA;
      background-size: cover;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>

</head>
<body>

  <br/><br/><br/>
  <div class="ui centered grid">
    <br/><br/> <br/>
    <div class="eight wide column">
      <h2 class="ui inverted  header">
      <i class="inverted  image outline icon"></i>
        <div class="content">
          <a href="login.php">Go && Indefenzo Photogallery </a>
        </div>
      </h2>
    <form method="POST" class="ui form"> <!--id="createaccount" action="./actions/createaccount.php" -->
      <div class="ui stacked segment">
        <div class="ui header">
        Create an Account to use PhotoGallery!
        </div>
        <div class="field">
          <label>Username</label>
          <input type="text" name="userName" placeholder="Username (i.e allenind)">
        </div>

        <div class="field">
          <label>Password</label>
          <input type="password" name="passWord" placeholder="Password can be a combination of special characters" maxlength="10">
        </div>

        <div class="field">
           <label>First Name</label>
           <input type="text" name="firstName" placeholder="First Name">
         </div>

         <div class="field">
           <label>Last Name</label>
           <input type="text" name="lastName" placeholder="Last Name">
         </div>

         <div class="field">
           <label>E-mail</label>
           <input type="text" name="eMail" placeholder="allen@gmail.com">
         </div>

         <div class="field">
           <label>Birth Date</label>
           <div class="ui calendar" id="year_first_calendar">
            <div class="ui input left icon">
              <i class="calendar icon"></i>
              <input type="text" placeholder="Date" name="birthDate">
            </div>
          </div>
         </div>

         <div class="field">
           <div class="ui checkbox">
             <input type="checkbox" tabindex="0" class="hidden">
             <label>I agree to the Terms and Conditions</label>
           </div>
         </div>

         <input type="submit" class="ui fluid large black submit button" name="createacc" value="Create Account"></input>
      </div>
    </form>
  </div>
  </div>

<?php
  if(isset($_POST['createacc'])){
    $userName = sanitize(POST["userName"], SPACE, FILTER_SANITIZE_STRING, $mysqli);
    $passWord =sanitize(POST["passWord"], SPACE, FILTER_SANITIZE_STRING, $mysqli);
    $firstName= sanitize(POST["firstName"], SPACE, FILTER_SANITIZE_STRING, $mysqli);
    $lastName = sanitize(POST["lastName"], SPACE, FILTER_SANITIZE_STRING, $mysqli);
    $eMail = sanitize(POST["eMail"], SPACE, FILTER_SANITIZE_STRING, $mysqli);
    $birthDate = date_create_from_format("F d, Y", sanitize(POST["birthDate"], SPACE, FILTER_SANITIZE_STRING, $mysqli));



    $userCheck = mysqli_query('SELECT COUNT(*) FROM `users` WHERE userName = $userName');
    $row = mysqli_fetch_array($userCheck,MYSQLI_ASSOC);
    if (row['count'] > 0) {
      echo "<script>alert('The username is already taken!');</script>";
    }

    $emailCheck = mysqli_query('SELECT COUNT(*) FROM `users` WHERE eMail =$eMail');
    $row2 = mysqli_fetch_array($emailCheck,MYSQLI_ASSOC);

    if(row2['count'] >0){
      echo "<script>alert('The E-Mail is already taken!');</script>";
    }

    else {
      $createquery ="INSERT INTO `users`(`userType`,`userName`, `passWord`,`firstName`,`lastName`,`birthDate`,`eMail`) VALUES('1','{$userName}','{$passWord}','{$firstName}','{$lastName}','{$birthDate}','{$eMail}')";
      $createresult=mysqli_query($mysqli,$createquery);
      echo "<script>alert('Account Created Successfully!');</script>";
      header("Location: /webtechmp/login.php");

                          $query3 ="SELECT * FROM users ORDER BY userID DESC LIMIT 1";
                          $result3= mysqli_query($mysqli, $query3);
                          while ($latest= mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                          $userID=$latest['userID'];

                          $directory="users/$userID";
                          if (!file_exists($directory)) {
                            $mode = 0777;
                          mkdir($directory, $mode, true);
                          }
                          }

    }
  }
?>




</body>

<script>
$('#year_first_calendar')
  .calendar({
    startMode: 'year'
  })
;
</script>
<script src="semantic/dist/semantic.min.js"></script>


</html>
