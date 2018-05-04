<?php


include 'Connection.php';
echo "Welcome to Display Page!!"."<br>";

echo '<div id="ex2">';

echo "Below is the table you created:"."<br>";

$query="SELECT * FROM details";
$result=mysql_query($query);
echo "<table border='2'> 
  <caption border='2'>details</caption> 
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
echo '</table>'.'<br>';

echo '<a href="welcome.php">Click here to go to Admin page</a>';

mysql_close();


?>