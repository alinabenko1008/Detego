<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
//select a database to work with
$selected = mysql_select_db("db_detego_test",$link) 
  or die("Could not select examples");
  
?>