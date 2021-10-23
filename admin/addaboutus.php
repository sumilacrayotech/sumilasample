<!doctype html>
<html lang="en">
  <head>
  	<title>Website menu 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/js/sample.js"></script>
	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		
		
		<?php include('sidemenu.php');
		
		require('../dbconnect.php');
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
						<div class="col-md-12 mb-4">
							<h1 class="h2">Enter Title</h1>
							<p><input type="text" name="title"  value="<?php echo $title;?>"></p>
							<p></p>
						</div>
						<div class="col-md-12">
							<h2 class="h4">Enter Content</h2>
							<p><textarea rows="10" cols="100" name="editor" ><?php echo $content;?></textarea></p>
						</div>
						
						
						<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<div id="editor">
					<h1>Hello world!</h1>
					<p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
				</div>
			</div>
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

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

