<?php
	include_once 'connect.php';	
	class model
	{
		function getxoa_nhanvien($id)
		{	
			
			$id = $_GET['id'];
				
			$sql = "DELETE FROM dsnhanvien WHERE id = $id";
			if ($conn->query($sql) === TRUE) 
			{
				header('Location: http://lrv.vn/mvc/index.php?controller=user&act=list');} 
				else {
					echo "Error deleting record: " . $conn->error;
				}
			}
			function getupdatenhanvien($id)
			{
				require 'connect.php';



				$id = $_GET['id'];
				$hoten = "";
				$ngaysinh = "";
				$quequan = "";
				$diachi = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					if(isset($_POST["ten"])) { $hoten = $_POST['ten']; }

					if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; }
					if(isset($_POST["quequan"])) { $quequan = $_POST['quequan']; }
					if(isset($_POST["diachi"])) { $diachi = $_POST['diachi']; }



    
					$sql = "
					UPDATE dsnhanvien SET hoten = '$hoten', ngaysinh = '$ngaysinh', quequan = '$quequan', diachi = '$diachi' WHERE id = $id";

					if ($conn->query($sql) == TRUE) {

						header('Location: http://lrv.vn/mvc/index.php?controller=user&act=list');
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}}

					$conn->close();

				}
				function getthemnhanvien()
				{
					require 'connect.php';


					$hoten = "";
					$gioitinh = "";
					$ngaysinh = "";
					$quequan = "";
					$diachi = "";


					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if(isset($_POST["ten"])) { $hoten = $_POST['ten']; }
						if(isset($_POST["gioitinh"])) { $gioitinh = $_POST['gioitinh']; }
						if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; }
						if(isset($_POST["quequan"])) { $quequan = $_POST['quequan']; }
						if(isset($_POST["diachi"])) { $diachi = $_POST['diachi']; }


						$sql = "INSERT INTO dsnhanvien (hoten, gioitinh, ngaysinh, quequan, diachi ) 
						VALUES ('$hoten','$gioitinh', '$ngaysinh','$quequan','$diachi')";

						if ($conn->query($sql) === TRUE) {
							header('Location: http://lrv.vn/mvc/index.php?controller=user&act=list');
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}}

						$conn->close();

					}
					function getselect($id)
					{  
						require  'connect.php';
					$id = $_GET['id'];

					$sql     = "SELECT * FROM dsnhanvien WHERE id = $id";

					$ket_qua = mysqli_query($conn, $sql);

					return $ket_qua;

					if (!$ket_qua) {
						die("Không thể thực hiện câu lệnh SQL: " . $conn->connect_error);
						exit();
					} 	
				}
				function getselect_all()
				{
					require  'connect.php';
					$sql     = "SELECT * FROM dsnhanvien";

					$ket_qua = mysqli_query($conn, $sql);

					return $ket_qua;

					if (!$ket_qua) {
						die("Không thể thực hiện câu lệnh SQL: " . $conn->connect_error);
						exit();
					}
				}


			}

			?>