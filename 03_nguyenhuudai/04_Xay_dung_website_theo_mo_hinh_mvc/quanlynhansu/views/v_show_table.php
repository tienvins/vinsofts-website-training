<?php
	foreach ($tt as $key) {
        ?>
        <tbody>
            <tr class="even pointer">
                <td align="center" class=" "><?php echo $key->MaNV; ?></td>
                <td class=" "><?php echo $key->TenNV ?></td>
                <td class=" "><?php echo $key->NgaySinh ?></td>
                <td class=" "><?php echo $key->QueQuan ?></td>
                <td class=" "><?php echo $key->GioiTinh ?></td>
                <td class=" "><?php echo $key->SDT ?></td>
                <td class=" "><?php echo $key->MaPB ?></td>
                <td class=" "><img src="public/images/<?php echo $key->Hinh ?>" alt="..." class="img-circle" width="128px" height="128px"></td>
                <td class=" last"><a href='suanhanvien.php?MaNV=<?php echo $key->MaNV ?>'>Sửa</a>
                <td class=" last"><a href='xoanhanvien.php?MaNV=<?php echo $key->MaNV ?>'>Xóa</a>
                </td>
            </tr>
        </tbody>
    <?php
    }		
?>