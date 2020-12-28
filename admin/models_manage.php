<?php
include 'headerAdmin.php';

require_once('../app/classes/Models.php');
$models = new Models();
$allModels = $models->getAllModelName();

if (isset($_GET['status'])){
    if ($_GET['status'] == 'not_active'){
        $models->makeModelNotActive($_GET['id']);
    } elseif ($_GET['status'] == 'active'){
        $models->makeModelActive($_GET['id']);
    } elseif ($_GET['status'] == 'delete'){
        $models->deleteModelById($_GET['id']);
    }
}
?>

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Brand Management</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2"
                                               class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                               aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                    Ser No
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Browser: activate to sort column ascending">
                                                    Brand Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Model Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Main Image
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ($modelsInfo = mysqli_fetch_assoc($allModels)){ ?>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1"><?php echo $modelsInfo['id']; ?></td>
                                                <td><?php echo $modelsInfo['brand_name']; ?></td>
                                                <td><?php echo $modelsInfo['model_name']; ?></td>
                                                <td><img height="30px" src="../assets/images/main_image/<?php echo $modelsInfo['main_image']; ?>" alt="Main Image"></td>
                                                <td>
                                                    <?php
                                                        if ($modelsInfo['status']==1){
                                                            echo 'Active';
                                                        } else {
                                                            echo 'Not Active';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if($modelsInfo['status'] == 1){ ?>
                                                        <a href='?status=not_active&&id=<?php echo $modelsInfo['id']; ?>' class="btn btn-success btn-xs" title="Published">
                                                            <i class="fas fa-arrow-up"></i>
                                                        </a>
                                                       <?php } else{ ?>
                                                        <a href="?status=active&&id=<?php echo $modelsInfo['id']; ?>" class="btn btn-warning btn-xs" title="Unpublished">
                                                            <i class="fas fa-arrow-down"></i>
                                                        </a>
                                                        <?php } ?>
                                                        <a href="model_edit.php?id=<?php echo $modelsInfo['id']; ?>" class="btn btn-info btn-xs" title="Edit blog">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="?status=delete&&id=<?php echo $modelsInfo['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete This ?');">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Ser No</th>
                                                <th rowspan="1" colspan="1">Brand Name</th>
                                                <th rowspan="1" colspan="1">Model Name</th>
                                                <th rowspan="1" colspan="1">Main Image</th>
                                                <th rowspan="1" colspan="1">Status</th>
                                                <th rowspan="1" colspan="1">Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example2_info" role="status"
                                             aria-live="polite">Showing 1 to 10
                                            of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example2_previous"><a
                                                            href="#" aria-controls="example2" data-dt-idx="0"
                                                            tabindex="0"
                                                            class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                                                                aria-controls="example2"
                                                                                                data-dt-idx="1"
                                                                                                tabindex="0"
                                                                                                class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="2" tabindex="0"
                                                                                          class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="3" tabindex="0"
                                                                                          class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="4" tabindex="0"
                                                                                          class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="5" tabindex="0"
                                                                                          class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="example2"
                                                                                          data-dt-idx="6" tabindex="0"
                                                                                          class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="example2_next"><a
                                                            href="#"
                                                            aria-controls="example2"
                                                            data-dt-idx="7"
                                                            tabindex="0"
                                                            class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
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