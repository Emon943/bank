<?php 

switch($_GET['page']){
	case 'table':
		require_once'table.php';
		break;		
	case 't_account':
		require_once't_account.php';
		break;		
	case 't_borrower':
		require_once't_borrower.php';
		break;		
	case 't_branch':
		require_once't_branch.php';
		break;		
	case 't_customer':
		require_once't_customer.php';
		break;		
	case 't_depositor':
		require_once't_depositor.php';
		break;
	case 't_loan':
		require_once't_loan.php';
		break;

	
	case 'report':
		require_once'report.php';
		break;
		

	default: 
		echo"<center><h1>Welcome...</h1></center>";
		break;
}



?>