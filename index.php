<html>
<head>
<title>The Company</title>
<style>
 #box {border:#000000 solid 1px; width:850px; height: auto; border-radius: 0.25em; margin:25px 25px auto 300px}
 #header {text-align:center; color:#666666; padding-top:20px;}
 #menu {text-align:center; border-bottom:#000000 solid 1px; padding-bottom:2px}
 .link{ text-decoration:none; color: #666666;}
</style>
</head>

<body id="box">

<!--header-->
<h1 id="header">The Bank</h1>

<!--Content-->
<div style=" height:auto; border-top:#000000 solid 1px; ">

<!--Main Menu-->
	<div id="menu">
		<a class="link" href="index.php">Home</a> | 
		<a class="link" href="index.php?page=table">Tables</a> | 
		<a class="link" href="index.php?page=report">Reports</a> 
	</div>
	
<!--box_content-->
	<div style="padding:3px 7px 35px 7px; text-align:justify">
		<?php require_once'controller.php'; ?>
	</div>


</div>
<!--Footer-->
<div style="padding:3px; text-align:center; border-top:#000000 solid 1px; ">Powered by -Motiur Rahman</div>
</body>
</html>