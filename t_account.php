<?php
	require_once'config.php';
?>
<center>
<?php echo $_GET['result']; ?>

<h3>This is account table</h3>
<table width="708" height="200px" border="1" style=" text-align:center;  font-size:15px; margin-top:10px; text-decoration:none;" cellpadding="5px">
  <tr>
    <th width="231">Account Number</th>
    <th width="139">Branch Name</th>
    <th width="128">Balance</th>
    <th width="94">Option</th>
  </tr>
  <?php
  	$query = "SELECT * FROM account;";
	$result = $obj->doQuery($query);
	while($row = $obj->fetchArray($result)){
		echo"		
	  <tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td><a href='delete.php?table=t_account&id=$row[0]'>Delete</a></td>
	  </tr>
	  ";
 }
 ?>
</table>

<div style="border:#666666 1px solid; width:708px; margin-top:10px">
<h3>Add Account</h3>
<form action="add.php" method="get">
	<input type="hidden" name="table" value="t_account" />
<table>
	<tr>
		<td width="171">Account Number:  </td>
		<td width="210">
			
			<input type="text" name="account_number" />
		</td>
	</tr>
	<tr>
		<td>Branch Name: </td>
		<td><select type="text" name="branch_name" >
							<option selected="selected" value="" >Select branch name</option>
						  <?php
						  	$query = "SELECT branch_name FROM branch;";
							$branch = $obj->doQuery($query);
							while($row = $obj->fetchArray($branch)){
							echo "<option value='$row[0]'>$row[0]</option>";
							}
						?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Balance: </td><td><input type="text" name="balance"  /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="reset" />&nbsp;&nbsp;<input type="submit" value="submit" name="submit" /></td>
  	</tr>
</table>
</form>

</div>

</center>