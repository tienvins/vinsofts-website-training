<?php include_once '../view/header.php'?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-sm-6" >
                    <form name="edit" method="post" action="../controllers/team_controllers.php" enctype="multipart/form-data">
                        <input type="hidden" value="update" name="action"/>
                        <?php
                        foreach ($data2 as $key =>$value) {
//                                    var_dump($data2);die;
                            ?>
                            <input class='col-sm-12' type="hidden" name = 'id' value='<?php echo $value['id'] ?>'>
                            <div class='col-sm-12 row_edit'>
                                <div class='col-sm-12 form_user ' >Edit Team : <?php echo $value['name'] ?> </div>

                            </div>
                            <div class='col-sm-12 row_edit'>
                                <div class='col-sm-3 '>Name Team</div>
                                <input class='col-sm-6 name-edit' name = 'name-team' value='<?php echo $value['name'] ?>'>
                                <div class="prd" id="error-name-team"></div>
                            </div>

                            <div class='col-sm-12 row_edit'>
                                <div class='col-sm-3'>Image</div>
                                <img style="width: 100px" class="blah" src="../images/team/<?php echo $value['logo'] ?>">
                                <input class='col-sm-4' id="imgInp" type='file' name ='fileToUpload'><br>
                            </div>
                            <div class='col-sm-12 row_edit'>
                                <div class='col-sm-3'>Description</div>
                                <input class='col-sm-6 description-input-edit' name='description' value='<?php echo $value['description'] ?>'>
                                <div class="prd" id="error-description"></div>
                            </div>
                            <button style="margin-left: 250px;margin-top: 30px" type='submit' class='btn btn-success' id="btn-request">Submit</button>

                            <?php
                        }
                        ?>

                    </form>
                </div>
                <div class="col-sm-5 form_user">TEST SHOW</div>
                <div class="col-sm-5 menu-team box-shadow" >
                    <div class="col-sm-12 name-team nameee"><?php echo $value['name']?></div>
                    <div class="col-sm-12">
                        <img class="col-sm-6 blah " src="../images/team/<?php echo $value['logo'] ?>">
                        <div class="col-sm-6 seting-team" style="padding-left: 100px">
                            <div class="col-sm-12 btn-1"><button class="btn btn-info btn-1 color">Show User</button></div>
                            <div class="col-sm-12 btn-1 "><button class="btn btn-info btn-1 color">Add New </button></div>
                            <div class="col-sm-12 btn-1 a<?php echo $value['id']?>">
                                <button class="btn btn-info btn-1">Description</button>
                                <div class="content-data-show" style="width: 400px" id="content-data-show<?php echo $value['id']?>">
                                    <p class="description-edit" ><?php echo $value['description']?></p>
                                </div>
                            </div>
                            <div class="" style="float: right">
                                <div class="col-sm-6 "><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></div>
                                <div class="col-sm-6 "><button class="btn btn-danger" ><i class="fa fa-trash"></i></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 closeeeee closeeeee<?php echo $value['id']?>" style="position: absolute;top:20px;right: 25px"><i class="fa fa-close "></i></div>
                </div>
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
<script>
    $(document).ready(function(){
        $(".a<?php echo $value['id']?>").click(function(){
            $("#content-data-show<?php echo $value['id']?>").show(300);
            $(".closeeeee<?php echo $value['id']?>").show(300);
        });

        $(".closeeeee<?php echo $value['id']?>").click(function(){
            $("#content-data-show<?php echo $value['id']?>").hide(300);
            $(this).hide(300);
        });

    });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
<script>
    $(document).ready(function(){
        $(".name-edit").keyup(function(){
            var a = $(this).val();
            $(".nameee").text( a );
        });
        $(".description-input-edit").keyup(function(){
            var b = $(this).val();
            $(".description-edit").text( b );
        });
    });
</script>
<script >

// validate form
    $( document ).ready(function() {
        $('input[name="name-team"]').blur(function () {
            var text = $(this).val();
            if(text == 0 ) {
                $('#error-name-team').html('Hãy nhập tên team');
                $('#btn-request').prop('disabled' , true);
            }
            else
            {
                $('#error-name-team').html('');
                $('#btn-request').prop('disabled' , false);
            }
        });

        $('input[name="description"]').blur(function () {
            var text = $(this).val();
            if(text == 0 ) {
                $('#error-description').html('Hãy nhập miêu t');
                $('#btn-request').prop('disabled' , true);
            }
            else
            {
                $('#error-description').html('');
                $('#btn-request').prop('disabled' , false);
            }
        });



    });
</script>
