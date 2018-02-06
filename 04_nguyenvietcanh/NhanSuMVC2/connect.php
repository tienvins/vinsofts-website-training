<?php
$conn = mysqli_connect('localhost','root','', 'quanlynhanvien');
if(!$conn){
	echo "ket noi khong thanh cong";
}

else {
	mysqli_set_charset($conn,'UTF8');
}



 ?>
