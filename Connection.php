<?php
$con=mysql_connect("localhost","odb","odb_0db");
if(!$con){
 die ('Connection not established!! '. mysql_error());
 }

if(!mysql_select_db("odb_anand")){
die ('No database odb ' . mysql_error());
}
?>
