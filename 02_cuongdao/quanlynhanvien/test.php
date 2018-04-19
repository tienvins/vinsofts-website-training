 <?php
require 'connect.php';
?>
<?php
 
// Câu SQL Insert
$sql     = "SELECT * FROM dsnhanvien" ;
// Thực hiện thêm record

$ket_qua = $conn->query($sql);
  if(!$ket_qua)
{
    echo 'Lỗi SQL: '.mysql_error();
    echo "\r\n<br />";
    echo 'SQL: '.$sql;
    exit;
}?>
<?php
while($row = mysqli_fetch_array($ket_qua)) {
 
       // Name of the person
      $strName = $row['hoten'] . " " . $row['ngaysinh'];
 		
       // Create a link to person.php with the id-value in the URL
       $strLink =  $row['id'] ;
 
        // List link
       echo  $strLink;
 
      }
?>