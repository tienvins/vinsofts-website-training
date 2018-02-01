<?php

require 'models/database.php';

// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_employ($id);
}

// Trở về trang danh sách
header("location: contacts-list.php");