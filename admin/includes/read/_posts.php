<?php 
echo getcwd() . "\n";
include($_SERVER['DOCUMENT_ROOT']."/admin/includes/_dbconfig.php");


$SQL = "SELECT * FROM posts";
$result = mysql_query($SQL);

echo "-----posts-><br />"
while ( $db_field = mysql_fetch_assoc($result) ) {

print $db_field['title'] . "<BR>";


}
echo "end posts-----"

// $rs = mysql_query($sql, $con) or die ('Problem with query' . mysql_error());
// echo 'conected successfully';

// while ($row = mysql_fetch_array($rs)) {
// 	echo $row['id'];
// }

?>