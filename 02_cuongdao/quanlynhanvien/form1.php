<?php require 'header.php';?>
<?php
require 'lib/nhanvien.php';
$students = get_all_nhanvien();
disconnect_db();
?>


        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quản lý nhân viên  <small></small></h3>
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
                    <h2>Thông tin nhân viên <small></small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Họ tên</th>
                          <th>Ngày sinh</th>
                          <th>Quê quán</th>
                          <th>Địa chỉ</th>
                           <th>Sửa</th>
                            <th>Xóa</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                                   <?php foreach ($students as $item){ ?>
                        <tr>
                
                          <td><?php echo  $item['hoten'];?></td>
                          <td><?php echo  $item['ngaysinh'];?></td>
                          <td><?php echo  $item['quequan'];?></td>
                          <td><?php echo  $item['diachi'];?></td>
                          <td><a href="edit_nhanvien.php?id=<?php echo $item['id']; ?>">Edit</a></td>
                          <td> <a href="delete.php?id=<?php echo $item['id'];?> ">Delete</a></td>
                         
                        </tr>
                        <?php } ?>
                       
                      </tbody>
                    </table>
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


  </body>
</html>