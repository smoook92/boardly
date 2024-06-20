<?php include('header.php'); ?>

<?php

  $id_tovar = $url_m[count($url_m)-2];

  $sql = "SELECT * FROM `objavlenie` WHERE id='$id_tovar'";
  $result = mysqli_query($link, $sql);
  while ($row=mysqli_fetch_array($result)){
      $nazvanie = $row['nazvanie'];
      $cena = $row['cena'];
      $opisanie = $row['opisanie'];
      $user_id = $row['user_id'];
  }
?>

<div style="height:60px"></div>

<div class="container">
  <div class="row">
    <div class="col-md-7 col-12">
      <h1><?php echo $nazvanie; ?></h1>
      <div style="height:25px"></div>
      <img src="/images/1.jpg" class="img-fluid" alt="">
      <div style="height:37px"></div>
      <p><?php echo $opisanie; ?></p>
    </div>
    <div class="col-md-3 col-12">
      <center>
        <h2><?php echo $cena; ?> руб.</h2>
      </center>
      <div class="r15px"></div>

      <?php $sql = "SELECT * FROM `user` WHERE id='$id_user'";
        $result = mysqli_query($link, $sql);
        while ($row=mysqli_fetch_array($result))
        {$login_name=$row['login'];
          $tel=$row['tel'];}
      ?>

      <a href="tel:<?php echo $tel; ?>">
      <button type="button" class="btn btn-success tel-card"><?php echo $tel; ?></button>
      </a>
      
      <div class="r20px"></div>

      <div class="contact-card">
        <center>
          <h4><?php echo $login_name; ?></h4>
          <a href="#">все объявления</a>
        </center>
      </div>
    </div>
    <div class="col-md-2 col-12">
      
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-9 col-12">
      <h2>Все объявления</h2>

      <div class="row">
        <div class="col-md-3 col-12">
          <img src="/images/pryamougolnik.png" class="img-fluid" alt="">
          <a href="#">Название iPhone 11 PRO Max</a>
          <p><b>100 000 руб.</b></p>
        </div>
        <div class="col-md-3 col-6">
          <img src="/images/pryamougolnik.png" class="img-fluid" alt="">
          <a href="#">Название iPhone 11 PRO Max</a>
          <p><b>100 000 руб.</b></p>
        </div>
        <div class="col-md-3 col-6">
          <img src="/images/pryamougolnik.png" class="img-fluid" alt="">
          <a href="#">Название iPhone 11 PRO Max</a>
          <p><b>100 000 руб.</b></p>
        </div>
        <div class="col-md-3 col-6">
          <img src="/images/pryamougolnik.png" class="img-fluid" alt="">
          <a href="#">Название iPhone 11 PRO Max</a>
          <p><b>100 000 руб.</b></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>