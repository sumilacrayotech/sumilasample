<?php
require('../dbconnect.php');
session_start();

$id=$_GET['id'];
echo $sql = "delete from sliders where sliderid='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleted record: " . $conn->error;
}
if ($conn->query($sql) === TRUE) {
  echo "New record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//die;
$_SESSION['deleteslider']=1;
header("Location:addslider.php");
?>