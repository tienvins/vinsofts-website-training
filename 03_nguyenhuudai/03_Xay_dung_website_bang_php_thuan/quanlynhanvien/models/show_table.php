<?php
	include 'connect.php';
	$query="Select * from db22_nhanvien";
	$result=mysqli_query($conn,$query);
	while ($row=mysqli_fetch_array($result)){
    $manv=$row['MaNV'];
		$tennv=$row['TenNV'];
    $ngaysinh=$row['NgaySinh'];
		$diachi=$row['QueQuan'];
    $gioitinh=$row['GioiTinh'];
		$sdt=$row['SDT'];
    $mapb=$row['MaPB'];
		$hinh=$row['Hinh'];
		?>
		<tbody>
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" "><?php echo $manv; ?></td>
        <td class=" "><?php echo $tennv ?></td>
        <td class=" "><?php echo $ngaysinh ?></td>
        <td class=" "><?php echo $diachi ?></td>
        <td class=" "><?php echo $gioitinh ?></td>
        <td class=" "><?php echo $sdt ?></td>
        <td class=" "><?php echo $mapb ?></td>
        <td class=" "><img src="images/<?php echo $hinh ?>" alt="..." class="img-circle" width="128px" height="128px"></td>
        <td class=" last"><a href='sua.php?MaNV=<?=$manv ?>'>Sửa</a>
        <td class=" last"><a href='xoa.php?MaNV=<?=$manv ?>'>Xóa</a>
        </td>
      </tr>
    </tbody>
		<?php
	}
?>