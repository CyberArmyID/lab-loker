<?php
include "../../init.php";
include "../template/header.php";
include "../functions/getAdmin.php";
include "../functions/applicant/getData.php";
?>
    <div class="wrapper">

<?php
include  "../template/sidebar.php";
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
                                <h3 class="card-title">Job</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <p>Nama Pelamar: </p>
                                    <p>No Handphone: </p>
                                    <p>About: </p>
                                    <div>
                                    <p>Skill:</p>
                                    <p>
                                        <ul>
                                        <li></li>
                                    </ul>
                                    </p>
                                    </div>


                                    <p>CV: </p>
                                    <hr>
                                    <p>Posisi yang dilamar:</p>
                                    <p>Nama Perusahaan:</p>
                                    <div>
                                        <form action="">
                                        <p>Update Status</p>
                                        <p>
                                            <div>
                                            <select name="" id="" class="form-select">
                                                <option value="1">Verifikasi</option>
                                                <option value="2">Terima</option>
                                                <option value="3">Tolak</option>
                                            </select>
                                            </div>
                                            <br>
                                            <div>
                                                <input type="submit" value="update" class="btn btn-outline-primary">
                                            </div>
                                        </p>

                                        </form>
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