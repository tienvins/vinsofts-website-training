<?php 

while ($item = mysqli_fetch_assoc($getNS)){
  ?>
  <tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['name']; ?></td>
    <td><?php echo $item['address']; ?></td>
    <td><?php echo $item['phonenumber']; ?></td>
    <td class=" Sua"><a href='suanhansu.php?id=<?php echo $item['id'] ?>'>Sửa</a></td>
    <td class=" Xoa" ><a href='xoanhansu.php?id=<?php echo $item['id'] ?>'>Xóa</a></td>
    	<!-- <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete"/></td> -->
</tr>
<?php }
?>
