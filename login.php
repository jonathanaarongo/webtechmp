<?php
  session_start();
  include_once "actions/classes/Users.php";

  if (isset($_SESSION["account"])) {
    header("Location: dashboard.php");
    die();
  }

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

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui inverted  header">
    <i class="inverted  image outline icon"></i>
      <div class="content">
        Go && Indefenzo Photogallery
      </div>
    </h2>
    <form method="POST" class="ui large form" id="login" action="./actions/login.php">
      <div class="ui stacked segment">
        <div class="ui header">Log-In to Your Account </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <input type="submit" class="ui fluid large black submit button" value="Log In"></input>
        <hr></hr>
        <div class="h3 header">No account yet? <a href="accountcreation.php">Create One!</a></div>
        <div class="ui hidden message">
          <span></span>
        </div>
      </div>

    </form>

  </div>
</div>

</body>
<script src="semantic/dist/semantic.min.js"></script>
<script src="scripts/login.js"></script>
</html>
