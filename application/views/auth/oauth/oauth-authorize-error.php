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
        <h2 class="text-danger">Authorization Error</h2>
        <div class="col-md-12">
            <p class="text-danger"><?php echo $error ?></p>
        </div>
        <div class="clearfix"></div>
    </div>
<?php include APPPATH.'views/auth/includes/footer.php' ?>
