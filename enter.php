<?php

include 'Connection.php';

if(!(($_POST['username']=='odb')&&($_POST['password']=='odb_0db'))){
echo "<script type='text/javascript'>alert(\"Wrong username or password\");</script>";
echo '<script>window.location.href = "Login.php";</script>';
}else{
if($_POST['remember'].value=="1"){
setcookie('username',$_POST['username'],time()+60*60*1);
setcookie('password',$_POST['password'],time()+60*60*1);
session_start();
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
echo "Welcome Admin!!";
}

echo '<form action="Logout.php" action="post">
<input type="submit" value="Log out">
</form>';
echo "<br>";
echo "<br>";
}

echo "Below is the table you created:"."<br>";
$query="SELECT * FROM details";
$result=mysql_query($query);
echo "<table border='2'> 
  <caption>details</caption> 
           <tr> 
            <th>KeyId</th>
			<th>value</th>		
			<th>element_detail</th>
 		</tr>";
while($row = mysql_fetch_array($result)) {
 echo '
        <tr>
            <td>'.$row['KeyId'].'</td>
            <td>'.$row['value'].'</td>
            <td>'.$row['element_detail'].'</td>
        </tr>';

}

echo '</table>';

?>