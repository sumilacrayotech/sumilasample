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
		
		
		<?php include('sidemenu.php');
		
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
<form action="aboutusprocesspost.php" method="post">
		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2">Enter Title</h1>
							<p><input type="text" name="title"  value="<?php echo $title;?>" id="title" ></p>
							<p></p>
						</div>
						<div class="col-md-12">
							<h2 class="h4">Enter Content</h2>
							<p><textarea rows="10" cols="100" name="editor" id="editor1" class="editor4"><?php echo $content;?></textarea></p>
							
					
				</div>
						</div>
						
						
						<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<div id="editor">
					<?php echo $content;?></p>
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
<script>
	initSample();
	function submitfrm(){
		alert("hai");
		var title=$("#title").val();
		alert(title);
		var content=$("#editor1").val();
		alert(content);
	$.ajax({
  url: "aboutusprocess.php",
  type: "get", 
  data: { 
    ajaxid: 4, 
    UserID: title, 
    content:content
  },
  success: function(response) {
   //Do Something
   alert("send");
  },
  error: function(xhr) {
    //Do Something to handle error
  }
});
	}	
	
	
	
	
</script>
	

	</body>
</html>

