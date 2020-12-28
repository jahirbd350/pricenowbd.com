<?php
require 'header.php';
require_once '../app/classes/Brands.php';
$brands = new Brands();
$allBrands = $brands->getAllActiveBrandName();

?>
<div class="container">
    <div class="row" style="padding-top: 15px;">
        <?php while ($allActiveBrands = mysqli_fetch_assoc($allBrands)) { ?>
            <div class="brands-style col-sm-2 ">
                <a href="models_by_brands.php?brand=<?php echo $allActiveBrands['brand_name']; ?>"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/<?php echo $allActiveBrands['brand_logo']?>" alt=""></a>
                <a href="models_by_brands.php?brand=<?php echo $allActiveBrands['brand_name']; ?>"><h5 class="text-center" style="margin-top: 1px; padding-top: 0px;"><?php echo $allActiveBrands['brand_name'];?></h5></a>
            </div>
        <?php } ?>
    </div>
</div>
<hr>

<!--<div class="row">
    <div class="col-md-2">
        <a href="../brand_pages/lg.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/LG_Logo.png" alt=""></a>
        <a href="../brand_pages/lg.php"><h5 class="text-center">LG</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/htc.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/htc_logo.png" alt=""></a>
        <a href="../brand_pages/htc.php"><h5 class="text-center">HTC</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/motorola.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/motorola_logo.png" alt=""></a>
        <a href="../brand_pages/motorola.php"><h5 class="text-center">MOTOROLA</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/lenovo.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/lenovo_logo.png" alt=""></a>
        <a href="../brand_pages/lenovo.php"><h5 class="text-center">LENOVO</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/xiaomi.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/xiaomi_logo.png" alt=""></a>
        <a href="../brand_pages/xiaomi.php"><h5 class="text-center">XIAOMI</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/google.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/google_logo.png" alt=""></a>
        <a href="../brand_pages/google.php"><h5 class="text-center">GOOGLE</h5></a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-2">
        <a href="../brand_pages/honor.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/honor_Logo.png" alt=""></a>
        <a href="../brand_pages/honor.php"><h5 class="text-center">HONOR</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/oppo.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/oppo_logo.png" alt=""></a>
        <a href="../brand_pages/oppo.php"><h5 class="text-center">OPPO</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/realme.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/realme_logo.png" alt=""></a>
        <a href="../brand_pages/realme.php"><h5 class="text-center">REALME</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/vivo.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/vivo_logo.png" alt=""></a>
        <a href="../brand_pages/vivo.php"><h5 class="text-center">VIVO</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/meizu.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/meizu_logo.png" alt=""></a>
        <a href="../brand_pages/meizu.php"><h5 class="text-center">MEIZU</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/blackberry.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/blackberry_logo.png" alt=""></a>
        <a href="../brand_pages/blackberry.php"><h5 class="text-center">BLACKBERRY</h5></a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-2">
        <a href="../brand_pages/asus.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/asus_logo.png" alt=""></a>
        <a href="../brand_pages/apple.php"><h5 class="text-center">ASUS</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/alcatel.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/alcatel_logo.png" alt=""></a>
        <a href="../brand_pages/alcatel.php"><h5 class="text-center">ALCATEL</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/zte.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/zte_logo.png" alt=""></a>
        <a href="../brand_pages/zte.php"><h5 class="text-center">ZTE</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/microsoft.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/microsoft_logo.png" alt=""></a>
        <a href="../brand_pages/microsoft.php"><h5 class="text-center">MICROSOFT</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/vodafone.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/vodafone-_logo.png" alt=""></a>
        <a href="../brand_pages/vodafone.php"><h5 class="text-center">VODAFONE</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/energizer.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/energizer_logo.png" alt=""></a>
        <a href="../brand_pages/energizer.php"><h5 class="text-center">ENERGIZER</h5></a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-2">
        <a href="../brand_pages/"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/cat_logo.png" alt=""></a>
        <a href="../brand_pages/"><h5 class="text-center">CAT</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/sharp.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/sharp_logo.png" alt=""></a>
        <a href="../brand_pages/sharp.php"><h5 class="text-center">SHARP</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/micromax.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/micromax_logo.png" alt=""></a>
        <a href="../brand_pages/micromax.php"><h5 class="text-center">MICROMAX</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/infinix.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/infinix_logo.png" alt=""></a>
        <a href="../brand_pages/infinix.php"><h5 class="text-center">INFINIX</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/ulefone.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/ulefone_logo.png" alt=""></a>
        <a href="../brand_pages/ulefone.php"><h5 class="text-center">ULEFONE</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/tecno.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/tecno_logo.png" alt=""></a>
        <a href="../brand_pages/tecno.php"><h5 class="text-center">TECNO</h5></a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-2">
        <a href="../brand_pages/blu.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/blu_logo.png" alt=""></a>
        <a href="../brand_pages/blu.php"><h5 class="text-center">BLU</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/acer.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/acer_logo.png" alt=""></a>
        <a href="../brand_pages/acer.php"><h5 class="text-center">ACER</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/wiko.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/wiko_logo.png" alt=""></a>
        <a href="../brand_pages/wiko.php"><h5 class="text-center">WIKO</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/panasonic.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/panasonic_logo.png" alt=""></a>
        <a href="../brand_pages/panasonic.php"><h5 class="text-center">PANASONIC</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/verykool.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/verykool_logo.png" alt=""></a>
        <a href="../brand_pages/verykool.php"><h5 class="text-center">VERYKOOL</h5></a>
    </div>
    <div class="col-md-2">
        <a href="../brand_pages/plum.php"><img style="padding: 5px; border: 1px solid black;" src="../assets/front_end/img/brands/plum_logo.png" alt=""></a>
        <a href="../brand_pages/plum.php"><h5 class="text-center">PLUM</h5></a>
    </div>
</div>-->

<?php include 'footer.php'?>
