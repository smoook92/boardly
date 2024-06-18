<?php include('header.php');?>

<div class="container">
    <?php
        //geo
        $geo_url = $url_m[1];
        $sql = "SELECT * FROM `geo`";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)){
            echo '<a href="/'.$row['url'].'/">'.$row['gorod'].'</a> ';
        }
    ?>
</div>

<?php include('footer.php');?>