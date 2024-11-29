<?php
include "../../init.php";
include "../../template/header.php";
include "../../functions/job/getData.php";
?>
    <div class="wrapper">

<?php
include  "../../template/sidebar.php";
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
                                <h3 class="card-title">Job</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="position-relative p-3 bg-gray-light">
                                            <?php echo $job['name'];?> <br />
                                            <p><small><u><?php echo $job['date'];?></u></small></p>
                                            <p>Lokasi: <?php echo $job['location'];?></p>
                                            <p>Deskripsi: <?php echo $job['description'];?></p>
                                            <a href="<?php echo $functionApplyJob.'?id='.$job['id'];?>">
                                                <button class="btn btn-outline-primary">Kirim Lamaran</button>
                                            </a>
                                        </div>
                                    </div>

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
include "../../template/footer.php";
?>