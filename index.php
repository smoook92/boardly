<?php 
  $url = $_SERVER['REQUEST_URI'];
  $url_m = explode('/', $url);

  $link = new mysqli('localhost', 'root', '', 'boardly_db');
  
  $geo_url = $url_m[1];

  if ($geo_url == 'geo') {
    $gorod = 'Россия'; $v_gorode = 'в России';
    include('page/geo.php');

  } else {
    //geo
    $g = 0;
    $sql = "SELECT * FROM `geo` WHERE url='$geo_url'";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)){
      $gorod = $row['gorod'];
      $v_gorode = $row['v_gorode'];
      $g++;
    }

    if($gorod == ''){$gorod = 'Россия'; $v_gorode = 'в России'; $geo_url = 'russia';}

    if($g == 0) $category_url = $url_m[1];
    else $category_url = $url_m[2];

  if($category_url!='') include ('page/category.php');
  else include('page/index.php');

  }
?>