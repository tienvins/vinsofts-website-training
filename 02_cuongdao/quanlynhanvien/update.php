<?php
require 'connect.php';
 ?>
<?php
$id=$_GET['id'];

$hoten = "";
$gioitinh = "";
$ngaysinh = "";
$quequan = "";
$diachi = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["ten"])) { $hoten = $_POST['ten']; }
 	if(isset($_POST["gioitinh"])) { $gioitinh = $_POST['gioitinh']; }
    if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; }
    if(isset($_POST["quequan"])) { $quequan = $_POST['quequan']; }
    if(isset($_POST["diachi"])) { $diachi = $_POST['diachi']; }

  
  
 
    //Code xử lý, insert dữ liệu vào table
$sql = "
            UPDATE dsnhanvien SET
            hoten = '$student_name',
            gioitinh = '$student_sex',
            ngaysinh = '$student_birthday'
            quequan = '$quequan',
            diachi = '$diachi',
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
    
        echo "update dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }}
//Đóng database
$conn->close();
?>