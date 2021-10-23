<?php 
include "config.php";

// Insert record
if(isset($_POST['submit'])){
		
		$title = $_POST['title'];
		$short_desc = $_POST['short_desc'];
		echo $long_desc = $_POST['long_desc'];
//die;
		if($title != ''){
			
			mysqli_query($con, "INSERT INTO contents(title,short_desc,long_desc) VALUES('".$title."','".$short_desc."','".$long_desc."') ");
			header('location: index.php');
		}
	}
	
	//require('dbconnect.php');
$sql = "SELECT  * FROM contents";
//echo $sql;
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
	$i=1;
	while($row = $result->fetch_assoc()) {
		$title=$row['title'];
		$content=$row['long_desc'];
}}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Integrate CKeditor to HTML page and save to MySQL with PHP</title>

	<!-- CSS -->
	<style type="text/css">
	.cke_textarea_inline{
		border: 1px solid black;
	}
	</style>

	<!-- CKEditor -->	
	<script src="ckeditor/ckeditor.js" ></script>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
  	<title>Website menu 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/style.css">

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<!--<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="#">Home</a></li>
					<li><a href="addslider.php">Front Page Slider</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</aside> -->
		
		<?php include('../sidemenu.php');?>
		
		
		<!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2">About Us</h1>
							
							<form method='post' action=''>
		Title : 
		<input type="text" name="title" ><br>

		<!--Short Description: 
		<textarea id='short_desc' name='short_desc' style='border: 1px solid black;'  ></textarea><br>-->

		Long Description: 
		<textarea id='long_desc' name='long_desc' ><?php echo $content;?></textarea><br>

		<input type="submit" name="submit" value="Submit">
	</form>
	
							
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
	
	<!-- Script -->
	<script type="text/javascript">
	
		// Initialize CKEditor
		//CKEDITOR.inline( 'short_desc');

		CKEDITOR.replace('long_desc',{

			width: "500px",
        	height: "200px"
   
		}); 
	
    	
	</script>
</body>
</html>