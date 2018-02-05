<?php
  while($row=mysqli_fetch_array($getnhansu)) {
    ?>
    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
        <div class="row">
             <div class="well profile_view">
              <div class="col-sm-12">
                <h4 class="brief"><i>Mã nhân viên: <?php echo $row['MaNV'] ?></i></h4>
                <div class="left col-xs-12">
                  <h2><?php echo $row['HoTen']; ?></h2>
                  <p><strong>Ma Phòng Ban</strong> <?php echo $row['MaPB']; ?> </p>
                  <p><i class="fa fa-building"></i> Chức Vụ: <?php echo $row['ChucVu']; ?></p>
                  <p><i class="fa fa-phone"></i> Ngày Sinh: <?php echo $row['Birth'] ?></p>
   
                 
<!--                   <ul class="list-unstyled">
                    <li><i class="fa fa-building"></i> Chức Vụ: <?php echo $row['ChucVu']; ?></li>
                    <li><i class="fa fa-phone"></i> Ngày Sinh: <?php echo $row['Birth'] ?></li>
                  </ul> -->
                <h5 class="brief"><i>Địa Chỉ: <?php echo $row['DiaChi'] ?></i></h5>
                 <h5 class="brief"><i>Phone <?php echo $row['Phone'] ?></i></h5>
                </div>
                <div class="right col-xs-5 text-center">
                  <img src="public/images/<?php echo $key->Hinh; ?>" alt="" class="img-circle img-responsive">
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                <div class="col-xs-12 col-sm-6 emphasis">
                  <button type="button" class="btn btn-primary btn-xs">
                    <i class="fa fa-user"> </i> Xem chi tiết
                  </button>
                  <button type="button" name="delete"  class="btn btn-danger btn-xs">
                      <i class="fa fa-minus"> </i> <a style="color: white" onclick="return deleteAction()" href="xoa.php?MaNV=<?php echo $row['MaNV'] ?>">Xóa</a>
                  </button>
                </div>
              </div>
            </div>         
        </div>

    </div>
     <?php
  }
?> 