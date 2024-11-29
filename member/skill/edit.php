<?php
include "../../init.php";
include "../../template/header.php";
include "../../functions/member/getUser.php";
include "../../functions/member/skill/getData.php";
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
                                    <h3 class="card-title">Edit Skill</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo $functionUpdateSkill.'?id='.$data['id'];?>" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Skill</label>
                                            <input type="text" class="form-control" name="skill" value="<?php echo $data['skill'];?>">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button> | <a href="<?php echo $menuProfile;?>/profile"><button type="button" class="btn btn-warning">Back</button></a> | <a href="<?php echo $functionDeleteSkill.'?id='.$data['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
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