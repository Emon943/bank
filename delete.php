<?php 

require_once'config.php';
$table = $_GET['table'];

/*account table, branch table, customer, depositor*/
$id = $_GET['id']; 

/*borrower table*/
echo $customer_name = $_GET['customer_name'];
echo $loan_number = $_GET['loan_number'];



	switch($table){
		case 't_account':
			$query = "DELETE FROM account WHERE account_number='$id';";
			$result = "<h1>Sorry! The member is a depositor</h1>";
			break;
		case 't_borrower':
			echo $query = "DELETE FROM borrower WHERE customer_name='$customer_name' AND loan_number = '$loan_number';";
			$result = "<h1>Sorry! The borrower could not delete.</h1>";
			break;
		case 't_branch':
			$query = "DELETE FROM branch WHERE branch_name='$id';";
			$result = "<h1>Sorry! Could not delete.</h1>";
			break;
		case 't_customer':
			$query = "DELETE FROM customer WHERE customer_name='$id';";
			$result = "<h1>Sorry! Could not delete.</h1>";
			break;
		case 't_depositor':
			echo $query = "DELETE FROM depositor WHERE customer_name='$customer_name' AND account_number = '$id';";
			$result = "<h1>Sorry! The borrower could not delete.</h1>";;
			break;
		case 't_loan':
			$query = "DELETE FROM loan WHERE loan_number='$id';";
			$result = "<h1>Sorry! The member is a depositor</h1>";
			break;
		
		
		default: echo "<center><h1>Welcome to Md. Mahedi Azad</h1></center>";
			break;
	}
	
	if($obj->doQuery($query)){
		header("Location:index.php?page=$table");
	}
	else
		header("Location:index.php?page=$table&result=$result");
	
			
	

?>