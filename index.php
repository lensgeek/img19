<!doctype html>
<html class="no-js" lang="en">
  <head>
    <base href="//localhost:8888/img19/" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <title>IMG 19 - Exhibition 30th May // 5th June</title>
    <link rel="stylesheet" href="css/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <link rel="icon" type="image/gif" href="fav/favicon_64.gif">
  </head>
  <body>
    
<?php 

  include_once "myQLserver.php";
  $data = $_SERVER['QUERY_STRING']; 
  parse_str($data, $data_array); // Breaks the URL into it's componants after ? & Returns as Array [cancelling out the & split]
  if (isset($data_array['author'])) {  //If URL contains an Author's name
    $query_author = "SELECT * FROM author WHERE author_id = '". $data_array['author'] ."'";
    $result_array = [];
    if ($result = mysqli_query($link, $query_author)) {
      while ($row = $result->fetch_assoc()) {
        $result_array = $row;
        @include 'author_template.php';
      }
    }
    mysql_close($link);
  }else{
    ?>
    <div class="row">
      <div class="large-4 columns text-center large-centered logo-header">
          <a href=""><img src="img/img19_circle2.gif" /></a>
      </div>
    </div> 
    <div class="row panel">

        <div class="large-10 large-centered columns text-center">
        <p>Photography, considered a modern art form, is no longer bound by the paper’s edge; the exhibition will evidence this as it showcases a variety of forms which photography can take in contemporary practice. The featured artists use photography as a medium to raise awareness on important social demographics and engage with current debates such as the relation between photography, history, memory and space.</p>
        <p><i class="logo">IMG19</i> Features New Works By :</p>
      </div>    
      <div class=" medium-6 large-6 columns text-center">
        <ul class="no-bullet logo">
          <li><a href="author/rachel-appleby" title="Rachel Appleby">Rachel Appleby</a></li>
          <li><a href="author/ioana-bultoc" title="Ioana Bultoc">Ioana Bultoc</a></li>
          <li><a href="author/heidi-culverwell" title="Heidi Culverwell">Heidi Culverwell</a></li>
          <li><a href="author/alex-edwards" title="Alex Edwards">Alex Edwards</a></li>
          <li><a href="author/theo-ellison" title="Theo Ellison">Theo Ellison</a></li>
          <li><a href="author/kate-green" title="Kate Green">Kate Green</a></li>
          <li><a href="author/lee-hassall" title="Lee Hassall">Lee Hassall</a></li>
          <li><a href="author/talha-hassan" title="Talha Hassan">Talha Hassan</a></li>
          <li><a href="author/joseph-kesisoglou" title="Joseph Kesisoglou">Joseph Kesisoglou</a></li>
          <li><a href="author/alice-martin-smith" title="Alice Martin-Smith">Alice Martin Smith</a></li>
        </ul>
      </div>
      <div class="medium-6 large-6 columns text-center">
        <ul class="no-bullet logo">
          <li><a href="author/alex-mason" title="Alex Mason">Alex Mason</a></li>
          <li><a href="author/tania-merriman" title="Tania Merriman">Tania Merriman</a></li>
          <li><a href="author/sophie-moet" title="Sophie Moet">Sophie Moet</a></li>
          <li><a href="author/melissa-santos" title="Melissa Santos">Melissa Santos</a></li>
          <li><a href="author/melissa-stapleton" title="Melissa Stapleton">Melissa Stapleton</a></li>
          <li><a href="author/lauren-thatcher" title="Lauren Thatcher">Lauren Thatcher</a></li>
          <li><a href="author/christopher-trafford" title="Christopher Trafford">Christopher Trafford</a></li>
          <li><a href="author/caroline-walker" title="Caroline Walker">Caroline Walker</a></li>
          <li><a href="author/hollie-woodward" title="Hollie Woodward">Hollie Woodward</a></li>
        </ul>
      </div>
    </div>
    <?php }; ?>
    <div class="row">
      <div class="large-12 columns">
        <h3>Navigate our floor plan:</h3>
          <?php include "floorplan.php"; ?>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="twitter-feed large-4 columns">
          <p><i class="fi-social-twitter"></i> Follow Our Twitter</p>
          <?php 
            include 'latest-tweets/tweets.php';
          ?>
        </div>
        <div class="large-4 columns">
          <p>Navigate <i class="logo">img19</i></p>
          <p>View the Official Press Release <a href="assets/IMG19_PressRelease.pdf" download="IMG19 Press Release.pdf"><i class="fi-page-export-pdf"></i></a></p>
          <p><i class="fi-marker"></i> Find people's work on our Map</p>
          <p><i class="fi-calendar"></i> Schedule &amp; opening times:</p>
            <ul class="no-bullet">
              <li>Opening Night: Friday 30th. 6pm - 9pm</li>
              <li>Saturday 31/05 - Thursday 05/06</li>
              <li>10am - 5pm (4pm Sunday)</li>

            </ul>
        </div>
        <div class="instagram-feed large-4 columns">
          <p><i class="fi-social-instagram"></i> Follow Our Instagram</p>
          <?php 
           @include 'latest-insta/gram.php';
           ?>
        </div>
      </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>