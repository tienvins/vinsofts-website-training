<?php
/**
* 
*/
class update
{
	
	function getupdatenhanvien($id)
	{
		require 'connect.php';


  
$id = $_GET['id'];
$hoten = "";
$ngaysinh = "";
$quequan = "";
$diachi = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["ten"])) { $hoten = $_POST['ten']; }
 	
    if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; }
    if(isset($_POST["quequan"])) { $quequan = $_POST['quequan']; }
    if(isset($_POST["diachi"])) { $diachi = $_POST['diachi']; }


 
    //Code xử lý, insert dữ liệu vào table
$sql = "
            UPDATE dsnhanvien SET hoten = '$hoten', ngaysinh = '$ngaysinh', quequan = '$quequan', diachi = '$diachi' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
    
      header('Location: http://lrv.vn/mvc/index.php?controller=user&act=list');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }}
//Đóng database
$conn->close();

	}
}

?>