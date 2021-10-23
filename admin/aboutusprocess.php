<?php
require('../dbconnect.php');


$title=$_POST['title'];
$content=$_POST['editor'];
//$sql = "INSERT INTO aboutus (title,content)
//VALUES ('$title', '$content')";
echo $sql = "UPDATE aboutus SET title='$title',content='$content'";


if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:addaboutus.php");
?>