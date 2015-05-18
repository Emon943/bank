<center>
<a href="#" onclick="window.print();">Print</a>
<div style="border:1px #666666 solid; padding:25px ; margin:250px">
<table border='1'><tr><th>Name</th></tr>
<?php 	

require_once'../config.php';
	$query = "SELECT c.customer_name FROM customer c, borrower b, depositor d WHERE c.customer_name=b.customer_name OR c.customer_name=d.customer_name GROUP BY (customer_name);";
		$result = $obj->doQuery($query);
		while($row=$obj->fetchArray($result)){
			echo "<tr><td>$row[0]</td></tr>";
		}
?>
</table>
</div>
</center>s