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
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Vinsofts</span></a>
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
                  <li><a><i class="fa fa-home"></i> Trang chủ </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Giới thiệu </a>
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
                <h3>Chỉnh sửa thông tin nhân viên</h3>
              </div>
            </div>


            <?php
              require_once("controllers/c_thongtin.php");
              // Lấy id của mã nhân viên
              // Gọi Controller lấy nhân viên theo id 
              $id=$_GET['MaNV'];
              $controller=new C_thongtin();
              $tt=$controller->getNhanVienById($id);
            ?>
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