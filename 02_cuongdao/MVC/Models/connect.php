
<?php
	class connect 
	{
			 public function connect_db()
		{
			$host= "localhost";
			$username = "root";
			$password = "";
			$dbname = "qlnhanvien"; 
			$conn = new mysqli($host, $username, $password ,$dbname);
				
			if ($conn->connect_error)
			 {
			die("Kết nối thất bại: " . $conn->connect_error);
				echo "kết nối thất bại"; 
			  }
			else 
			{
					return $conn;
			}

		}	

	}
 
	
?>