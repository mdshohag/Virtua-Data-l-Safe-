<?php
	class cls_dbconfig{
		public function connection(){
			$db = new mysqli("localhost", "root", "", "db_benefit");
			return $db;
		}
	}
?>