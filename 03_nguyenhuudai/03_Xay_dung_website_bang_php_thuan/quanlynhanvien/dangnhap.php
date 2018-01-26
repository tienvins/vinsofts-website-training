<?php
  include 'models/connect.php';
  if(isset($_POST['dangky'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="Insert into db22_users (username, email, password) values ('$username', '$email', '$password')";
    $thucthi=mysqli_query($conn,$sql);
    header('location:dangnhap.php#signin');
    // echo $_POST['name'];
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

    <title>Vinsofts | </title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="public/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Đăng nhập</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.php">Đăng nhập</a>
                <a class="reset_pass" href="#">Quên mật khẩu?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sử dụng lần đầu?
                  <a href="#signup" class="to_register"> Đăng ký tài khoản </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Vinsofts</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST">
              <h1>Đăng ký tài khoản</h1>
              <div>
                <input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Địa chỉ email" name="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required="" />
              </div>
              <div>
                <button type="submit" name="dangky">Đăng ký</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Đã có tài khoản ?
                  <a href="#signin" class="to_register">Đăng nhập</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Vinsofts</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
