<?php
include "../../init.php";
include "../../template/header.php";
include "../../functions/history/getAllData.php";
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
                    <h2>
                        <?php
                        if (isset($_SESSION['error_message'])) {
                            echo "<div style='color: red;margin-top: 10px'>" . $_SESSION['error_message'] ."</div > ";
                            unset($_SESSION['error_message']);
                        }

                        if (isset($_SESSION['success_message'])) {
                            echo "<div style='color: green;margin-top: 10px'>" . $_SESSION['success_message'] . "</div > ";
                            unset($_SESSION['success_message']);
                        }
                        ?>
                    </h2>
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
                                <h3 class="card-title">Applied Job History</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                    if($result->num_rows == 0){
                                        echo "Belum Ada Lowongan";
                                    } else {
                                        while ($job = $result->fetch_assoc()) { ?>
                                            <div class="col-sm-4">
                                                <div class="position-relative p-3 bg-gray-light">

                                                    <?php echo $job['name'];?> <br />
                                                    <p><small><u><?php echo $job['date'];?></u></small></p>
                                                    <p>Lokasi: <?php echo $job['location'];?></p>
                                                    Status:
                                                    <?php
                                                    switch ($job['status']) {
                                                        case '1':
                                                            echo 'Verifikasi';
                                                            break;
                                                        case '2':
                                                            echo 'Diterima';
                                                            break;
                                                        case '3':
                                                            echo 'Ditolak,';
                                                            break;
                                                        default:
                                                            break;
                                                    }
                                                    ?>



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
include "../../template/footer.php";
?>