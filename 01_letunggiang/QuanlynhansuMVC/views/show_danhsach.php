<?php
	 while ($item = mysqli_fetch_assoc($getNS)){
	  ?>
<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
     <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Danh sách nhân sự</i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo $item['name']; ?></h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Address:<?php echo $item['address']; ?> </li>
                                <li><i class="fa fa-phone"></i> Phone #:<?php echo $item['phonenumber']; ?> </li>
                              </ul>
                            </div>
                           <!--  <div class="right col-xs-5 text-center">
                              <img src="images/anhdaidien.jpg" alt="" class="img-circle img-responsive">
                            </div> -->
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
            <?php }
?>