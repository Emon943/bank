<center>
<div style="border:1px #666666 solid; padding:25px; margin:250px;">
<?php 	
require_once'../config.php';
$query = "DELETE FROM loan WHERE amount  BETWEEN '13000' AND '20000';";
if( $obj->doQuery($query)){
	echo"Delete ok";
}
else{
	echo"sorry!";
}			
?>
</div>
</center>