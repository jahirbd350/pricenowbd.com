<?php
$message='';

include 'headerAdmin.php';

if (isset($_POST['btnAddBrand'])) {
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/

    $filename = $_FILES['brandLogo']['name'];

    // destination of the file on the server
    $destination = '../assets/front_end/img/brands/'.$filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['brandLogo']['tmp_name'];
    $size = $_FILES['brandLogo']['size'];

    if (!in_array($extension, ['png'])) {
        echo "Your file extension must be .png";
    } elseif ($_FILES['brandLogo']['size'] > 5000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            require_once('../app/classes/Brands.php');
            $brandInsert = new Brands();
            $message = $brandInsert->addBrand($filename);
            echo "File uploaded successfully";
        } else {
            echo "Failed to upload file.  Failed to upload file.";
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
                            <h3 class="text-center">Add New Brand</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of Brand</label>
                                    <input type="text" name="brandName" class="form-control" id="exampleInputEmail1" placeholder="Enter the name of Brand">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Brand Logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="brandLogo" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose logo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" name="btnAddBrand" class="btn btn-primary">Submit</button>
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
