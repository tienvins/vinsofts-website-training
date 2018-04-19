<?php include_once '../view/header.php'?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">

                        <form name="edit" method="post" action="../controllers/index_controllers.php" enctype="multipart/form-data">
                            <input type="hidden" value="create" name="action"/>

                    <div class='col-sm-12 row_edit'>
                                <div class='col-sm-12 form_user' style="color: #640c23;font-size: 20px;margin-bottom: 12px">Add New User</div>

                          </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Name</div>
                        <input class='col-sm-4' name = 'name' value='<?php echo $_SESSION['input']['name']?>'>
                        <div class="col-sm-6 prd" id="error-name" ><?php echo $error['name']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Email</div>
                        <input class='col-sm-4' name = 'email' value='<?php echo $_SESSION['input']['email']?>'>
                        <div class="col-sm-6 prd" id="error-email"><?php echo $error['email']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Email_personal</div>
                        <input class='col-sm-4' name = 'email_personal' value='<?php echo $_SESSION['input']['email_personal']?>'>
                        <div class="col-sm-6 prd" id="error-email_personal"><?php echo $error['email_personal']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Password</div>
                        <input class='col-sm-4' type="password" name='password' value='<?php echo $_SESSION['input']['password']?>'>
                        <div class="col-sm-6 prd" id="error-password"><?php echo $error['password']?></div>
                    </div>
                            <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Confirm Password</div>
                                <input class='col-sm-4' type="password" name='confirm-password' value='<?php echo $_SESSION['input']['confirm-password']?>'>
                                <div class="col-sm-6 prd" id="error-confirm-password"><?php echo $error['confirm-password']?></div>
                            </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Image</div>
                        <img class='col-sm-2' src='../images/<?php if (!isset($_SESSION['image']['name'])){echo $_SESSION['image']['name'];} else { echo 'user.png'; }?>' style='width: 60px'>
                        <input type="hidden" class='col-sm-1' value='<?php echo $_SESSION['input']['image']?>'>
                        <input class='col-sm-2' type='file' name ='fileToUpload'>
                        <div class="prd col-sm-6" id="error-image"><?php echo $error2['image']?></div>

                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Gender</div>
                        <div class="col-sm-4">
                            <input name = 'gender' type='radio' value='1' <?php if($_SESSION['input']['gender'] ==1 ){ echo 'checked = checked';}?> >
                            <label>Nam </label>
                            <input name = 'gender' type='radio' value='2' <?php if($_SESSION['input']['gender'] ==2 ){ echo 'checked = checked';}?> style='margin-left: 20px'>
                            <label>Nữ </label>
                        </div>
                        <div class="col-sm-4 prd" id="error-gender" ><?php echo $error['gender']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Date_of_birth</div>
                        <input class='col-sm-4' type="date" name='date_of_birth' value='<?= $_SESSION['input']['date_of_birth'] ?>'>
                        <div class="col-sm-6 prd" id="error-date"><?php echo $error['date_of_birth']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Phone_number</div>
                        <input class='col-sm-4' name= 'phone_number' value='<?= $_SESSION['input']['phone_number']?>'>
                        <div class="col-sm-6 prd" id="error-phone"><?php echo $error['phone_number']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Current_address</div>
                        <input class='col-sm-4' name = 'current_address' value='<?= $_SESSION['input']['current_address'] ?>'>
                        <div class="col-sm-6 prd" id="error-current"><?php echo $error['current_address']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Leave_days</div>
                        <input class='col-sm-4' type="number" name= 'leave_days' value='<?= $_SESSION['input']['leave_days'] ?>'>
                        <div class="col-sm-6 prd" id="error-leave"><?php echo $error['leave_days']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Team_id</div>
                        <input class='col-sm-4' type="number" name ='team_id' value='<?= $_SESSION['input']['team_id'] ?>'>
                        <div class="col-sm-6 prd" id="error-team"><?php echo $error['team_id']?></div>
                    </div>
                    <div class='col-sm-12 row_edit fm-stt'>
                        <div class='col-sm-1'>Status</div>
                        <div class="col-sm-4">
                            <input name = 'status' type='radio' value='1' <?php if($_SESSION['input']['status'] ==1 ){ echo 'checked = checked';}?> >
                            <label>Đang làm </label>
                            <input name = 'status' type='radio' value='2' <?php if($_SESSION['input']['status'] ==2 ){ echo 'checked = checked';}?> style='margin-left: 20px'>
                            <label>Đang nghỉ </label>
                        </div>
                        <div class="col-sm-4 prd" id="error-status"><?php echo $error['status']?></div>
                        <!--                                <input class='col-sm-4' name='status' value='--><?//= $value['status'] ?><!--'>-->
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Language_skills</div>
                        <input class='col-sm-4' name='language_skills' value='<?= $_SESSION['input']['language_skills'] ?>'>
                        <div class="col-sm-6 prd" id="error-language"><?php echo $error['language_skills']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Hobby</div>
                        <input class='col-sm-4'  name='hobby' value='<?= $_SESSION['input']['hobby'] ?>'>
                        <div class="col-sm-6 prd" id="error-hobby"><?php echo $error['hobby']?></div>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Salary</div>
                        <input class='col-sm-4'  name='salary' value='<?= $_SESSION['input']['salary'] ?>'>
                        <div class="col-sm-6 prd" id="error-salary"><?php echo $error['salary']?></div>
                    </div>
                    <button style="margin-left: 250px;margin-top: 30px" type='submit' class='btn btn-success' id="btn-request">Submit</button>
                        </form>
            <div class="col-md-12 col-sm-12 col-xs-12">
            </div>

          </div>
          <br />


          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12" style ="height: 500px">
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">


            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php include_once '../view/footer.php'?>