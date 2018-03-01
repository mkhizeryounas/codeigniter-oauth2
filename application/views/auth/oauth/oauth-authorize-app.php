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
			    <?php echo form_open(uri_string()); ?>
                    <input type="hidden" name="app_id" value="<?php echo $info['app']['app_id'] ?>">
                    <input type="hidden" name="user_id" value="<?php echo $info['user']['user_id'] ?>">
                    <input type="hidden" name="redirect_uri" value="<?php echo $info['redirect_uri']?>">
                    <input type="hidden" name="checksum" value="<?php echo $info['checksum']?>">
                    <input type="hidden" name="state" value="<?php echo $info['state']?>">
                    <input type="hidden" name="scope" value="<?php echo implode(',', $info['scope'])?>">
                    <button type="submit" name="access" class="btn btn-danger btn-lg" value="deny">Deny</button>
                    <button type="submit" name="access" class="btn btn-success btn-lg" value="allow">Allow</button>
			    <?php echo form_close(); ?>
            </div>
        </div>
        <div class="clearfix"></div>
        
    </div>
<?php include APPPATH.'views/auth/includes/footer.php' ?>
