<?php
	include 'connect.php';
	$query="Select * from db22_nhanvien";
	$result=mysqli_query($conn,$query);
	while ($row=mysqli_fetch_array($result)){
		$ten=$row['TenNV'];
		$diachi=$row['QueQuan'];
		$sdt=$row['SDT'];
		$hinh=$row['Hinh'];
		?>
		<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <h4 class="brief"><i>Digital Strategist</i></h4>
                <div class="left col-xs-7">
                  <h2><?php echo $ten ?></h2>
                  <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-building"></i> Address: <?php echo $diachi ?></li>
                    <li><i class="fa fa-phone"></i> Phone #: <?php echo $sdt ?></li>
                  </ul>
                </div>
                <div class="right col-xs-5 text-center">
                  <img src="images/<?php echo $hinh ?>" alt="" class="img-circle img-responsive">
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                <div class="col-xs-12 col-sm-6 emphasis">
                  <p class="ratings">
                    <a>4.0</a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star-o"></span></a>
                  </p>
                </div>
                <div class="col-xs-12 col-sm-6 emphasis">
                  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                    </i> <i class="fa fa-comments-o"></i> </button>
                  <button type="button" class="btn btn-primary btn-xs">
                    <i class="fa fa-user"> </i> View Profile
                  </button>
                </div>
              </div>
            </div>
          </div>
		<?php
	}
?>