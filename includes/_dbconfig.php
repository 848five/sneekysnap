<?php
$conn = mysql_connect('localhost', 'root', 'Cmb1h0aJ8v');
if (!$conn) {
	mysql_select_db("admin", $conn)
    die('Could not connect: ' . mysql_error());
}

$sql = "SELECT * FROM posts";
$rs = mysql_query($sql, $conn) or die ('Problem with query' . mysql_error());
echo 'Connected successfully';

while ($row = mysql_fetch_array($rs)) {
	echo $row["id"];
}

mysql_close($conn);
?>