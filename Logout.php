<?php

session_start();

if(isset($_COOKIE['username'])&&($_COOKIE['password'])){
$username=$_COOKIE['username'];
$password=$_COOKIE['password'];
setcookie('username',$_POST['username'],time()-1);
setcookie('password',$_POST['password'],time()-1);
}
echo '<form action="Login.php" action="post">
<p>You have successfully Logged out!!</p>
<input type="submit" value="Log in!!">
</form>';
session_destroy();
?>