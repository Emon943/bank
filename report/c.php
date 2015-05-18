<center>
<a href="#" onclick="window.print();">Print</a>
<div style="border:1px #666666 solid; padding:25px ; margin:250px">
<table border='1'><tr><th>Avg Balance</th></tr>
<?php 	

require_once'../config.php';
	 $query = "SELECT avg(balance) FROM account WHERE  branch_name = 'Mohakhali';";
		$result = $obj->doQuery($query);
		while($row=$obj->fetchArray($result)){
			echo "<tr><td>$row[0]</td></tr>";
		}
?>
</table>
</div>
</center>s