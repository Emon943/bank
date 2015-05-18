<?php 

require_once'config.php';
 $table = $_GET['table'];

/*Account table, loan*/
 $account_number = $_GET['account_number'];
 $branch = $_GET['branch_name'];
 $balance = $_GET['balance'];

/*Borrower table*/
$customer_name = $_GET['customer_name'];
$loan_number = $_GET['loan_number'];

/*Branch table*/
$branch_name = $_GET['branch_name'];
$branch_city= $_GET['branch_city'];
$assest = $_GET['assest'];

/*Customer table*/
$customer_name= $_GET['customer_name'];
$customer_street = $_GET['customer_street'];
$customer_city = $_GET['customer_city'];

if($_GET['submit']==submit){
	switch($table){
		case 't_account':
			$query = "INSERT INTO account VALUES('$account_number', '$branch', '$balance');";
			break;
		case 't_borrower':
			$query = "INSERT INTO borrower VALUES('$customer_name', '$loan_number');";
			break;
		case 't_branch':
			$query = "INSERT INTO branch VALUES('$branch_name', '$branch_city', '$assest');";
			break;
		case 't_customer':
			$query = "INSERT INTO customer VALUES('$customer_name', '$customer_street', '$customer_city');";
			break;
		case 't_depositor':
			$query = "INSERT INTO depositor VALUES('$customer_name', '$account_number');";
			break;
		case 't_loan':
			$query = "INSERT INTO loan VALUES('$loan_number', '$branch', '$balance');";
			echo"$query";
			break;
		
		
		default: echo "<center><h1>Welcome to Md. Motiur Rahman</h1></center>";
			break;
	}
	
	if($obj->doQuery($query)){
		header("Location:index.php?page=$table");
	}
	else
		header("Location:index.php?page=$table&result=<h1>Sorry! Please try again.</h1>");
	
			
	
}
?>