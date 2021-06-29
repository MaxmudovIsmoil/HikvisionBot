<!doctype html>
<html lang="en">
<head>
    <title>Almirab</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= site_url('assets/bootstrap-4.5.3/css/bootstrap.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/font-awesome-4.7.0/css/font-awesome.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/css/util.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= site_url('assets/login/css/main.css');?>">
    <style type="text/css">
        .limiter{
            font-weight: bold;
        }
    </style>
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <?= form_open("user/login", array("method" => "POST", "class"=>"login100-form validate-form flex-sb flex-w")); ?>

            <span class="login100-form-title p-b-30">Hikvision</span>
            <?php if (isset($this->session->message)): ?>
                <div class="wrap-input100 text-center p-t-10 p-b-10 m-b-15" style="margin-top: -25px; color: red;">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= $this->session->message; ?>
                </div>
            <?php endif ?>
            <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                <input class="input100" type="text" name="username" placeholder="Username">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                <input class="input100" type="password" name="password" placeholder="Password">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn m-t-10">
                <button class="login100-form-btn">
                    Login
                </button>
            </div>

            <?= form_close();?>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="<?= site_url('assets/login/js/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
<script src="<?= site_url('assets/bootstrap-4.5.3/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
<script src="<?= site_url('assets/login/js/main.js');?>"></script>

</body>
</html>
