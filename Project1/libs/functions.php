<?php
function UploadImageTeam(){
    $target_dir = "/var/www/html/Project1/images/team/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//        var_dump($target_file);die;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//    var_dump($imageFileType);die;
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
//    var_dump(file_exists($target_file));die;
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
//            var_dump($target_file);die;
//            var_dump($_FILES["fileToUpload"]["tmp_name"]);die;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    return $uploadOk;
}
    function UploadImage(){
//        var_dump($_FILES);die;
        $target_dir = "/var/www/html/Project1/images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//        var_dump($target_file);die;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
//            var_dump($target_file);die;
//            var_dump($_FILES["fileToUpload"]["tmp_name"]);die;
//            var_dump(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));die;
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return $uploadOk;
    }
function checkInput ($data){
    if ($data['password'] != $data['confirm-password']){
        $error['confirm-password'] = 'Mật khẩu không khớp';
    }
    if ($data['name'] == ''){
        $error['name'] = 'Bạn chưa nhập tên';
    }
    if ($data['email'] == ''){
        $error['email'] = 'Bạn chưa nhập email';
    }
//    if ($_FILES == ''){
//        $error['email'] = 'Bạn chưa nhập email';
//    }
    if ($data['email'] != ''){
        $conn = new mysqli(localhost, root, 1, VINSOFTS);
        $sql = 'SELECT * FROM users where email = "'.$data['email'].'"';
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row['id'] != $data['id']) {
            $error['email'] = 'Email đã tồn tại';
        }
        if(is_email($data['email']) == false)
            $error['email'] = 'Định dạng mail chưa chính xác';
    }

    if ($data['email_personal'] != ''){
        $conn = new mysqli(localhost, root, 1, VINSOFTS);
        $sql = 'SELECT * FROM users where email = "'.$data['email_personal'].'"';
        $result = $conn->query($sql);
//        var_dump($row = $result->fetch_assoc());die;
        if ($result->fetch_assoc() != '') {
            $error['email_personal'] = 'Email đã tồn tại';
        }
        if(is_email($data['email']) == false)
            $error['email_personal'] = 'Định dạng mail chưa chính xác';
    }

    if ($data['email_personal'] == ''){
        $error['email_personal'] = 'Bạn chưa nhập Email_personal';
    }
    if ($data['email_personal'] != ''){
        if(is_email($data['email_personal']) == false)
            $error['email_personal'] = 'Định dạng mail chưa chính xác';
    }
    if ($data['password'] == ''){
        $error['password'] = 'Bạn chưa nhập password';
    } if ($data['confirm-password'] == ''){
        $error['confirm-password'] = 'Bạn chưa nhập confirm-password';
    }
    if ($data['date_of_birth'] == ''){
        $error['date_of_birth'] = 'Bạn chưa nhập date_of_birth';
    }
    if ($data['gender'] == ''){
        $error['gender'] = 'Bạn chưa nhập gender';
    }
    if ($data['phone_number'] == ''){
        $error['phone_number'] = 'Bạn chưa nhập phone_number';
    }
    if ($data['phone_number'] != ''){
        if(is_number($data['phone_number']) == false)
            $error['phone_number'] = 'Nhập dưới dạng số';
    }
    if ($data['current_address'] == ''){
        $error['current_address'] = 'Bạn chưa nhập current_address';
    }

    if ($data['leave_days'] == ''){
        $error['leave_days'] = 'Bạn chưa nhập leave_days';
    }
    if ($data['team_id'] == ''){
        $error['team_id'] = 'Bạn chưa nhập team_id';
    }
    if ($data['status'] == ''){
        $error['status'] = 'Bạn chưa nhập status';
    }
    if ($data['language_skills'] == ''){
        $error['language_skills'] = 'Bạn chưa nhập language_skills';
    }
    if ($data['hobby'] == ''){
        $error['hobby'] = 'Bạn chưa nhập hobby';
    }
    if ($data['hobby'] != ''){
        if(is_number($data['hobby']) == false)
            $error['hobby'] = 'Nhập dưới dạng số';
    }
    if ($data['salary'] == ''){
        $error['salary'] = 'Bạn chưa nhập salary';
    }
    if ($data['salary'] != ''){
        if(is_number($data['salary']) == false)
            $error['salary'] = 'Nhập dưới dạng số';
    }
    return $error;
};
function is_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
function is_number($str) {
    return (!preg_match("/^[0-9]+(\\.[0-9]+)?$/", $str)) ? FALSE : TRUE;
}
function checkUpdateImage($data,$file) {
//    var_dump($file);die;
//    var_dump($file['fileToUpload']['name']);die;
    if ($file['fileToUpload']['name'] != ''){
        $conn = new mysqli(localhost, root, 1, VINSOFTS);
        $sql = 'SELECT * FROM users where image = "'.$file['fileToUpload']['name'].'"';
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
//        var_dump($row['id']);die;
        if(isset($row)) {
            if ($row['id'] != $data['id']) {
                $error['image'] = 'Ảnh đã tồn tại';
            }
        }
        return $error;
    }
}
function checkUpdate ($data){
//var_dump($data);die;
//    var_dump($data['confirm_password']);die;
    if ($data['password'] != $data['confirm_password']){
        $error['confirm-password'] = 'Mật khẩu không khớp';
    }
    if ($data['name'] == ''){
        $error['name'] = 'Bạn chưa nhập tên';
    }
    if ($data['email'] == ''){
        $error['email'] = 'Bạn chưa nhập email';
    }
//    if ($_FILES == ''){
//        $error['email'] = 'Bạn chưa nhập email';
//    }
    if ($data['email'] != ''){
        $conn = new mysqli(localhost, root, 1, VINSOFTS);
        $sql = 'SELECT * FROM users where email = "'.$data['email'].'"';
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(isset($row)) {
            if ($row['id'] != $data['id']) {
                $error['email'] = 'Email đã tồn tại';
            }
        }
        if(is_email($data['email']) == false)
            $error['email'] = 'Định dạng mail chưa chính xác';
    }

    if ($data['email_personal'] != ''){
        $conn = new mysqli(localhost, root, 1, VINSOFTS);
        $sql = 'SELECT * FROM users where email_personal = "'.$data['email_personal'].'"';
        $result = $conn->query($sql);
//        var_dump($row = $result->fetch_assoc());die;
        if(isset($row)) {
            if ($row['id'] != $data['id']) {
                $error['email_personal'] = 'Email_personal đã tồn tại';
            }
        }
        if(is_email($data['email_personal']) == false)
            $error['email_personal'] = 'Định dạng mail chưa chính xác';
    }

    if ($data['email_personal'] == ''){
        $error['email_personal'] = 'Bạn chưa nhập Email_personal';
    }
    if ($data['email_personal'] != ''){
        if(is_email($data['email_personal']) == false)
            $error['email_personal'] = 'Định dạng mail chưa chính xác';
    }
    if ($data['password'] == ''){
        $error['password'] = 'Bạn chưa nhập password';
    }
    if ($data['date_of_birth'] == ''){
        $error['date_of_birth'] = 'Bạn chưa nhập date_of_birth';
    }
    if ($data['gender'] == ''){
        $error['gender'] = 'Bạn chưa nhập gender';
    }
    if ($data['phone_number'] == ''){
        $error['phone_number'] = 'Bạn chưa nhập phone_number';
    }
    if ($data['phone_number'] != ''){
        if(is_number($data['phone_number']) == false)
            $error['phone_number'] = 'Nhập dưới dạng số';
    }
    if ($data['current_address'] == ''){
        $error['current_address'] = 'Bạn chưa nhập current_address';
    }

    if ($data['leave_days'] == ''){
        $error['leave_days'] = 'Bạn chưa nhập leave_days';
    }
    if ($data['team_id'] == ''){
        $error['team_id'] = 'Bạn chưa nhập team_id';
    }
    if ($data['status'] == ''){
        $error['status'] = 'Bạn chưa nhập status';
    }
    if ($data['language_skills'] == ''){
        $error['language_skills'] = 'Bạn chưa nhập language_skills';
    }
    if ($data['hobby'] == ''){
        $error['hobby'] = 'Bạn chưa nhập hobby';
    }
    if ($data['hobby'] != ''){
        if(is_number($data['hobby']) == false)
            $error['hobby'] = 'Nhập dưới dạng số';
    }
    if ($data['salary'] == ''){
        $error['salary'] = 'Bạn chưa nhập salary';
    }
    if ($data['salary'] != ''){
        if(is_number($data['salary']) == false)
            $error['salary'] = 'Nhập dưới dạng số';
    }
    return $error;
};
 ?>