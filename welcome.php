<?php
session_start();
include 'Connection.php';
echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

if(!(($_POST['username']=='odb')&&($_POST['password']=='odb_0db'))){
echo "<script type='text/javascript'>alert(\"Wrong username or password\");</script>";
echo '<script>window.location.href = "Login.php";</script>';
}else{
if($_POST['remember'].value=="1"){
setcookie('username',$_POST['username'],time()+60*60*1);
setcookie('password',$_POST['password'],time()+60*60*1);
}

echo "Welcome Admin!!";
echo  "You can create table!!"."<br>";
echo '<form action="createdtable.php" method="get">
<input type="submit" name="submit" value="CREATE TABLE">
</form>';


echo  "You can View your created table!!"."<br>";
echo '<form action="Display.php" method="get">
<input type="submit" name="submit" value="DISPLAY TABLE">
</form>';

echo  "You can Modify the value in your table!!"."<br>";
echo '<form action="Modify.php" method="get">
<input type="submit" name="submit" value="MODIFY TABLE">
</form>';


echo  "You can also Delete your table!!"."<br>";
echo '<form action="Drop.php" method="get">
<input type="submit" name="submit" value="DROP">
</form>';


echo "<br>";
echo  "Click to Logout";
echo '<form action="Logout.php" action="post">
<input type="submit" value="Log out">
</form>';
echo "<br>";
echo "<br>";
}

?>