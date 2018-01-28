<?php
require 'lib/nhanvien.php';
$students = get_all_nhanvien();
disconnect_db();
?>
   <?php foreach ($students as $item){ ?>
                        <tr>
                
                          <td><?php echo  $item['hoten'];?></td>
                          <td><?php echo  $item['ngaysinh'];?></td>
                          <td><?php echo  $item['quequan'];?></td>
                          <td><?php echo  $item['diachi'];?></td>
                          <td><a href="">Edit</a></td>
                          <td><a href="">Delete</a></td>
                         
                        </tr>
                        <?php } ?>