<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chỉnh sửa thông tin nhân viên</title>
	<link rel="stylesheet" href="{{ asset('mylaravel/public/qlnvVinsofts_style/insert-style.css') }}">	
</head>
<body>
	<header>
		<a href="index.php"><img src="{{ asset('mylaravel/public/logos-qlnv/social_square.png') }}" width="20%"></a><img src="{{ asset ('mylaravel/public/logos-qlnv/php_banner.jpg') }}" width="80%">
	</header>
	<div>
		<h1 id = "tittle">Chỉnh sửa thông tin nhân viên</h1>
	</div>
	 <form action="" method="POST">
	 	<input name="_token" type="hidden" value="{{ csrf_token() }}" />
		<fieldset>
			<legend style="text-shadow: 2px 2px white;">User Profile</legend>
			<span>@include('QuanlynhanvienVinsofts.blocks.error')</span>
			<table>
				<tr>
					<td><label>Họ Tên</label></td>
					<td>
						<!-- Nếu tồn tại và có số lượng lớn hơn 0 của $edit_user->hoten -->
						<input type="text" name="refullname" value="{{ (isset($edit_user->hoten) && count($edit_user->hoten) ? $edit_user->hoten : null )}}">
					</td>
				</tr>
				<tr>
					<td><label>Ngày Sinh</label></td>
					<td>
						<input type="date" name="rebirthdate" value="{{ (isset($edit_user->ngaysinh) && count($edit_user->ngaysinh) ? $edit_user->ngaysinh : null )}}">
					</td>
				</tr>
				<tr>
					<td><label>E-mail</label></td>
					<td>
						<input type="email" name="reemail" value="{{ (isset($edit_user->email) && count($edit_user->email) ? $edit_user->email : null )}}">
					</td>
				</tr>
				<tr>
					<td><label>Địa chỉ</label></td>
					<td>
						<input type="text" name="readdress" value="{{ (isset($edit_user->diachi) && count($edit_user->diachi) ? $edit_user->diachi : null )}}">
					</td>
				</tr>
				<tr>
					<td><label>Số điện thoại</label></td>
					<td>
						<input type="number" name="rephone" value="{{ (isset($edit_user->phone) && count($edit_user->phone) ? $edit_user->phone : null )}}">
					</td>
				</tr>
                <tr>
                	<td><label>Giới tính</label></td>
                	<td>
                		<label>Nam</label><input type="radio" name="regender" value="{{ (isset($edit_user->gioitinh) && count($edit_user->gioitinh) ? $edit_user->gioitinh : null)}}">
                		<label>Nữ</label><input type="radio" name="regender" value="{{ (isset($edit_user->gioitinh) && count($edit_user->gioitinh) ? $edit_user->gioitinh : null)}}">
                	</td>
                </tr>
                <tr>
                	<td colspan="2" id="submit">
                		<input type="submit" name="submit" value="Edit">
                	</td>
                </tr>
			</table>
		</fieldset>
	</form>
	<div>&nbsp;</div>
	<div>
		<style type="text/css">
			#back:hover {
				color: black;
			}
			a {
				text-decoration: none;
			}

		</style>
		<a href="qlnv" id="back">Quay lại trang chủ</a>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="{{ asset('mylaravel/public/js/myscript.js') }}"></script>
</body>
</html>