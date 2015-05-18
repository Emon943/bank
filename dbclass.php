<?php 

	class dbclass{
		public $dbHost='';
		public $dbUser = '';
		public $dbPass ='';
		public $dbName ='';
		
		private $link;
		
		public function dbConnect(){
			if(!$this->link = mysql_pconnect($this->dbHost, $this->dbUser, $this->dbPass)){
				die('Could not connect to the databse');
			}
			mysql_select_db($this->dbName, $this->link);
		}
		
		public function doQuery($query){
			$result = mysql_query($query, $this->link);
			return $result;
		}
		
		public function fetchObject($result){
			$row = mysql_fetch_object($result);
			return $row;
		}
		
		public function fetchArray($result){
			$row = mysql_fetch_array($result);
			return $row;
		}
		
		public function numOfRows($result){
			$num = mysql_num_rows($result);
			return $num;
		}
	}

?>