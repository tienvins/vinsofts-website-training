<?php 
class database{
	public  $conn;
	public function connect_db()
	{
    // Nếu chưa kết nối thì thực hiện kết nối
			$this->conn = mysqli_connect('localhost', 'letunggiang', '123456', 'letunggiang') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
			mysqli_set_charset($this->conn, 'utf8');
	}
	 public function disconnect_db()
	{
		if ($conn){
			mysqli_close($conn);
		}
	}
}
?>