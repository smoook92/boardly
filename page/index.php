<?php include('header.php'); ?>
<div class="container">
  <div class="row">

      <?php if ($gorod == 'Россия'){ $geo_url = 'russia'; } ?>

      <?php //категории на главной
        $sql = "SELECT * FROM `category`";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)){
          $id = $row['id'];
          $name = $row['name'];
          $url = $row['url'];
      ?>
      <div class="col-md-2 col-12">
        <center>
          <?php
            if($geo_url !='russia') echo '<a href="/'.$geo_url.'/'.$url.'/">'.$name.'</a>';
            else echo '<a href="/'.$url.'/">'.$name.'</a>';;
          ?>
        </center>
      </div>
      <?php
      }
      ?>
</div>
</div>

<div style="height:64px;"></div>

<div class="container">
  <div class="row">
    <div class="col-md-9 col-12">
      <h2>Все объявления <?php echo $v_gorode; ?></h2>
      <div class="r20px"></div>
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
    <div class="col-md-3 col-12">
      <h2>Избранное</h2>
      <a href="#">Название iPhone 11 PRO Max</a>
      <p><b>100 000 руб.</b></p>

      <div style="height:13px;"></div>

      <a href="#">Название iPhone 11 PRO Max</a>
      <p><b>100 000 руб.</b></p>

      <div style="height:13px;"></div>
      
      <a href="#">Название iPhone 11 PRO Max</a>
      <p><b>100 000 руб.</b></p>

      <div style="height:13px;"></div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>