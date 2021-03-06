<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
    <head>
        <title>Recaptcha - harviacode.com</title>
        <link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>assets/css/bootstrap.min.css ">
        <style>
            .login-box{
                width: 300px;
                margin: auto;
                margin-top: 100px;
            }
        </style>
        <?php echo $script_captcha; // javascript recaptcha ?>
    </head>
    <body>
        <div class="login-box">
            <h3>Please Sign In</h3>
            <?php
            echo form_open($action);
            ?>
            <div class="form-group">
                <label>Username</label>
                <?php echo form_input('username', $username, 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <?php echo form_password('password', $password, 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <?php echo $captcha // tampilkan recaptcha ?>
            </div>
            <div class="form-group">
                <?php echo form_submit('login', 'login', 'class="btn btn-primary"'); ?>
            </div>
        </div>
    </body>
</html>