<?php
include '../front_end/header.php';
$brand = $_GET['brand'];
require_once '../app/classes/Models.php';
$models = new Models();
$allModels = $models->getAllActiveModelByBrand($brand);
?>
<p style="text-align: center; font-size: 40px; background-color: #bee5eb; text-decoration-color: yellow;"><b><?php echo strtoupper($brand)?></b></p>

<div class="row" style="padding-top: 15px;">
    <div class="col-md-3" style="border: 1px solid black;">
    </div>
    <div class="col-md-9">
        <div class="row">
        <?php while ($allActiveModel = mysqli_fetch_assoc($allModels)) { ?>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../<?php echo strtolower($brand);?>_<?php echo strtolower(str_replace(' ', '_', $allActiveModel['model_name']));?>_specifications.php"><img src="../assets/images/main_image/<?php echo $allActiveModel['main_image'];?>" alt="">
                <h5 style="text-align: center;"><?php echo $allActiveModel['model_name']?></h5></a>
            </div>
            <!--<div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                    <h5 style="text-align: center;">S20 Plus</h5></a>
            </div>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                    <h5 style="text-align: center;">S20</h5></a>
            </div>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                <h5 style="text-align: center;">S10 Lite</h5></a>
            </div>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                <h5 style="text-align: center;">S10 5G</h5></a>
            </div>-->
<!--            <div class="" style="width: 20%; padding: 10px;">-->
<!--                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">-->
<!--                <h5 style="text-align: center;">S10 Plus</h5></a>-->
<!--            </div>-->

        <hr>
    <?php } ?>
        </div>
        <!--<div class="row">
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                    <h5 style="text-align: center;">S20 Ultra</h5></a>
            </div>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                    <h5 style="text-align: center;">S20 Plus</h5></a>
            </div>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                    <h5 style="text-align: center;">S20</h5></a>
            </div>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                    <h5 style="text-align: center;">S10 Lite</h5></a>
            </div>
            <div class="" style="width: 20%; padding: 10px;">
                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">
                    <h5 style="text-align: center;">S10 5G</h5></a>
            </div>
<!--            <div class="" style="width: 20%; padding: 10px;">-->
<!--                <a href="../samsung_s20_ultra_specifications.php"><img src="../assets/images/smartphones/samsung/s20_ultra/s20Ultra_main.png" alt="">-->
<!--                    <h5 style="text-align: center;">S10 Plus</h5></a>-->
<!--            </div>-->
        </div>-->
        <hr>
    </div>
</div>



<?php include '../front_end/footer.php'?>