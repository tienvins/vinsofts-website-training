<?php 
require ('database.php');


class M_NhanSu extends database{
//ham lay tat ca nhan su
    function get_all_nhansu()
    {
        $this->connect_db();
        $sql = "select * from ql_nhansu";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
//Hàm lấy nhân sự theo ID
    function get_nhansu($id)
    {
        $this->connect_db();
        $sql = "select * from ql_nhansu where id = {$id}";
        $query = mysqli_query($this->conn, $sql);
        return $result;
    }
// //hàm thêm nhân sự
    function add_nhansu($name, $address, $phonenumber)
    {
        $this->connect_db();
        $name = addslashes($name);
        $address = addslashes($address);
        $phonenumber = addslashes($phonenumber);

        $sql = "
        INSERT INTO ql_nhansu(name, address, phonenumber) VALUES
        ('$name','$address','$phonenumber')
        ";

        $query = mysqli_query($this->conn, $sql); 
        return $query;
    }

// // Hàm sửa nhân sự
//     function edit_nhansu($id, $name, $address, $phonenumber)
//     {
//         global $conn;
//         connect_db();
//         $name       = addslashes($name);
//         $address        = addslashes($address);
//         $phonenumber   = addslashes($phonenumber);

//         $sql = "
//         UPDATE ql_nhansu SET
//         name = '$name',
//         address = '$address',
//         phonenumber = '$phonenumber'
//         WHERE id = $id
//         ";
//         $query = mysqli_query($conn, $sql);  
//         return $query;
//     }
// // Hàm xóa nhân sự
//     function delete_nhansu($id)
//     {
//         global $conn;
//         connect_db();
//     // Câu truy sửa
//         $sql = "
//         DELETE FROM ql_nhansu
//         WHERE id = $id
//         ";
//         $query = mysqli_query($conn, $sql);
//         return $query;
//     } 
}

?>	