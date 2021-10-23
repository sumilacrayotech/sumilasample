<!doctype html>
<html lang="en">
  <head>
  	<title>Website menu 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		
		
		<?php include('sidemenu.php');
		error_reporting(0);
	session_start();?>
		
		
		<!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
				<div class="row"><div class="col-md-12 mb-4"><span style="float:right;color:red">Welcome <?php echo $_SESSION['username'];?></span></div></div>
					<div class="row">
					<form action="uploadupdate.php" method="post" enctype="multipart/form-data">
						<div class="col-md-12 mb-4">
						<?php
	if($_SESSION['username']==''){
			header("Location: ../login.php");
		}
	if ($_SESSION['addslider']!=''){
	if ($_SESSION['addslider']==1){
		echo "<font color=green>Slider Added Successfully</font><br>";
	}
	unset($_SESSION['addslider']);
	}
	
	?>
	<?php
	
	if ($_SESSION['deleteslider']!=''){
	if ($_SESSION['deleteslider']==1){
		echo "<font color=green>Slider deleted Successfully</font><br>";
	}
	unset($_SESSION['deleteslider']);
	}
	
	?>
	<input type="hidden" name="sliderid" value=<?php echo $_GET['id'];?>
							<h1 class="h2">Update Slider</h1>
							<p><input type="file" name="fileToUpload" id="fileToUpload"></p><p><input type="submit" value="Upload Slider"></p>
						</div>
						</form>
						
						
					</div>
				</div>
			</section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

