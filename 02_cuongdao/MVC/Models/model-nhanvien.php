


<?php
include_once 'connect.php';
class model_nhanvien
{
	
public function select_all(){
			$sql     = "SELECT * FROM dsnhanvien";
$ket_qua = $conn->query($sql);

//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();}

}
// public function select($id){
// 				$id=$_GET['id'];
// 				$sql     = "SELECT * FROM dsnhanvien WHERE id = $id";
// 				$ket_qua = $conn->query($sql);
// 				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
// 			if (!$ket_qua) {
// 			    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
// 			    exit();}
// }
// public function delete($id){
// 				$id=$_GET['id'];
// 				$sql     = "SELECT * FROM dsnhanvien WHERE id = $id";
// 				$ket_qua = $conn->query($sql);
// 				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
// 			if (!$ket_qua) {
// 			    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
// 			    exit();}
// }
// public function update($id){
	
// }
// }



// 	$id=$_GET['id'];  //lấy id để delete
// // $sql     =  "SELECT FROM dsnhanvien
// //             WHERE id = $id";


// // $ket_qua = $conn->query($sql);
// // if (!$ket_qua) {
// //     die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
// //     exit();
// 	echo $id;
// }
}
 ?> 