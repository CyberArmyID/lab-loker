<?php
include "init.php";
include "template/header.php";
include "functions/job/getAllData.php";
?>

    <div class="wrapper">
    <div style="float:right; margin:12px;">
        <a href="<?php echo $host.'/auth/login.php';?>">
            <button class="btn btn-outline-primary">Login</button>
        </a>
    </div>
    <br>
    <!-- Content Wrapper. Contains page content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Lowongan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                    if($resultJob->num_rows == 0){
                                        echo "Belum Ada Lowongan";
                                    } else {
                                        while ($job = $resultJob->fetch_assoc()) { ?>
                                            <div class="col-sm-4">
                                                <div class="position-relative p-3 bg-gray-light">

                                                    <h3><?php echo $job['name'];?></h3>
                                                    <p>Lokasi: <?php echo $job['location'];?></p>
                                                    <p><small><?php echo $job['date'];?></small></p>
                                                    <a href="<?php echo $menuDetailJob.'?id='.$job['id'];?>">
                                                        <button class="btn bg-primary">Detail</button>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php }
                                    }
                                    ?>



                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


<?php
include "template/footer.php";
?>