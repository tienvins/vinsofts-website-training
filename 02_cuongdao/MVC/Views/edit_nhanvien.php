      <?php include 'header.php';?>
        <!-- /top navigation -->
     <?php 
     ($row = $getnhanvien->fetch_array(MYSQLI_ASSOC)) ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sửa nhân viên</h3>
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
                    <h2>Form Sửa nhân viên</h2>
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

                    <form class="form-horizontal form-label-left" novalidate method="post" action="http://lrv.vn/mvc/index.php?controller=user&act=update&id=<?php echo $row['id'];?>">

                  
                   <!--    <span class="section">Personal Info</span>
 -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Họ Tên <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12"  name="ten" required="required" type="text" value="<?php echo $row['hoten']?>">
                        </div>
                      </div>
                       
                   
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ngày Sinh <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="" name="ngaysinh" required="required" class="form-control col-md-7 col-xs-12" value="<?= $row['ngaysinh'] ?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Quê Quán <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" name="quequan" data-validate-linked="email"  class="form-control col-md-7 col-xs-12" value="<?php echo $row['quequan'] ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Địa Chỉ <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="diachi" name="diachi" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $row['diachi'] ?>">
                        </div>

                      </div>

                   
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <input type="reset" name="" class="btn btn-primary" value="Cancel"> 
                        <input name="" id="send" type="submit" class="btn btn-success" value="Submit"> 
                          
                        </div>
                      </div>
                    </form>
                  </div>
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

    <script src="./library/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./library/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./library/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./library/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="./library/vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./library/build/js/custom.min.js"></script>
  
  </body>
</html>