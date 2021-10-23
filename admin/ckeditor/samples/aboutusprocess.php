<?php
require('dbconnect.php');
session_start();

$title=$_POST['title'];;
echo $content=$_POST['editor'];
//die;
//$sql = "INSERT INTO aboutus (title,content)
//VALUES ('$title', '$content')";
echo $sql = "UPDATE aboutus SET title='$title',content='$content'";


if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$_SESSION['aboutusadd']=1;
header("Location:addaboutusck.php");
?>