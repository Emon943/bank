<?php
	require_once'config.php';
?>
<center>
<?php echo $_GET['result']; ?>

<h3>This is depositor table</h3>
<table width="708" border="1" style=" text-align:center;  font-size:15px; margin-top:10px; text-decoration:none;" cellpadding="5px">
  <tr>
    <th width="295">Customer name </th>
    <th width="170">Account number</th>
    <th width="120" >Option</th>
  </tr>
  <?php
  	$query = "SELECT * FROM depositor;";
	$result = $obj->doQuery($query);
	while($row = $obj->fetchArray($result)){
		echo"		
	  <tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td><a href='delete.php?table=t_depositor&customer_name=$row[0]&id=$row[1]'>Delete</td>
	  </tr>
	  ";
 }
 ?>
</table>

<div style="border:#666666 1px solid; width:708px; margin-top:10px">
<h3>Add depositor</h3>
<form action="add.php" method="get">
	<input type="hidden" name="table" value="t_depositor" />
<table>
	<tr>
		<td width="171">Customer name: </td>
		<td><select type="text" name="customer_name" >
							<option selected="selected" value="" >Select customer name</option>
						  <?php
						  	$query = "SELECT customer_name FROM customer;";
							$branch = $obj->doQuery($query);
							while($row = $obj->fetchArray($branch)){
							echo "<option value='$row[0]'>$row[0]</option>";
							}
						?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Account number </td>
		<td><select type="text" name="account_number" >
							<option selected="selected" value="" >Select loan number</option>
						  <?php
						  	$query = "SELECT account_number FROM account;";
							$branch = $obj->doQuery($query);
							while($row = $obj->fetchArray($branch)){
							echo "<option value='$row[0]'>$row[0]</option>";
							}
						?>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="reset" />&nbsp;&nbsp;<input type="submit" value="submit" name="submit" /></td>
  	</tr>
</table>
</form>

</div>

</center>