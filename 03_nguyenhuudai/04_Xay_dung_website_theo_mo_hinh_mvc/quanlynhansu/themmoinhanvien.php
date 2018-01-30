<?php
  if(isset($_POST['add_new'])){
    $tennv    = $_POST['name'];
    $ngaysinh = $_POST['birthday'];
    $diachi   = $_POST['address'];
    $gioitinh = $_POST['gender'];
    $sdt      = $_POST['phone'];
    $mapb     = $_POST['mapb'];
    $anh      = $_FILES['hinhanh']['tmp_name'];
    $duongdan = $_FILES['hinhanh']['name'];
    move_uploaded_file($anh, "public/images/".$duongdan);
    require_once("controllers/c_nhanvien.php");
    $controller   = new C_NhanVien();
    $controller->addNhanVien($tennv, $ngaysinh, $diachi, $gioitinh, $sdt, $mapb, $duongdan);
    header('location:quanlynhanvien.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vinsofts</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/css/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Vinsofts</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="public/images/images-2.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Xin chào</span>
                <h2>Nguyễn Hữu Đại</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ </a>
                  </li>
                  <li><a href="quanlynhanvien.php"><i class="fa fa-edit"></i> Trang quản lý </a>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Liên hệ </span></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="public/images/images-2.jpg" alt="">Nguyễn Hữu Đại
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Hồ sơ</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Cài đặt</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Hỗ trợ</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Thêm mới nhân viên</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-them-moi">
                    <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Họ và tên <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="name" class="form-control col-md-7 col-xs-12" placeholder="Nhập họ và tên" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày sinh <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" type="date" name="birthday" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quê quán</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="address" placeholder="Nhập quê quán" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Giới tính</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="radio" name="gender" value="Nam" checked="checked"> Nam 
                              <input type="radio" name="gender" value="Nữ"> Nữ
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Số điện thoại</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="phone" placeholder="Nhập số điện thoại" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên phòng ban <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="mapb" class="mapb form-control col-md-7 col-xs-12">
                            <!-- Gọi tới controller show danh sách phòng ban -->
                            <?php
                              require_once("controllers/c_nhanvien.php");
                              $controller   = new C_NhanVien();
                              $ds           = $controller->getPhongBan();
                               foreach ($ds as $key ) {
                                  ?>
                                  <option value="<?php echo $key->MaPB ?>" ><?php echo $key->TenPB ?></option>
                                  <?php
                                 } 
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="file" name="hinhanh">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Hủy</button>
                          <button type="submit" class="btn btn-success" name="add_new">Thêm mới</button>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/js/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="public/js/custom.min.js"></script>
  </body>
</html>