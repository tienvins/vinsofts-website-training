   while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)):?>
                        <tr>
                
                          <td><?php echo  $row['hoten'];?></td>
                          <td><?php echo  $row['ngaysinh'];?></td>
                          <td><?php echo  $row['quequan'];?></td>
                          <td><?php echo  $row['diachi'];?></td>
                          <td><a href="edit_nhanvien.php?id=">Edit</a></td>
                          <td> <a href="delete.php?id=<?php echo $row['id'];?> ">Delete</a></td>
                         
                        </tr>
                  <?php endwhile; ?>