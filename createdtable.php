<?php

include 'Connection.php';
echo "Welcome to Create Page!!"."<br>";
mysql_select_db("odb_anand");
mysql_query("CREATE TABLE details(KeyId int NOT NULL,value varchar(100),element_detail varchar(100),PRIMARY KEY(KeyId));")or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('1','Footer','Programmed by Meghna Anand, 2018')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('2','Header','Willkommen!!')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('3','navi1','CME')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('4','navi2','ECM')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('5','navi3','Contact Us')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('6','body1','The University was founded in 1967.')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('7','body2','CME is International Program: Media, Communication, Projects etc.')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('8','body3','ECM is International Program: Energy, Process and Projects ')") or die(mysql_error());  
mysql_query("INSERT INTO details(KeyId,value,element_detail)VALUES('9','description','Hochschule Offenburg')") or die(mysql_error());  
  


echo "Your table is created:"."<br>";

mysql_close();


?>