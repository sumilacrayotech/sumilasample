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
		
		
		<?php error_reporting(0);
	session_start();include('sidemenu.php');?>
		
		
		<!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
				<div class="row"><div class="col-md-12 mb-4"><span style="float:right;color:red">Welcome <?php echo $_SESSION['username'];?></span></div></div>
					<div class="row">
					<form action="upload.php" method="post" enctype="multipart/form-data">
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
	<?php
	
	if ($_SESSION['upslider']!=''){
	if ($_SESSION['upslider']==1){
		echo "<font color=green>Slider updated Successfully</font><br>";
	}
	unset($_SESSION['upslider']);
	}
	
	?>
							<h1 class="h2">Add Slider</h1>
							<p><input type="file" name="fileToUpload" id="fileToUpload"></p><p><input type="submit" value="Upload Slider"></p>
						</div>
						
						<!--<div class="col-md-12 mb-4"><h1 class="h2">Add Title1</h1>
							<p><input type="text" name="title1" id="title"></p></div>
						
						<div class="col-md-12 mb-4"><h1 class="h2">Add Title2</h1>
							<p><input type="text" name="title2" id="title"></p></div>
						
						<div class="col-md-12 mb-4"><h1 class="h2">Add Content</h1>
							<p><input type="text" name="content" id="content"></p></div>-->
						
						
						</form>
						<div class="col-md-12">
							<h2 class="h4">View Sliders</h2>
							<p><table width=100% border=1><th>SINo</th><th>Sliders</th><th>Action</th>
							<?php
							include('../dbconnect.php');
							
$sql = "SELECT  * FROM sliders";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$i=1;
	while($row = $result->fetch_assoc()) {
    
  
	
							?>
							
							<tr><td><?php echo $i++;?></td><td><?php echo "<img src=images/$row[slidername] width=100% height=250px/>";?></td><td><a href="updateslider.php?id=<?php echo $row[sliderid];?>">Edit</a> | <a href="deleteslider.php?id=<?php echo $row[sliderid];?>" onclick="return confirm('Do you want to delete?');" >Delete</a></td></tr>
<?php }?>
							
<?php }?>
							</table></p>
						</div>
						
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

