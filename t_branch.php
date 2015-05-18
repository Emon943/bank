<?php
	require_once'config.php';
?>
<center>
<?php echo $_GET['result']; ?>

<h3>This is branch table</h3>
<table width="708" height="200px" border="1" style=" text-align:center;  font-size:15px; margin-top:10px; text-decoration:none;" cellpadding="5px">
  <tr>
    <th width="231">Branch Name</th>
    <th width="139">Branch City</th>
    <th width="128">Assest</th>
    <th width="94" >Option</th>
  </tr>
  <?php
  	$query = "SELECT * FROM branch;";
	$result = $obj->doQuery($query);
	while($row = $obj->fetchArray($result)){
		echo"		
	  <tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td><a href='delete.php?table=t_branch&id=$row[0]'>Delete</td>
	  </tr>
	  ";
 }
 ?>
</table>

<div style="border:#666666 1px solid; width:708px; margin-top:10px">
<h3>Add branch</h3>
<form action="add.php" method="get">
	<input type="hidden" name="table" value="t_branch" />
<table>
	<tr>
		<td width="171">Branch Name:  </td>
		<td width="210">
			
			<input type="text" name="branch_name" />
		</td>
	</tr>
	<tr>
		<td>Branch City: </td>
		<td><input type="text" name="branch_city"</td>
	</tr>
	<tr>
		<td>Assest: </td><td><input type="text" name="assest"  /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="reset" />&nbsp;&nbsp;<input type="submit" value="submit" name="submit" /></td>
  	</tr>
</table>
</form>

</div>

</center>