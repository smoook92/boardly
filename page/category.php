<?php

$sql = "SELECT * FROM `category` WHERE url='$category_url'";
$result = mysqli_query($link, $sql);
while ($row=mysqli_fetch_array($result)){
    $id_category = $row['id'];
    $name_category = $row['name'];
    $description_category = $row['description'];
}

include('header.php'); ?>
<div class="r40px"></div>
<div class="container">
    <h1><?php echo $name_category; ?> <?php echo $v_gorode; ?></h1>
    <div class="r40px"></div>
    <p><?php echo $description_category; ?></p>
    <div class="r55px"></div>

    <select class="form-select float-end" aria-label="Default select example" style="max-width: 250px">
      <option selected>Категории</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="r25px"></div>
</div>

<div class="r40px"></div>

<div class="container">
    <div class="row">
      <div class="col-md-3 col-12">
        реклама
      </div>
      
    <?php 
        $sql = "SELECT * FROM `objavlenie` WHERE category_id='$id_category'";
        $result = mysqli_query($link, $sql);
        while ($row=mysqli_fetch_array($result)){
            $id_category = $row['id'];
            $nazvanie = $row['nazvanie'];
            $cena = $row['cena'];
            $opisanie = $row['opisanie'];
            $user_id = $row['user_id'];
    ?>

        <div class="col-md-9 col-12">
            <div class="row poisk-card">
                <div class="col-sm-3">
                    <img src="/images/pryamougolnik.png" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <a href="#"><?php echo $nazvanie;?></a>
                    <p><b><?php echo $cena;?> руб.</b></p>
                    <p><?php echo $opisanie; ?></p>
                </div>
                <div class="col-md-3">
                    <?php $sql = "SELECT * FROM `user` WHERE id='$id_user'";
                    $result = mysqli_query($link, $sql);
                    while ($row=mysqli_fetch_array($result)){$login_name=$row['login'];}
                    ?>
                    <h3><?php echo $login_name; ?></h3>
                </div>
            </div>

            <div class="r20px"></div>
    
    <?php } ?>

            <div class="row poisk-card">
                <div class="col-sm-3">
                    <img src="/images/pryamougolnik.png" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <a href="#">Название iPhone 11 PRO Max</a>
                    <p><b>100 000 руб.</b></p>
                </div>
                <div class="col-md-3">
                    <h3>Альберт</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>