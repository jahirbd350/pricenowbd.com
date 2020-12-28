<?php
include 'headerAdmin.php';
$message='';

$id = $_GET['id'];
require_once('../app/classes/Models.php');
$models = new Models();
$modelById = $models->getModelById($id);
$modelByIdInfo = mysqli_fetch_assoc($modelById);


if (isset($_POST['btnUpdateModel'])) {
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    unlink('../assets/images/main_image/'.$modelByIdInfo['main_image']);

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
            $modelUpdate = new Models();
            $modelUpdate->updateModelInfo($id,$filename);
            $message= "Model Info Updated successfully";
        } else {
            $message= "Failed to upload file.  Failed to upload file.";
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
                            <?php
                                echo $message;
                                //echo '../assets/images/main_image/'.$modelByIdInfo['main_image'];
                            ?>
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
                            <h3 class="text-center">Update Model Info</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
                        ?>

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of Brand</label>
                                    <select class="form-control" name="brandName" id="">
                                        <option selected value="">--Select Brand--</option>
                                        <?php
                                        require_once '../app/classes/Brands.php';
                                        $brands = new Brands();
                                        $allBrands = $brands->getAllBrandName();
                                        while ($brandsInfo = mysqli_fetch_assoc($allBrands)){ ?>
                                            <option value="<?php echo $brandsInfo['brand_name']?>"><?php echo $brandsInfo['brand_name']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of Model</label>
                                    <input type="text" name="modelName" class="form-control" id="exampleInputEmail1" value="<?php echo $modelByIdInfo['model_name']?>" placeholder="Enter the name of Model">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Old Main Image</label>
                                    <img style="margin-left: 20px;background-color: antiquewhite" height="50px" src="../assets/images/main_image/<?php echo $modelByIdInfo['main_image']?>" alt="Old Logo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">New Main Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="mainImage" type="file" value="<?php echo $modelByIdInfo['main_image']?>" name="mainImage" class="custom-file-input">
                                            <label class="custom-file-label fileName" for="exampleInputFile">Choose new image</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" name="btnUpdateModel" class="btn btn-primary">Submit</button>
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





<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.fileName').html(fileName);
    });
</script>





<?php
include 'footerAdmin.php';
?>

