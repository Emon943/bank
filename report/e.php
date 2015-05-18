<center>
<a href="#" onclick="window.print();">Print</a>
<div style="border:1px #666666 solid; padding:25px ; margin:250px">
<table border='1'><tr><th>Name</th></tr>
<?php 	

require_once'../config.php';
	$query = "SELECT customer_name FROM  depositor d, account a WHERE a.account_number=d.account_number AND a.branch_name='Dhanmondhi' GROUP BY(customer_name) ORDER BY customer_name ASC;";
		$result = $obj->doQuery($query);
		while($row=$obj->fetchArray($result)){
			echo "<tr><td>$row[0]</td></tr>";
		}
?>
</table>
</div>
</center>s