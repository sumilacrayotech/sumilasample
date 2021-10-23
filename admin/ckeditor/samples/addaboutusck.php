<!doctype html>
<html lang="en">
  <head>
  	<title>Website menu 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../../css/style.css">
<script src="../ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		
		
		<?php 
		session_start();
		error_reporting(0);
		if($_SESSION['username']==''){
			header("Location: ../../../login.php");
		}
		
		
		include('sidemenu.php');
		
		require('../../../dbconnect.php');
$sql = "SELECT  * FROM aboutus";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$i=1;
	while($row = $result->fetch_assoc()) {
		$title=$row['title'];
		$content=$row['content'];
}}
		?>
		
		
		<!-- END COLORLIB-ASIDE -->
<form action="aboutusprocess.php" method="post">
		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
					<?php
	error_reporting(0);
	session_start();
	if ($_SESSION['aboutusadd']!=''){
	if ($_SESSION['aboutusadd']==1){
		echo "<font color=green>About Us Content Updated Successfully</font><br>";
	}
	unset($_SESSION['aboutusadd']);
	}
	
	?>
					
					
						<div class="col-md-12 mb-4">
							<h1 class="h2">Enter Title</h1>
							<p><input type="text" name="title"  value="<?php echo $title;?>" id="title" ></p>
							<p></p>
						</div>
						<div class="col-md-12">
							<h2 class="h4">Enter Content</h2>
							<p><p><textarea name="editor" id="editor" rows="10" cols="80">
                <?php echo $content;?>
            </textarea></p></p>
							
					
				</div>
						</div>
						
						
						
						
						
						
						
						<div class="col-md-12">
							<h2 class="h4"></h2>
							<p><input type=submit value="Update"></p>
						</div>
					</div>
				</div>
			</section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->
</form>
	</section>
<script>
	initSample();
	CKEDITOR.replace( 'editor' );
		
	
	
	
	
</script>
	

	</body>
</html>

