<?php 
echo getcwd() . "\n";
include($_SERVER['DOCUMENT_ROOT']."/admin/includes/_dbconfig.php");


mysql_select_db('admin');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "title :{$row['title']}  <br> ";
} 
?>