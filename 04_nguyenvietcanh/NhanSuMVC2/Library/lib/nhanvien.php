
<?php
// Biến kết nối toàn cục
global $conn;
 
// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'root', '', 'qlnhanvien') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
       
    }
}
 
// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}
 
// Hàm lấy tất cả nhân viên
function get_all_nhanvien()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả nhân viên
    $sql = "select * from dsnhanvien";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result;
}
 
// Hàm lấy nhân viên theo ID
function get_nhanvien($nhanvien_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from dsnhanvien where nhanvien_id = {$nhanvien_id}";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
     
    // Trả kết quả về
    return $result;
}
 
// Hàm thêm nhân viên 
function add_nhanvien($ten, $gioitinh, $ngaysinh, $quequan, $diachi)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $ten = addslashes($ten);
    $gioitinh = addslashes($gioitinh);
    $ngaysinh = addslashes($ngaysinh);
    $quequan = addslashes($quequan);
    $diachi = addslashes($diachi);
     
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO dsnhanvien(hoten, gioitinh, ngaysinh, quequan, diachi) VALUES
            ('$ten','$gioitinh','$ngaysinh','$quequan','$diachi')
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// Hàm sửa nhân viên 
function edit_nhanvien($ten, $gioitinh, $ngaysinh, $quequan, $diachi)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
     $ten = addslashes($ten);
    $gioitinh = addslashes($gioitinh);
    $ngaysinh = addslashes($ngaysinh);
    $quequan = addslashes($quequan);
    $diachi = addslashes($diachi);
     
     
    // Câu truy sửa
    $sql = "
            UPDATE dsnhanvien SET
            hoten = '$ten',
            gioitinh = '$gioitinh',
            quequan = '$quequan'
            WHERE nhanvien_id = $nhanvien_id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// Hàm xóa nhân viên
function delete_nhanvien($nhanvien_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "
            DELETE FROM dsnhanvien
            WHERE nhanvien_id = $nhanvien_id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
?>