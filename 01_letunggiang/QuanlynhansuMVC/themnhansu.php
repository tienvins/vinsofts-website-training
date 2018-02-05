<?php 
if (isset($_POST['add_nhansu']))
{
  $name       = $_POST['name'];
  $address       = $_POST['address'];
  $phonenumber       = $_POST['phonenumber'];

  require_once('controllers/c_nhansu.php');
  $showadd = new C_NhanSu();
  $showadd->getAddNhansu($name, $address, $phonenumber);
        // Trở về trang danh sách
    header("location: quanlynhansu.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact Form by Lê Tùng Giang</title>

  <!-- Bootstrap -->
  <link href="public/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <!-- <link href="nprogress/nprogress.css" rel="stylesheet"> -->

  <!-- Custom Theme Style -->
  <link href="public/build/css/custom.min.css" rel="stylesheet">
<<<<<<< HEAD
=======
  <link rel="stylesheet" href="public/CSS/style.css" rel="stylesheet">
>>>>>>> 7fa5930bffe1b5923008c70a3eb374cdeb604dbc
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Lê Tùng Giang</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="public/images/anhdaidien.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome</span>
              <h2>Lê Tùng Giang</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>This is</h3>
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="index2.html">Dashboard2</a></li>
                    <li><a href="index3.html">Dashboard3</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Quản Lý Nhân Sự <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="quanlynhansu.php">Danh sách nhân sự</a></li>
                    <li><a href="themnhansu.php">Thêm Nhân Sự</a></li>
                  </ul>

                </li>
              </ul>
            </div>
          </div>

          <!-- /sidebar menu -->
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
                  <!--   <img src="images/img.jpg" alt="">John Doe -->
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
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
              <h3>Form Design</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Element Design</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br/>

                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="POST">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Address">Address <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Address" name="address" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">PhoneNumber</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="PhoneNumber" required="required"  class="form-control col-md-7 col-xs-12" type="text" name="phonenumber">
                            </div>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <button type="submit" class="btn btn-success"  name="add_nhansu">Submit</button>
<<<<<<< HEAD
                              <button class="btn btn-primary" type="reset">Reset</button>
                              <button class="btn btn-primary" type="button"></a>Cancel</button>
=======
                              <button class="btn btn-primary" type="button" onclick="location.href='quanlynhansu.php'">Cancel</button>
>>>>>>> 7fa5930bffe1b5923008c70a3eb374cdeb604dbc
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
       <!--  <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/lib/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <!-- <script src="fastclick/lib/fastclick.js"></script> -->
    <!-- NProgress -->
    <!-- <script src="nprogress/nprogress.js"></script> -->
    <!-- Custom Theme Scripts -->
    <script src="public/build/js/custom.min.js"></script>
  </body>
  </html>