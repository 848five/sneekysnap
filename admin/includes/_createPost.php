<?php 
echo getcwd() . "\n";
include($_SERVER['DOCUMENT_ROOT']."/admin/includes/_dbconfig.php");


$sql = "SELECT * FROM posts";

$title = $_REQUEST['title'];
$deck = $_REQUEST['deck'];
$article = $_REQUEST['article'];
$images = $_REQUEST['images'];


$sql="INSERT INTO posts (title, deck, article, images)
VALUES ('$title','$deck','$article','$images')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";


// $rs = mysql_query($sql, $con) or die ('Problem with query' . mysql_error());
// echo 'conected successfully';

// while ($row = mysql_fetch_array($rs)) {
// 	echo $row['id'];
// }

?>