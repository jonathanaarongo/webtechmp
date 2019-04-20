<?php
include_once "actions/helpers.php";
include_once "actions/classes/Users.php";
session_start();

  if (!isset($_SESSION["account"])) {
    header("Location: ../../login.php");
    die();
  }


  $user = unserialize($_SESSION["account"], array("User"));
  #load_navigation();


  ?>
<html>

<head>
  <meta charset="utf-8">
  <title> Dashboard </title>


  <!--- Semantic CSS --->
  <link rel="stylesheet" type="text/css" href="./semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="./semantic/dist/components/overflow.css">
  <link rel="stylesheet" type="text/css" href="dropzone/dist/min/dropzone.min.css">

</head>

<style type="text/css">
  body {
    background-color: #FFFFFF;
  }

  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }

  .main.container {
    margin-top: 7em;
  }

  .wireframe {
    margin-top: 2em;
  }

  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
</style>

</head>

<body>


  <!---TOP MENU -->

    <div class="ui fixed inverted orange menu">
      <div class="ui container">
        <a href="./" class="header item">
          <img class="logo" src="./images/logo alternate.png">
          GO && INDEFENZO PHOTOGALLERY
        </a>
        <a href="./" class="item">Home</a>
        <div class="ui simple dropdown item">
          Functionalities <i class="dropdown icon"></i>
          <div class="menu">
            <a class="item" href="./addvessels.php">View Gallery</a>
            <a class="item" href="./sendServRequest.php">Photo Upload</a>
          </div>
        </div>
        <div class="right item">
          <div class=" user top right ui simple dropdown item" data-content="View profile and more">
            <img class="ui mini rounded image" src="./images/mrkrabs.jpg">
            <i class="dropdown icon"></i>
            <div class="menu">
              <?php
            echo " <div class='user header'>";
            echo    "Signed in as <b>$user->username</b>";
            echo " </div>";
              ?>
              <div class="divider"></div>
              <a class="item" href="yourprofile.html">Your Profile</a>
              <a class="item" href ="accounthistory.html">Your Account History</a>
              <div class="divider"></div>
              <a class="item" href="./actions/logout.php">Sign Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <br/><br/><br/><br/><br/><br/>

<div class="ui internally celled grid">
      <div class="ui grid">
      <div class="three column row">
      <div class="four wide column"></div>
      <div class="eight wide column">
            <div class="ui tabular menu">
            <a class="item active">
            Upload
            </a>
            <a class="item">
            Photo Gallery
            </a>
            </div>

            <br/>
            <?php
             var_dump($user);
          echo      "<h3 class='ui dividing header'>";
          echo      "Upload your Photos here $user->username";
          echo      "</h3>";
          ?>

          <div class="container" >
            <div class='content'>
               <form action="upload.php" class="dropzone" >
               </form>
            </div>

            <input type="button" id='uploadfiles' value='Upload Files' >
          </div>


      </div>
          <div class="four wide column"></div>
    </div>
      </div>
</div>

  <div class="ui inverted secondary vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="seven wide column">
          <h4 class="ui inverted header"></h4>
          <p class="foot"></p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Contact Us</a>
        <a class="item"</a>
        <a class="item"></a>
      </div>
    </div>
  </div>
    </body>



  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!--- Semantic JS --->
  <script src="./semantic/dist/semantic.min.js"></script>
  <script src="dropzone/dist/min/dropzone.min.js"></script>
<script>
Dropzone.autoDiscover = false;

var myDropzone = new Dropzone(".dropzone", {
   autoProcessQueue: false,
   parallelUploads: 10 // Number of files process at a time (default 2)
});

$('#uploadfiles').click(function(){
   myDropzone.processQueue();
});
</script>

  </html>
