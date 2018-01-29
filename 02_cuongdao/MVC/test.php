<?php
// Kiểm tra kết nối
// Kết nối
$host= "localhost";
$username = "root";
$password = "";
$dbname = "qlnhanvien"; 
$conn = new mysqli($host, $username, $password ,$dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    echo "kết nối thất bại";
} ?>
<?php
 

$sql     = "SELECT * FROM dsnhanvien";
$ket_qua = $conn->query($sql);

//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();}
?>


<?php


                    while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)):?>
                        <tr>
                
                          <td><?php echo  $row['hoten'];?></td>
                          <td><?php echo  $row['ngaysinh'];?></td>
                          <td><?php echo  $row['quequan'];?></td>
                          <td><?php echo  $row['diachi'];?></td>
                          <td><a href="edit_nhanvien.php?id=">Edit</a></td>
                          <td> <a href="delete.php?id=<?php echo $row['id'];?> ">Delete</a></td>
                         
                        </tr>
                  <?php endwhile; ?>
                       