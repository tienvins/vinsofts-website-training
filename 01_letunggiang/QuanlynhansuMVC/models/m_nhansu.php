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
    function get_id_nhansu($id)
    {
        $this->connect_db();
        $sql = "select * from ql_nhansu where id = {$id}";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
// //hàm thêm nhân sự
    function add_nhansu($name, $address, $phonenumber)
    {
        $this->connect_db();

        $sql = "
        INSERT INTO ql_nhansu(name, address, phonenumber) VALUES
        ('$name','$address','$phonenumber')
        ";

        $query = mysqli_query($this->conn, $sql); 
        return $query;
    }

// // Hàm sửa nhân sự
<<<<<<< HEAD
    function edit_nhansu($name, $address, $phonenumber)
=======
    function edit_nhansu($id, $name, $address, $phonenumber)
>>>>>>> 7fa5930bffe1b5923008c70a3eb374cdeb604dbc
    {
        $this->connect_db();
        $sql = "
        UPDATE ql_nhansu SET
        name = '$name',
        address = '$address',
        phonenumber = '$phonenumber'
<<<<<<< HEAD
        WHERE id = $id
        ";
        $query = mysqli_query($this->conn, $sql); 
        return $query;
=======
        WHERE id = '$id'
        ";
        $query = mysqli_query($this->conn, $sql); 
    
>>>>>>> 7fa5930bffe1b5923008c70a3eb374cdeb604dbc
    }
// // Hàm xóa nhân sự
    function delete_nhansu($id)
    {
       $this->connect_db();
    // Câu truy sửa
        $sql = "
        DELETE FROM ql_nhansu
        WHERE id = $id
        ";
        $query = mysqli_query($this->conn, $sql); 
        return $query;
    } 
}

?>	