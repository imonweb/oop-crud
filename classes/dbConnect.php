<?php


	class DbConnect{
		private $Dbservername = 'localhost';
		private $Dbusername = 'imon';
		private $Dbpassword = 'p@ssw0rd';
		private $Dbname = 'php_oop_crud';

		private function pdoConnection(){
			$sqlConn = 'mysql:host='.$this->Dbservername.';dbname='.$this->Dbname;
			$conn = new PDO($sqlConn,$this->Dbusername,$this->Dbpassword);

			try{
				return $conn;

			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

		protected function connect(){
			return $this->pdoConnection();		
		}

	}
	
?>	