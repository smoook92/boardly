<?php 
  $url = $_SERVER['REQUEST_URI'];
  $url_m = explode('/', $url);

  $link = new mysqli('localhost', 'root', '', 'boardly_db');
  
  $geo_url = $url_m[1];

  if ($geo_url == 'geo') {
    include('page/geo.php');

  }
  else {
    //geo
    $sql = "SELECT * FROM `geo` WHERE url='$geo_url'";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)){
      $gorod = $row['gorod'];
      $v_gorode = $row['v_gorode'];
    }

    include('page/index.php');

  }
?>