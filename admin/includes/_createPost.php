<?php 
echo getcwd() . "\n";
include($_SERVER['DOCUMENT_ROOT']."/admin/includes/_dbconfig.php");
mysql_select_db('admin');

$sql = "SELECT * FROM posts";

$title = $_REQUEST['title'];
$deck = $_REQUEST['deck'];
$article = $_REQUEST['article'];
$images = $_REQUEST['images'];
echo $title ." being created";


$sql="INSERT INTO posts (title, deck, article, images)
VALUES ('$title','$deck','$article','$images')";


$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "done";

// $rs = mysql_query($sql, $con) or die ('Problem with query' . mysql_error());
// echo 'conected successfully';

// while ($row = mysql_fetch_array($rs)) {
// 	echo $row['id'];
// }

?>