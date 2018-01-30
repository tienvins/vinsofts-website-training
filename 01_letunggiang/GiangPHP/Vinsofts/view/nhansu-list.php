<?php
 require 'models/database.php';
$employ = get_all_employ();
disconnect_db();

    foreach ($employ as $item){ ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['address']; ?></td>
                <td><?php echo $item['phonenumber']; ?></td>
                <td>
                    <form method="post" action="contacts-delete.php">
                        <input onclick="window.location = 'contacts-list.php?id=<?php echo $item['id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php }
?>
