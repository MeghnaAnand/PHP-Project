<?php
#-------------Content Page--------------#
echo "<link rel='stylesheet' type='text/css' href='project.css'/>";


include "Connection.php";
require 'template.class.php';
$template=new template();

$row=checkquery(1);
$template->assign('Footer',$row[0]);

$row=checkquery(2);
$template->assign('Header',$row[0]);

$row=checkquery(3);
$template->assign('navi1',$row[0]);

$row=checkquery(4);
$template->assign('navi2',$row[0]);

$row=checkquery(5);
$template->assign('navi3',$row[0]);



$row=checkquery(8);
$template->assign('body3',$row[0]);

$row=checkquery(9);
$template->assign('description',$row[0]);



$template->display('Header.html'); 
$template->display('Navi.html'); 
$template->display('page.html'); 
$template->display('Footer.html');


function querycheck($KeyID,$Footer){


}

function checkquery($KeyId){
$query="SELECT value from details WHERE KeyId='".$KeyId."'";
$result = mysql_query($query);
if (!$result) {
            die('Invalid Query: '.mysql_error());
exit; }
$row = mysql_fetch_row($result);
return $row;
}


?>
