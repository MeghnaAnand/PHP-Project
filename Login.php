<?php

echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

echo '<form action="welcome.php" method="post">
<table cellpadding="5" cellspacing="5" align="center" border="1">
<tr><th>Enter Username:<td> <input type="text" id="username" name="username" value="Username"></td></tr>
<tr><th>Enter Password:<td> <input type="password" id="username" name="password" value="password"></td></tr>
<tr><td colspan="2" align="left"><input type="checkbox" name="remember" value="1">Remember Me! </td></tr>
<td colspan="2 align="right"><input type="submit" name="submit" value="Submit">
</form>';

if(isset($_COOKIE['username'])&&($_COOKIE['password'])){
$username=$_COOKIE['username'];
$password=$_COOKIE['password'];
echo "<script>
document.getElementById('username').value= '$username';
docuemnt.getElementById('password').value= '$password';
</script>";
}

?>