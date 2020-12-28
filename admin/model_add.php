<?php
$message='';

include 'headerAdmin.php';

if (isset($_POST['btnAddMOdel'])) {
    echo '<pre>';
    $message=$_POST;
    echo '</pre>';

    $filename = $_FILES['mainImage']['name'];

    // destination of the file on the server
    $destination = '../assets/images/main_image/'.$filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['mainImage']['tmp_name'];
    $size = $_FILES['mainImage']['size'];

    if (!in_array($extension, ['png'])) {
        $message= "Your file extension must be .png";
    } elseif ($_FILES['mainImage']['size'] > 5000000) { // file shouldn't be larger than 1Megabyte
        $message= "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            require_once('../app/classes/Models.php');
            $models = new Models();
            $message = $models->addModel($filename);
            $message= "File uploaded successfully";
        } else {
            $message= "Failed to upload file.";
        }
    }
}

?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-3 col-md-6">
                    <div class="col-md-12">
                        <h4 class="text-center text-warning">
                            <?php echo $message; ?>
                        </h4>
                        <h4 class="text-center text-success bg-info">
                            <?php if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                            };
                            unset($_SESSION['message']);
                            ?>
                        </h4>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="text-center">Add New Model</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of Brand</label>
                                    <select class="form-control" name="brandName" id="">
                                        <option selected value="">--Select Brand--</option>
                                        <?php
                                            require_once '../app/classes/Brands.php';
                                            $brands = new Brands();
                                            $allBrands = $brands->getAllActiveBrandName();
                                            while ($brandsInfo = mysqli_fetch_assoc($allBrands)){ ?>
                                                <option value="<?php echo $brandsInfo['brand_name']?>"><?php echo $brandsInfo['brand_name']?></option>
                                         <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of Model</label>
                                    <input type="text" name="modelName" class="form-control" id="exampleInputEmail1" placeholder="Enter the name of Brand">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Main Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="mainImage" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image1</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" name="btnAddMOdel" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>











<?php
    include 'footerAdmin.php';
?>
