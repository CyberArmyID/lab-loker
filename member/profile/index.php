<?php
include "../../init.php";
include "../../template/header.php";
include "../../functions/member/getUser.php";
include "../../functions/member/skill/getAllData.php";
include "../../functions/member/cv/getData.php";
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
                    <div class="col-md-6">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid"
                                         src="<?php echo $functionMember.'/profile/avatar.php?file='.$avatar;?>"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><?php echo $user['fullname'] ?? '-';?></h3>

                                <p class="text-muted text-center"><?php echo $user['title'] ?? '-';?></p>
                                <p class="text-muted text-center"><?php echo $user['phone_number'];?></p>

                                <?php

                                if (isset($_SESSION['error_message'])) {
                                    echo "<div style='color: red;margin-top: 10px'>" . $_SESSION['error_message'] ."</div > ";
                                    unset($_SESSION['error_message']);
                                }
                                ?>
                                <a href="<?php echo $menuProfileEdit;?>" class="btn btn-outline-primary btn-block"><b>Update Profile</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- Bio Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p><?php echo @htmlspecialchars_decode($user['about']) ?? '-';?></p>
                                <a href="<?php echo $menuProfileEditBio;?>" class="btn btn-outline-primary btn-block"><b>Update Bio</b></a>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Skill</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php
                                if (isset($_SESSION['error_message_skill'])) {
                                    echo "<div style='color: red;margin-top: 10px'>" . $_SESSION['error_message_skill'] ."</div > ";
                                    unset($_SESSION['error_message_skill']);
                                }
                                ?>
                                <?php
                                if($resultSkill->num_rows == 0){
                                    echo "Belum Ada Data";
                                } else {
                                    while ($skills = $resultSkill->fetch_assoc()) {
                                   echo "<ul>";
                                    echo "<li> <a href=".$menuProfileEditSkill.'?id='.$skills['id'].">".$skills['skill']."</a></li>";
                                   echo "</ul>";
                                }
                                }
                                ?>

                                <hr>
                                <a href="<?php echo $menuProfileAddSkill;?>" class="btn btn-outline-primary btn-block"><b>Add New Skill</b></a>

                                <hr>
                            </div>
                        </div>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Curriculum Vitae</h3>
                                </div>
                                <strong style="padding: 5px">
                                    File: <a href="<?php echo $functionGetCV."?file=".$dataCV['filename'];?>">
                                    <?php echo $dataCV['filename'] ?? '-';?>
                                    </a>
                                </strong>

                                <p >
                                <form action="<?php echo $functionUpdateCV;?>" method="post" enctype="multipart/form-data" style="padding: 5px">
                                    <input type="file" name="filecv">
                                    <input type="submit" value="Upload CV" class="btn btn-outline-primary">
                                </form>
                                </p>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

</div>
<!-- ./wrapper -->

<?php
include "../../template/footer.php";
?>