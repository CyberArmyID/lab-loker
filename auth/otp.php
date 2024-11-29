<?php
include "../init.php";
include "../functions/auth/generateOTP.php";
?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $host;?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo $host;?>/assets/css/style.css" rel="stylesheet" type="text/css">
        <script src="<?php echo $host;?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $host;?>/assets/js/jquery.min.js"></script>
<body>
    <form class="form-signin" action="<?php echo $functionAuth;?>/actOTP.php" method="post">
        <div>
        <input type="hidden" class="form-control" name="phoneNumber" placeholder="No Handphone" required value="<?php echo $phoneNumber; ?>">
        </div>
        <div>
            <h1 class="h3 mb-3 font-weight-normal">OTP</h1>
            <input type="text" class="form-control" name="otp" placeholder="OTP" required>
        </div>
        <?php

        if (isset($_SESSION['error_message'])) {
            echo "<div style='color: red;margin-top: 10px'>" . $_SESSION['error_message'] ."</div > ";
            unset($_SESSION['error_message']);
        }
        ?>
        <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Submit</button>
        <p></p>
        <div class="mb-10">
            OTP: <?php echo $otp;?>
            <p style=" border: 2px solid red; padding:5px">
                <i><b>NB: OTP seharusnya dikirim melalui SMS</b></i>
            </p>
        </div>
    </form>

    </body>
    </html>