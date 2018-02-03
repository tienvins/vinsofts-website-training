<?php 

while ($item = mysqli_fetch_assoc($getNS)){
  ?>
  <tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['name']; ?></td>
    <td><?php echo $item['address']; ?></td>
    <td><?php echo $item['phonenumber']; ?></td>
    <td>
        <form method="GET" action="xoanhansu.php">
            <input onclick="window.location = 'suanhansu.php?id=<?php echo $item['id']; ?>'" type="button" value="Sửa"/>
            <button value="<?= $item['id']; ?>" name="id" onclick="return confirm('Press a button!');">xóa</button>
        </form>
    </td>
</tr>
<?php }
?>
