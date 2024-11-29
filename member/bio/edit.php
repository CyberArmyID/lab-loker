<?php
include "../../init.php";
include "../../template/header.php";
include "../../functions/member/getUser.php";
?>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
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
                                    <h3 class="card-title">Update About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo $functionUpdateBio;?>" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <!-- Textarea for CKEditor -->
                                            <textarea  id="editor" class="form-control" name="about">
                                                <?php echo $user['about'] ?? '';?>
                                            </textarea>
                                        </div>
                                        <?php
                                        if (isset($_SESSION['error_message'])) {
                                            echo "<div style='color: red;margin-top: 10px'>" . $_SESSION['error_message'] ."</div > ";
                                            unset($_SESSION['error_message']);
                                        }
                                        ?>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button> | <a href="<?php echo $menuProfile;?>/profile"><button type="button" class="btn btn-warning">Back</button></a>
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

<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    CKEDITOR.replace('editor', {
        // Allow all content (not recommended for production environments)
        allowedContent: true,
    });



</script>

<!--payload-->
<!--<a href="javascript:alert('XSS Found')">XSS</a>-->