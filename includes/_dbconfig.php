<?php
$link = mysql_connect('localhost', 'root', 'Cmb1h0aJ8v');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>