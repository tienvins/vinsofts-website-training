 <?php

require 'models/database.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_employ($id);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: contacts-list.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_employ']))
{
    // Lay data
    $data['name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['address']         = isset($_POST['address']) ? $_POST['address'] : '';
    $data['phonenumber']    = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
    $data['id']          = isset($_POST['id']) ? $_POST['id'] : '';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên';
    }
    
    if (empty($data['address'])){
        $errors['address'] = 'Chưa nhập address';
    }
    if (empty($data['phonenumber'])){
        $errors['phonenumber'] = 'Chưa nhập phonenumber';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_employ($data['id'], $data['name'], $data['address'], $data['phonenumber']);
        // Trở về trang danh sách
        // header("location: contacts-list.php");
    }
}

disconnect_db();
?>
        <form method="post" action="nhansu-edit.php?id=<?php echo $data['id']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $data['name']; ?>"/>
                        <?php if (!empty($errors['name'])) echo $errors['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>adress</td>
                    <td>
                        <input type="text" name="address" value="<?php echo $data['address']; ?>"/>
                        <?php if (!empty($errors['address'])) echo $errors['address']; ?>
                    </td>
                </tr>
                <tr>
                    <td>phone</td>
                    <td>
                        <input type="text" name="phonenumber" value="<?php echo $data['phonenumber']; ?>"/>
                        <?php if (!empty($errors['phonenumber'])) echo $errors['phonenumber']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                        <input type="submit" name="edit_employ" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form> -->