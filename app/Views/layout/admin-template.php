<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="admin-assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?= SITE_NAME.'-'.$title; ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="<?= base_url('/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url('admin-assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?= base_url('admin-assets/css/animate.min.css') ?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?= base_url('admin-assets/css/light-bootstrap-dashboard.css?v=1.4.0')?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin-assets/css/bootstrap-select.css');?>">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url('admin-assets/css/demo.css') ?>" rel="stylesheet" />
    



    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url('admin-assets/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" />

</head>
<body>
	<div class="wrapper">
		<!-- SIDEBAR -->
		<?= $this->include('_partials/sidebar') ?>

		<div class="main-panel">
			<!-- NAVBAR -->
			<?= $this->include('_partials/navbar') ?>

			<!-- CONTENT -->
			<?= $this->renderSection('content') ?>

            <!-- FOOTER -->
            <?= $this->include('_partials/footer')?>

		</div>
		
	</div>

</body>

    <!--   Core JS Files   -->
    <script src="<?= base_url('admin-assets/js/jquery.3.2.1.min.js') ?>" type="text/javascript"></script>
	<script src="<?= base_url('admin-assets/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   



    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?= base_url('admin-assets/js/light-bootstrap-dashboard.js?v=1.4.0')?>"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?= base_url('admin-assets/js/demo.js')?>"></script>

    <!-- Date Picker -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('admin-assets/js/bootstrap-select.js');?>"></script>



	<script type="text/javascript">
        
    	$(document).ready(function(){
           
            $(".date-selector").flatpickr({
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
            $('.bootstrap-select').selectpicker();
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });


    	});
	</script>

</html>