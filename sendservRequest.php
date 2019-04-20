<html>

<head>
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="57x57" href="./logo/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./logo/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./logo/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./logo/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./logo/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./logo/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./logo/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./logo/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./logo/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./logo/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./logo/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./logo/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./logo/favicon-16x16.png">
  <link rel="manifest" href="./logo/manifest.json">
  <meta name="msapplication-TileColor" content="./logo#ffffff">
  <meta name="msapplication-TileImage" content="./logo/ms-icon-144x144.png">
  <meta name="theme-color" content="./logo#ffffff">
  <title> Principal Dashboard </title>

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
  <div class="ui main text container">
    <div class="ui segment">
      <form class="ui form">
        <h2>Send a Service Request to Orophil</h2>
        <hr>
        </hr>
        <div class="ui required field">
          <label>Pick a Vessel</label>
          <div class="ui fluid search selection dropdown">
            <input required type="hidden" name="vessel">
            <i class="dropdown icon"></i>
            <div class="default text">Select Vessel</div>
            <div class="menu" id="vessel_menu">
            </div>
          </div>
        </div>

        <!--  <h4 class="ui header"> Where is it going? </h4> -->
        <div class="ui required field">
          <label>Ship Destination</label>
          <div class="ui fluid search selection dropdown">
            <input required type="hidden" name="country" id="country">
            <i class="dropdown icon"></i>
            <div class="default text">Select Country</div>
            <div class="menu">
              <div class="item" data-value="ar"><i class="ar flag"></i>Argentina</div>
              <div class="item" data-value="bh"><i class="bh flag"></i>Bahrain</div>
              <div class="item" data-value="cn"><i class="cn flag"></i>China</div>
              <div class="item" data-value="gr"><i class="gr flag"></i>Greece</div>
              <div class="item" data-value="it"><i class="it flag"></i>Italy</div>
              <div class="item" data-value="jp"><i class="jp flag"></i>Japan</div>
              <div class="item" data-value="sg"><i class="sg flag"></i>Singapore</div>
              <div class="item" data-value="tw"><i class="tw flag"></i>Taiwan</div>
              <div class="item" data-value="ae"><i class="ae flag"></i>United Arab Emirates</div>
              <div class="item" data-value="us"><i class="us flag"></i>United States</div>
              <div class="item" data-value="nz"><i class="nz flag"></i>New Zealand</div>
            </div>
          </div>
        </div>



        <div class="two fields">
          <div class="required field">
            <label>Start date</label>
            <div class="ui calendar" id="rangestart">
              <div class="ui input left icon">
                <i class="calendar icon"></i>
                <input required type="text" placeholder="Embarkation Start" name="start">
              </div>
            </div>
          </div>
          <div class="required field">
            <label>End date</label>
            <div class="ui calendar" id="rangeend">
              <div class="ui input left icon">
                <i class="calendar icon"></i>
                <input required type="text" placeholder="Embarkation End" name="end">
              </div>
            </div>
          </div>
        </div>

        <h4>Please input the number of people needed per rank! </h4>
        <div class="scrollable">
          <table class="ui celled padded table">
            <thead>
              <tr>
                <th class="three wide"><b>Deck Department</b></th>
                <th class="three wide"><b>Engine Department</b></th>
                <th class="three wide"><b>Steward Department</b></th>
                <th class="ten wide">Specific Requests </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Master:
                  <input type="number" name="master" min="0" max="15" step="1" value="0"> </td>
                <td>
                  Chief Engineer:<input type="number" name="eng" min="0" max="15" step="1" value="0"> </td>
                <td>Chief Cook:
                  <input type="number" name="cook" min="0" max="15" step="1" value="0"> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
              <tr>
                <td>Chief Mate:
                  <input type="number" name="mate" min="0" max="15" step="1" value="0"> </td>
                <td>
                  2nd Engineer:<input type="number" name="eng2" min="0" max="15" step="1" value="0"> </td>
                <td>Messman:
                  <input type="number" name="mess" min="0" max="15" step="1" value="0"> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
              <tr>
                <td>2nd Mate:
                  <input type="number" name="mate2" min="0" max="15" step="1" value="0"> </td>
                <td>
                  3rd Engineer:<input type="number" name="eng3" min="0" max="15" step="1" value="0"> </td>
                  <td> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
              <tr>
                <td>3rd Mate:
                  <input type="number" name="mate3" min="0" max="15" step="1" value="0"> </td>
                <td>
                  4th Engineer:<input type="number" name="eng4" min="0" max="15" step="1" value="0"> </td>
                  <td> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
              <tr>
                <td>Able Seaman:
                  <input type="number" name="able" min="0" max="15" step="1" value="0"> </td>
                <td>
                  Oilers:<input type="number" name="oil" min="0" max="15" step="1" value="0"> </td>
                    <td> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
              <tr>
                <td>Ordinary Seaman:
                  <input type="number" name="ord" min="0" max="15" step="1" value="0"> </td>
                <td>
                  Wipers:<input type="number" name="wip" min="0" max="15" step="1" value="0"> </td>
                    <td> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
              <tr>
                <td>Deck Cadet:
                  <input type="number" name="deckc" min="0" max="15" step="1" value="0"> </td>
                <td>
                  Engine Cadet:<input type="number" name="engc" min="0" max="15" step="1" value="0"> </td>
                    <td> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
              <tr>
                <td>Deck Boy:
                  <input type="number" name="deckboy" min="0" max="15" step="1" value="0"> </td>
                <td></td>
                <td> </td>
                <td><input type="text" placeholder="Please enter specific request if any." data-name="request"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <br><br>
        <div class="ui fluid buttons">
          <input type="reset" value="Cancel" class="ui button"/>
          <div class="or"></div>
          <input type="submit" value="Submit" class="ui blue button"/>
        </div>
        <div class="ui hidden message">
          <span></span>
        </div>
      </div>
</form>
  </div>
  </div>


  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header"> Certifications</h4>
          <div class="ui inverted link list">
            <img class="ui centered tiny circular image" src="./images/iso.png">
            <br />
            <img class="ui centered small circular image" src="./images/mlc.jpg">
          </div>
        </div>
        <div class="six wide column">
          <h4 class="ui inverted header">Afilliated with</h4>
          <div class="ui grid">
            <div class="eight wide column">
              <img class="ui centered tiny circular image" src="./images/dole.png">
              <img class="ui centered tiny circular image" src="./images/poea.png">
            </div>
            <div class="eight wide column">

              <img class="ui centered tiny circular image" src="./images/sec.png">
              <img class="ui centered tiny circular image" src="./images/marina.png">
            </div>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header"></h4>
          <p class="foot"></p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <img src="./images/4.jpg" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Contact Us</a>
        <a class="item" </a> <a class="item"></a>
      </div>
    </div>
  </div>
</body>

<!--- Semantic JS --->
<script src="./semantic/dist/semantic.min.js"></script>
<script>

  var today =new Date();
  $('#rangestart').calendar({
    type: 'date',
    endCalendar: $('#rangeend')
  });
  $('#rangeend').calendar({
    type: 'date',
    startCalendar: $('#rangestart')
  });
</script>

<script>
  $('.ui.dropdown').dropdown();
</script>

<script>
  $('.ui.sticky')
    .sticky({
      context: '#tablehead'
    });
</script>
<script src="./scripts/principal/sendserv.js"></script>
</html>
