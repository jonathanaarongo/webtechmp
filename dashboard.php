<html>

<head>
  <meta charset="utf-8">
  <title> Dashboard </title>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
  <?php
  include_once "actions/helpers.php";
  include_once "../classes/Users.php";
  session_start();

    if (!isset($_SESSION["account"])) {
      header("Location: ../../login.php");
      die();
    }


    $user = unserialize($_SESSION["account"], array("User"));
    #load_navigation();
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
  <br><br><br><br>
  <div class="ui visible message">
    <h3 class="ui header">Welcome back, </h3>
    <?php
    echo "<p>There are pending things for you to do <a href='actions/logout.php'>signout</a> $user->userName </p>";
    ?>
  </div>
  <hr>
  </hr>
  <?php
    #load_dashboard();
  ?>
  <div class="ui internally celled grid">
    <div class="row">
    <div class="centered ten wide column">
      <div class="ui grid">
        <div class="two column row">
          <div class="column">
            <div class="ui segment">
            <h4> <i class="upload icon"></i>Upload your Photos!</h4>
            <div class="ui cards">
              <div class="ui fluid card">
                <div class="content">
                  <img class="right floated mini ui image" src="images/test.png">
                  <div class="header">
                    Click here to upload your Photos!
                  </div>
                  <div align="right" class="count">
                  <b><i>  </b></i>
                 </div>
                  <div class="description">
                    Accepted file types are ".PNG, .JPG, .JPEG, .GIF"
                  </div>
                </div>
                <div class="extra content">
                      <a class="ui fluid button" href="uploadphotos.php">Go</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="ui segment">
          <h4> <i class="image outline icon"></i>View your Photo Gallery!</h4>
          <div class="ui cards">
            <div class="ui fluid card">
              <div class="content">
                <img class="right floated mini ui image" src="images/test.png">
                <div class="header">
                  Click here to View your photo gallery!
                </div>
                <div align="right" class="count">
                <b><i>  </b></i>
               </div>
                <div class="description">
                  Add your vessel to the system!
                </div>
              </div>
              <div class="extra content">
                    <a class="ui fluid button" href="photogallery.php">Go</a>
              </div>
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
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
    <img src="./images/4.jpg" class="ui centered mini image">
    <div class="ui horizontal inverted small divided link list">
      <a class="item" href="#">Contact Us</a>
      <a class="item"</a>
      <a class="item"></a>
    </div>
  </div>
</div>
  </body>


<!--- Semantic JS --->
<script src="./semantic/dist/semantic.min.js"></script>

</html>
