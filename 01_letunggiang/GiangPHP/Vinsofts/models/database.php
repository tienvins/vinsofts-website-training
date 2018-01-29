
<?php 
// Biến kết nối toàn cục
global $conn;
// Hàm kết nối
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'letunggiang', '123456', 'letunggiang') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}
// Hàm lấy tất cả nhân sự
function get_all_employ()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả nhân sự
    $sql = "select * from ql_nhansu";
     
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
// Hàm lấy nhân sự theo ID
function get_employ($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from ql_nhansu where id = {$id}";
     
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

function add_employ($name, $address, $phonenumber)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Chống SQL Injection
    $name = addslashes($name);
    $address = addslashes($address);
    $phonenumber = addslashes($phonenumber);
    
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO ql_nhansu(name, address, phonenumber) VALUES
            ('$name','$address','$phonenumber')
    ";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


// Hàm thêm nhân sự

// Hàm sửa nhân sự
function edit_employ($id, $name, $address, $phonenumber)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $name       = addslashes($name);
    $address        = addslashes($address);
    $phonenumber   = addslashes($phonenumber);
     
    // Câu truy sửa
    $sql = "
            UPDATE ql_nhansu SET
            name = '$name',
            address = '$address',
            phonenumber = '$phonenumber'
            WHERE id = $id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
// Hàm xóa nhân sự
function delete_employ($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "
            DELETE FROM ql_nhansu
            WHERE id = $id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
} 
?>