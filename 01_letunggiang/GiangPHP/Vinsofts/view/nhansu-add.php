<?php

require './models/database.php';

// Nếu người dùng submit form
if (!empty($_POST['add_employ']))
{
    // Lay data
    $data['name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['address']         = isset($_POST['address']) ? $_POST['address'] : '';
    $data['phonenumber']    = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên ';
    }
    
    if (empty($data['address'])){
        $errors['address'] = 'Chưa nhập address';
    }
     if (empty($data['phonenumber'])){
        $errors['phonenumber'] = 'Chưa nhập phonenumber';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        add_employ($data['name'], $data['address'], $data['phonenumber']);
        // Trở về trang danh sách
        header("location: contacts-list.php");
    }
}
disconnect_db();  
?>
 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="contacts-add.php">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo !empty($data['name']) ? $data['name'] : ''; ?>" > <?php if (!empty($errors['name'])) echo $errors['name']; ?>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Address">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Address" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo !empty($data['address']) ? $data['address'] : ''; ?>"><?php if (!empty($errors['address'])) echo $errors['address']; ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">PhoneNumber</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="PhoneNumber" class="form-control col-md-7 col-xs-12" type="text" name="PhoneNumber" value="<?php echo !empty($data['phonenumber']) ? $data['phonenumber'] : ''; ?>"><?php if (!empty($errors['phonenumber'])) echo $errors['phonenumber']; ?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"  name="add_employ">Submit</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button class="btn btn-primary" type="button"></a>Cancel</button>
                        </div>
                      </div>
                    </form>

<!-- <!DOCTYPE html>
 <html>
    <head>
        <title>Thêm nhan su</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Thêm nhan su </h1>
        <!-- <a href="../../contacts-list.php">Trở về</a> <br/> <br/> -->
        <form method="post" action="./nhansu-add.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo !empty($data['name']) ? $data['name'] : ''; ?>"/>
                        <?php if (!empty($errors['name'])) echo $errors['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>address</td>
                    <td>
                        <input type="text" name="address" value="<?php echo !empty($data['address']) ? $data['address'] : ''; ?>"/>
                        <?php if (!empty($errors['address'])) echo $errors['address']; ?>
                    </td>
                </tr>
                <tr>
                    <td>phonenumber</td>
                    <td>
                        <input type="text" name="phonenumber" value="<?php echo !empty($data['phonenumber']) ? $data['phonenumber'] : ''; ?>"/>
                        <?php if (!empty($errors['phonenumber'])) echo $errors['phonenumber']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_employ" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form> -->
    </body>
</html>
