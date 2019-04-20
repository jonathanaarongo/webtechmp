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
    include_once "./actions/helpers.php";

    load_navigation();

    ?>
  <br><br><br><br>
  <div class="ui visible message">
    <h3 class="ui header">Welcome back, </h3>
    <p>There are pending things for you to do <a href="actions/logout.php">signout</a> </p>
  </div>
  <hr>
  </hr>
  <?php
    load_dashboard();
  ?> 
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
