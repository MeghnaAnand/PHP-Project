<?php
echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

include 'Connection.php';

echo "Welcome to Modifytable Page!!"."<br>";
$id=$_GET['id'];
$newvalue=$_GET['textvalue'];


$query= "UPDATE details SET value = '".$newvalue."'where KeyId = ".$id;

$result=mysql_query($query);

if($result!=0){
	$query1="select * from details";
	$result1=mysql_query($query1);
		echo "<table border='2'> 
      				<caption border='2'>details</caption> 
           			<tr> 
           				 <th>KeyId</th>
						<th>value</th>		
						<th>element_detail</th>
 					</tr>";
		while($row = mysql_fetch_array($result1)) {
       echo '
       		 <tr>
            	<td>'.$row['KeyId'].'</td>
            	<td>'.$row['value'].'</td>
            	<td>'.$row['element_detail'].'</td>
        	</tr>';
													}
		echo '</table>';

				}

?>