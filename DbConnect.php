<?php
	/**
	* Database Connection

    	"host" => "27.254.145.139",
	"user" => "sxthein_db",
	"pass" => "Kd206d7@x",
	"dbname" => "sxthein_db",
	"charset" => "utf8"
	*/
	class DbConnect {
		private $server = 'localhost';
		private $dbname = 'sxthein_db';
		private $user = 'sxthein_db';
		private $pass = 'Kd206d7@x';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (\Exception $e) {
				echo "Database Error: " . $e->getMessage();
			}
		}
        
	}
?>