<?php 
echo getcwd() . "\n";
include "_dbcongif.php";

mysql_select_db("admin", $conn);
$sql = "SELECT * FROM posts";

$title = $_REQUEST['title'];
$deck = $_REQUEST['deck'];
$article = $_REQUEST['article'];
$images = $_REQUEST['images'];


$sql="INSERT INTO posts (title, deck, article, images)
VALUES ('$title','$deck','$article','$images')";

if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}
echo "1 record added";


// $rs = mysql_query($sql, $conn) or die ('Problem with query' . mysql_error());
// echo 'Connected successfully';

// while ($row = mysql_fetch_array($rs)) {
// 	echo $row['id'];
// }

mysql_close($conn);
?>