<?php
/*
 * FCKeditor - The text editor for Internet - http://www.fckeditor.net
 * Copyright (C) 2003-2010 Frederico Caldeira Knabben
 *
 * == BEGIN LICENSE ==
 *
 * Licensed under the terms of any of the following licenses at your
 * choice:
 *
 *  - GNU General Public License Version 2 or later (the "GPL")
 *    http://www.gnu.org/licenses/gpl.html
 *
 *  - GNU Lesser General Public License Version 2.1 or later (the "LGPL")
 *    http://www.gnu.org/licenses/lgpl.html
 *
 *  - Mozilla Public License Version 1.1 or later (the "MPL")
 *    http://www.mozilla.org/MPL/MPL-1.1.html
 *
 * == END LICENSE ==
 *
 * This page lists the data posted by a form.
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>FCKeditor - Samples - Posted Data</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link href="../sample.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<h1>FCKeditor - Samples - Posted Data</h1>
		This page lists all data posted by the form.
		<hr>
		<table border="1" cellspacing="0" id="outputSample">
			<colgroup><col width="80"><col></colgroup>
			<thead>
				<tr>
					<th>Field Name</th>
					<th>Value</th>
				</tr>
			</thead>
<?php

if ( isset( $_POST ) )
   $postArray = &$_POST ;			// 4.1.0 or later, use $_POST
else
   $postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS

foreach ( $postArray as $sForm => $value )
{
	if ( get_magic_quotes_gpc() )
		$postedValue = htmlspecialchars( stripslashes( $value ) ) ;
	else
		$postedValue = htmlspecialchars( $value ) ;

?>
			<tr>
				<th><?php echo htmlspecialchars($sForm) ?></th>
				<td><pre><?php echo $postedValue?></pre></td>
			</tr>
<?php
}
require('dbconnect.php');


$title=$_POST['title'];
$content=$postedValue;

//$sql = "INSERT INTO aboutus (title,content)
//VALUES ('$title', '$content')";
echo $sql = "UPDATE aboutus SET title='$title',content='$content'";


if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "1";
header("Location:sample01.php");




?>
		</table>
	</body>
</html>
