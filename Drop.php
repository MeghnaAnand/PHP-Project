<?php

include "Connection.php";
if($_GET['submit']){
$query= "DROP TABLE details";
$result=mysql_query($query);
if(!$result ) {
            die('Could not delete table: ' . mysql_error());
         }else{
         echo "Table deleted successfully\n";
}
}




?>