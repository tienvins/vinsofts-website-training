<?php include_once '../view/header.php'?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">
              <div class="col-sm-4" style="float: right">
                  <form action="../controllers/index_controllers.php">
                      <input type="hidden" value="search" name="action"/>
                      <input value="" name="search" >
                        <button ><i class="fa fa-search"></i></button>
                  </form>
              </div>

              <div class="row name-menu-tb ">
                  <?php
                        if(count($data) ==0) {
                            echo "<div class='col-sm-12 prd'>Không tìm thấy kết quả !</div>";

                        }

                        else
                        {
                            ?>
                            <div class="col-sm-12 name-menu " >
                                <div class="col-sm-2">id</div>
                                <div class="col-sm-2">Name</div>
                                <div class="col-sm-2">Email</div>
                                <div class="col-sm-2">Phone_number</div>
                                <div class="col-sm-2">Startus</div>
                                <div class="col-sm-2">Edit</div>

                            </div>
                            <?php
                            if(isset($data) || count($data)){
                                foreach ($data as $key =>$value) {
                                    echo "<div class='col-sm-12 list-user'>";
                                    foreach ($value as $key2 =>$value2 ) {
                                        echo '<div class="col-sm-2">'.$value2.'</div>';

                                    }
                                    echo "<div class='col-sm-2'>
                                <a href='?action=edit&id=$value[id]'><button class='bt-e'><i class='fa fa-pencil'></i></button></a>
                                <a href='?action=delete&id=$value[id]'><button class='bt-e'><i class='fa fa-trash'></i></button></a>
                              </div>";
                                    echo "</div>";
                                }
                            }
                            ?>
                            <?php
                        }

                  ?>

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