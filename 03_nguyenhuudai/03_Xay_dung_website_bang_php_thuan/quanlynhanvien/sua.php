<?php
	include 'models/connect.php';
	$id=$_GET['MaNV'];
	if(!$id){
		header('Location:error-403.php');
	}
	else{
	$sql="Select * From db22_nhanvien where MaNV = $id";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);}
		# code...
		?>
			<form method="post" action="" enctype="multipart/form-data">
			<label>Mã nhân viên:</label>
	        <input type="text" name="manv" readonly="readonly" value="<?php echo @$row['MaNV'] ?>"> <br/>
	    	<label>Họ và tên:</label>
	        <input type="text" name="name" value="<?php echo @$row['TenNV'] ?>"> <br/>
	        <label>Ngày sinh:</label>
	        <input type="date" name="birthday" value="<?php echo @$row['NgaySinh'] ?>"> <br/>
	        <label>Quê quán:</label>
	        <input type="text" name="address" value="<?php echo @$row['QueQuan'] ?>"> <br>
	        <label>Giới tính:</label>
	        <input type="radio" name="gender" value="Nam">
	        <input type="radio" name="gender" value="Nữ"><br>
	        <label>Số điện thoại:</label>
	        <input type="text" name="phone" value="<?php echo @$row['SDT'] ?>"><br>
	        <label>Mã phòng ban:</label>
	        <input type="number" name="mapb" min="1" max="10" value="<?php echo @$row['MaPB'] ?>"><br>
	        <label>Hình ảnh:</label>
	        <input type="file" name="hinhanh"><br>
	        <input type="submit" name="add" value="Thêm mới"><input type="reset" name="reset" value="Hủy">
    	</form>
    <?php

?>