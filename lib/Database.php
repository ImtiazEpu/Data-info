<?php 

	class Database{

		public $host   = DB_HOST;
		public $user   = DB_USER;
		public $pass   = DB_PASS;
		public $dbname = DB_NAME;

		public $link;
		public $error;

		public function __construct(){
				$this->connectDB();
			}

		/*Connect QUERY*/
		public function connectDB(){

			$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

			if(!$this->link){
				$this->error = "connection Faild";
					return false;
			}
		}


		/*Insert QUERY*/
		public function insert($query){
			
			$insert = $this->link->query($query) or die($this->link->error.__Line__);
			if ($insert) {
				return $insert;
			}
			else {
				return false;
			}
		}


		/*Select QUERY*/
		public function select($query){

			$select = $this->link->query($query) or die($this->link->error.__Line__);

			if ($select->num_rows> 0 ){
				return $select;
			}
			else {
				return false;
			}
		}


		/*Delete QUERY*/
		public function delete($query){

			$delete = $this->link->query($query) or die($this->link->error.__Line__);

			if ($delete){
				return $delete;
			}
			else {
				return false;
			}
		}
		

		/*Update QUERY*/
		public function update($query){

			$update = $this->link->query($query) or die($this->link->error.__Line__);

			if ($update){
				return $update;
			}
			else {
				return false;
			}
		}




	}



 ?>