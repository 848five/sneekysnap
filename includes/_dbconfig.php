<?php
echo "welcome";
$conn = mysql_connect('localhost', 'root', 'Cmb1h0aJ8v');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

?>