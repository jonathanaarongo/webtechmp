<?php
  include_once "./actions/classes/Users.php";

  if (!isset($_SESSION["account"])) {
    header("Location: ./index.php");
    die();
  }


  $user = unserialize($_SESSION["account"], array("User"));

  if ($user->userType == 1) { // start principal navigation
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

<?php } ?>
