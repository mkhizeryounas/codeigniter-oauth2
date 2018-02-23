<?php include APPPATH.'views/auth/includes/header.php' ?>
    <style>
        .thin {
            font-weight: 300 !important;
        }
        .btn {
            border-radius: 2px !important;
        }
    </style>
    <div class="login-bottom">
        <h2>Authorize Application</h2>
        <div class="col-md-12">
            <p class="thin"><b class="text-primary"><?php echo $info['app']['app_name'] ?></b> app would like permisssion to access your account: <b class="text-primary"><?php echo $info['user']['user_email'] ?></b></p>
            <hr>
            <strong>Review permisssions</strong>
            <ul class="container">
                <?php 
                    foreach ($info['scope'] as $scope) {
                        echo '<li><tt>'.$scope.'</tt></li>';
                    }
                ?>
                
            </ul>
            <hr>
            <div class="pull-right">
                <button type="button" class="btn btn-danger btn-lg">Deny</button>
                <button type="button" class="btn btn-success btn-lg">Allow</button>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
<?php include APPPATH.'views/auth/includes/footer.php' ?>
