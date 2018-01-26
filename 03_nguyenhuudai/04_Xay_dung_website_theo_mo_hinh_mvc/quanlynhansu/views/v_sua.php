<div class="row">
  <div class="col-md-12">
    <div class="form-them-moi">
        <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã nhân viên <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="manv" class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $tt->MaNV ?>" >
            </div>
         </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Họ và tên <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" class="form-control col-md-7 col-xs-12" value="<?php echo $tt->TenNV ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày sinh <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="date-picker form-control col-md-7 col-xs-12" type="date" name="birthday" value="<?php echo $tt->NgaySinh ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Quê quán</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" type="text" name="address" value="<?php echo $tt->QueQuan ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Giới tính</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" name="gender" value="male"> Nam 
                  <input type="radio" name="gender" value="female"> Nữ
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Số điện thoại</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" type="text" name="phone" value="<?php echo $tt->SDT ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã phòng ban <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="mapb" class="mapb form-control col-md-7 col-xs-12">
              	<option selected="selected"><?php echo $tt->MaPB ?></option>
                <option label="Web">1</option>
                <option label="Mobile">2</option>
                <option label="Marketting">3</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" type="file" name="hinhanh" >
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="reset">Hủy</button>
              <button type="submit" class="btn btn-success" name="update">Chỉnh sửa</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>