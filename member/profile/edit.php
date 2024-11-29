<?php
include "../../init.php";
include "../../template/header.php";
include "../../functions/member/getUser.php";
?>
    <div class="wrapper">

        <?php
        include "../../template/sidebar.php";
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update Profile</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo $functionUpdateProfile;?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" value="<?php echo $user['fullname'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Developer, System Analyst, Designer, ...." value="<?php echo $user['title'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Avatar</label>
                                                <label for="formFile" class="form-label">Default file input example</label>
                                                <input class="form-control" type="file" id="formFile" name="avatar">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button> | <a href="<?php echo $menuProfile;?>/profile/index.php"><button type="button" class="btn btn-warning">Back</button></a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

<?php
include "../../template/footer.php";
?>