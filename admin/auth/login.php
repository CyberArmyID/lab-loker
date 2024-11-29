<?php
include "../../init.php";
include "../template/header.php";
?>
    <body style="background:#EAEAEF">

    <!-- product -->
    <div class="container-fluid full-height d-flex justify-content-center align-items-center">
        <div class="col-md-4">
        <div class="container  mt-5">
            <div class="row  pt-1 text-center justify-content-center">
                <div class="pagelog p-5 bg-white">
                    <h2>Login Admin</h2>
                    <form action="<?php echo $functionAdminLogin;?>" method="post">
                        <div class="mb-3">
                            <input name="email" required type="text" class="form-control col-lg-12" placeholder="Email">
                        </div>
                        <div class="mb-3">

                            <input name="password" required type="password" class="form-control" placeholder="password">
                        </div>

                        <button name="submit" class="mt-5 btn btn-primary col-6" type="submit">Login</button>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

<?php
include "../template/footer.php";
?>