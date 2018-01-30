<?php
	foreach ($tt as $key) {
        ?>
        <tbody>
            <tr class="even pointer">
                <td class="a-center ">
                  <input type="checkbox" class="flat" name="table_records">
                </td>
                <td class=" "><?php echo $key->MaNV; ?></td>
                <td class=" "><?php echo $key->TenNV ?></td>
                <td class=" "><?php echo $key->NgaySinh ?></td>
                <td class=" "><?php echo $key->QueQuan ?></td>
                <td class=" "><?php echo $key->GioiTinh ?></td>
                <td class=" "><?php echo $key->SDT ?></td>
                <td class=" "><?php echo $key->MaPB ?></td>
                <td class=" "><img src="public/images/<?php echo $key->Hinh ?>" alt="..." class="img-circle" width="128px" height="128px"></td>
                <td class=" last"><a href='sua.php?MaNV=<?php echo $key->MaNV ?>'>Sửa</a>
                <td class=" last"><a href='xoa.php?MaNV=<?php echo $key->MaNV ?>'>Xóa</a>
                </td>
            </tr>
        </tbody>
    <?php
    }		
?>