<?php include_once '../view/header.php'?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">


                        <form name="edit" method="post" action="../controllers/index_controllers.php" enctype="multipart/form-data">
                            <input type="hidden" value="create" name="action"/>

                    <div class='col-sm-12 row_edit'>
                                <div class='col-sm-12 form_user' style="color: #640c23;font-size: 20px;margin-bottom: 12px">Add new</div>

                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Name</div>
                                <input class='col-sm-4' name = 'name' value=''>
                              <div class="prd" id="error-name"></div>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Email</div>
                                <input class='col-sm-4'  name = 'email' value=''>

                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Email_personal</div>
                                <input class='col-sm-4' name = 'email_personal' value=''>

                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Password</div>
                                <input class='col-sm-4' type="password" name='password' value=''>

                          </div>
                            <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Confirm Password</div>
                                <input class='col-sm-4' type="password" name='confirm-password' value=''>
                            </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Image</div>
                                <input class='col-sm-4' type='file' name ='fileToUpload'><br>

                          </div>
                            <div class='col-sm-12 row_edit fm-stt'>
                                <div class='col-sm-1'>Gender</div>
                                <div class="col-sm-2">
                                    <input name = 'gender' type='radio' value='1'  >
                                    <label>Nam </label>
                                    <input name = 'gender' type='radio' value='2'  style='margin-left: 20px'>
                                    <label>Nữ </label>
                                </div>

                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Date_of_birth</div>
                                <input type="date" class='col-sm-4' name='date_of_birth' value=''>
                               <div class="prd" id="error-date"></div>
                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Phone_number</div>
                                <input class='col-sm-4' name= 'phone_number' value=''>

                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Current_address</div>
                                <input class='col-sm-4' name = 'current_address' value=''>

                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Leave_days</div>
                                <input class='col-sm-4' name= 'leave_days' value=''>

                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Team_id</div>
                                <input type="number" class='col-sm-4' name ='team_id' value=''>
                          </div>
                          <div class='col-sm-12 row_edit fm-stt'>
                                <div class='col-sm-1'>Status</div>
                              <div class="col-sm-2">
                                    <input name = 'status' type='radio' value='1'  >
                                    <label>Đang làm </label>
                                    <input name = 'status' type='radio' value='2'  style='margin-left: 20px'>
                                    <label>Đang nghỉ </label>
                              </div>
<!--                                <input class='col-sm-4' name='status' value='--><?//= $value['status'] ?><!--'>-->
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Language_skills</div>
                                <input class='col-sm-4' name='language_skills' value=''>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Hobby</div>
                                <input type="number" class='col-sm-4' name='hobby' value=''>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1 '>Salary</div>
                                <input type="number" class='col-sm-4'  name='salary' value=''>
                          </div>

                           <button style="margin-left: 250px;margin-top: 30px" type='submit' class='tara btn btn-success' id="btn-request ">Submit</button>
<!--                           <button style="margin-left: 250px;margin-top: 30px;display: none" type='submit' class='btn btn-success' id="btn-request2" >Submit</button>-->
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

