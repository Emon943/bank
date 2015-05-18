<center>
<div style="border:1px #666666 solid; padding:25px; margin:250px;">
<?php 	
require_once'../config.php';
$query = "INSERT INTO account VALUES ('SB_0055', 'Mohakhali', '250000'); ";
if( $obj->doQuery($query)){
	echo"Insert ok";
}
else{
	echo"sorry!";
}			
?>
</div>
</center>