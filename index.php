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
    <div class="row">
      <div class="large-12 columns text-center logo-header">
          <a href=""><img src="img/img19_circle2.gif" /></a>
      </div>
    </div> 
    <div class="row panel">

<?php 

  include_once "myQLserver.php";
  $data = $_SERVER['QUERY_STRING']; 
  parse_str($data, $data_array); // Breaks the URL into it's componants after ? & Returns as Array [cancelling out the & split]
  if (isset($data_array['author'])) { 
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
        <div class="large-10 large-centered columns text-center">
        <p>Photography, considered a modern art form, is no longer bound by the paper’s edge; the exhibition will evidence this as it showcases a variety of forms which photography can take in contemporary practice. The featured artists use photography as a medium to raise awareness on important social demographics and engage with current debates such as the relation between photography, history, memory and space.</p>
        <p><i class="logo">IMG19</i> Features New Works By :</p>
      </div>    
      <div class=" medium-6 large-6 columns text-center">
        <ul class="no-bullet logo">
          <li>Rachel Appleby</li>
          <li>Ioana Bultoc</li>
          <li>Heidi Culverwell</li>
          <li>Alex Edwards</li>
          <li>Theo Ellison</li>
          <li>Kate Green</li>
          <li>Lee Hassall</li>
          <li>Talha Hassan</li>
          <li>Joseph Kesisoglou</li>
          <li>Alice Martin Smith</li>
        </ul>
      </div>
      <div class="medium-6 large-6 columns text-center">
        <ul class="no-bullet logo">
          <li>Alex Mason</li>
          <li>Tania Merriman</li>
          <li>Sophie Moet</li>
          <li>Melissa Santos</li>
          <li>Melissa Stapleton</li>
          <li>Lauren Thatcher</li>
          <li>Christopher Trafford</li>
          <li>Caroline Walker</li>
          <li>Hollie Woodward</li>
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
          <p>Download a file here <i class="fi-page-export-pdf"></i></p>
          <p>Launch into an external webpage <i class="fi-link"></i></p>
          <p><i class="fi-marker"></i> Logo for Gallery Map location</p>
          <p><i class="fi-magnifying-glass"></i> Get more information</p>
          <p><i class="fi-calendar"></i> Schedule &amp; opening times</p>
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