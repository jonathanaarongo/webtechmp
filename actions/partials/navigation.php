<script src="./scripts/jquery.redirect.js"></script>

<?php
  session_start();
  include_once "../classes/Users.php";

  if (!isset($_SESSION["account"])) {
    header("Location: ../../login.php");
    die();
  }


  $user = unserialize($_SESSION["account"], array("User"));

  if ($user->userType == 1) { // start principal navigation
  ?>
  <div class="ui fixed inverted menu">
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
          echo    "Signed in as <b>$user->userName</b>";
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

<?php } ?>
