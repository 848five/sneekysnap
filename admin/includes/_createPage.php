<?php 
// CREATE A NEW PAGE
include($_SERVER['DOCUMENT_ROOT']."/admin/includes/_dbconfig.php");


$sql = "SELECT * FROM posts";

$title = $_REQUEST['title'];
$meta_desc = $_REQUEST['meta_description'];
$meta_keywords = $_REQUEST['meta_keywords'];

$page_type = $_REQUEST['page_type'];
$page_template = $_REQUEST['page_template'];
$page_ad = $_REQUEST['page_ad'];
$page_display_name = $_REQUEST['page_display_name'];
$deck = $_REQUEST['deck'];
$article = $_REQUEST['article'];
//$images = $_REQUEST['images'];
echo $title ." page being created";

mysql_select_db('admin');

$sql="INSERT INTO posts (title, meta_description, meta_keywords, page_type, page_template, page_ad, page_display_name ,deck,article)
VALUES ('$title','$meta_desc','$meta_keywords','$page_type','$page_template','$page_ad','$page_display_name','$deck','$article')";

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