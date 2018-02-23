<!DOCTYPE HTML>
<html ng-app="cartify">
<head>
<title>Cartify</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"> </script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/screenfull.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<link href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" rel='stylesheet' type='text/css' />

<link href="<?php echo base_url(); ?>assets/lib/jqueryui/jquery-ui.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/lib/jqueryui/jquery-ui.theme.css" rel='stylesheet' type='text/css' />
<script type="<?php echo base_url(); ?>assets/text/javascript" src="lib/jqueryui/jquery-ui.js"></script>
<link href="<?php echo base_url(); ?>assets/lib/bootstrap-switch/bootstrap-switch.min.css" rel='stylesheet' type='text/css' />
<script type="<?php echo base_url(); ?>assets/text/javascript" src="lib/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="<?php echo base_url(); ?>assets/text/javascript" src="./js/bootstrap-select.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/app.css" rel='stylesheet' type='text/css' />
<!-- ANGULAR -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/libs/loader/loader.css">
<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
</script>
</head>
<body>

<div id="wait" class="alert alert-info"><i class="fa fa-cog fa-spin"></i> Please Wait</div>
<div id="error" class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> An error occoured</div>
<div id="success" class="alert alert-success"><i class="fa fa-check"></i> Successful</div>
<div id="snackbar" style=""><small style=" color:#fff!important;" id="sd-msg">Some text some message..</small></div>

<div id="main-status" style="position: fixed; right: 50px; top:50px; z-index: 999; display:none">
</div>
<div id="wrapper">
       <!--- -->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1 style="font-family: 'Comfortaa', cursive;">  <a class="navbar-brand" href="javascript:void(0)"><center><!--img src="./images/logo.png" style="height:30px; width: auto; padding-right: 3px;"-->cartify</center></a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<!-- <button id="toggle"><i class="fa fa-arrows-alt"></i></button>	 -->
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><span id="storeName"><?php echo $store_name; ?></span>&nbsp;<i class="caret"></i></span><img src="<?php echo base_url(); ?>assets/images/admin.png" style="height:50px; width: auto; padding-top: 8px; padding-right: 8px"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="<?php echo base_url(); ?>/app/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="javascript:void(0)" ui-sref="home" class=" hvr-bounce-to-right nav-link" ng-class="{activex: $state.includes('home')}" id="nav-dashboard"><i class="fa fa-home nav_icon "></i><span class="nav-label">Home</span> </a>
                    </li>
                   			
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

<div class="blank">
	

<div id="app-content" class="blank-page">
	<ui-view></ui-view>

	<div class="clearfix"></div>
</div>


</div>
	
	<!--//faq-->
		<!---->
<div class="copy">
            <p> &copy; <?php echo date('Y'); ?> Cartify. All Rights Reserved | Powered by <a href="http://shopdesk.co/" target="_blank">Shopdesk</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

<!-- ANGULAR -->
<script src="<?php echo base_url(); ?>public/libs/angular.js"></script>
<script src="<?php echo base_url(); ?>public/libs/angular-ui-router.js"></script>
<script src="<?php echo base_url(); ?>public/libs/ngStorage.js"></script>
<script src="<?php echo base_url(); ?>public/libs/loader/loader.js"></script>


<script src="<?php echo base_url(); ?>public/app.js"></script>
<script src="<?php echo base_url(); ?>public/routes.js"></script>
<!-- CONTROLLERS -->
<script src="<?php echo base_url(); ?>public/controllers/home.controller.js"></script>
</body>
</html>
