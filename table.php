<?php
	require_once'config.php';

	$query = "SHOW TABLES; ";
	$result = $obj->doQuery($query);

?>

<center>
<table width="200" border="1" style=" text-align:center;  font-size:20px; margin-top:40px; text-decoration:none;" cellpadding="20px">
  <tr>
    <th>Tables</th>
  </tr>
<?php
while($row = $obj->fetchArray($result)){
		echo "<tr>
    				<td><a href='index.php?page=t_$row[0]'>$row[0]</a></td>
 			</tr>";
}
?>

</table>
</center>