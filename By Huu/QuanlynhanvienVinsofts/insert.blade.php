<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý nhân viên Công ty Vinsoft</title>
	<link rel="stylesheet" href="{{ asset('mylaravel/public/qlnvVinsofts_style/insert-style.css') }}">
	<!-- <link rel=”stylesheet” href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
	<link rel='stylesheet' href="{{ asset('mylaravel/public/qlnvVinsofts_style/animate.css') }}">
</head>
<body>
	<header>
		<a href="index.php"><img src="{{ asset('mylaravel/public/logos-qlnv/social_square.png') }}" width="20%" class="wow tada" data-wow-duration="3s" data-wow-delay=".4s" data-wow-iteration="1"></a><img src="{{ asset ('mylaravel/public/logos-qlnv/php_banner.jpg') }}" width="80%" class="wow swing" data-wow-duration="2s" data-wow-delay=".4s" data-wow-iteration="1">
	</header>
	<div id = "tittle" class="wow bounceIn
	" data-wow-duration="4s" data-wow-delay=".4s">
		Quản lý nhân viên Vinsoft
	</div>
	<div id="index">
		<div id="left"></div>
		<div id="center">
			<form action="" method="POST">
				<input name="_token" type="hidden" value="{{ csrf_token() }}" />
				<fieldset>
					<legend style="text-shadow: 2px 2px white;" class="wow bounceIn"
	                    data-wow-duration="4s" data-wow-delay=".4s">User Profile</legend>
					<span>@include('QuanlynhanvienVinsofts.blocks.error')</span>
					<table>
						<tr>
							<td><label>Họ Tên</label></td>
							<td>
								<input type="text" name="fullname" value="{!!old('fullname')!!}" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".2s" data-wow-iteration="2">								
							</td>
						</tr>
						<tr>
							<td><label>Ngày Sinh</label></td>
							<td>
								<input type="date" name="birthdate" value="{!!old('birthdate')!!}" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".2s" data-wow-iteration="2">
							</td>
						</tr>
						<tr>
							<td><label>E-mail</label></td>
							<td>
								<input type="email" name="email" value="{!!old('email')!!}" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".2s" data-wow-iteration="2">
							</td>
						</tr>
						<tr>
							<td><label>Địa chỉ</label></td>
							<td>
								<input type="text" name="address" value="{!!old('address')!!}" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".2s" data-wow-iteration="2">
							</td>
						</tr>
						<tr>
							<td><label>Số điện thoại</label></td>
							<td>
								<input type="number" name="phone" value="{!!old('phone')!!}" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".2s" data-wow-iteration="2">
							</td>
						</tr>
		                <tr>
		                	<td><label>Giới tính</label></td>
		                	<td>
		                		<label>Nam</label><input type="radio" name="gender" value="0">
		                		<label>Nữ</label><input type="radio" name="gender" value="1">
		                	</td>
		                </tr>
		                <tr>
		                	<td colspan="2" id="submit">
		                		<input type="submit" name="submit" value="Insert" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".2s" data-wow-iteration="2">
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
	    </div>

	    <div id="right"></div>
	    <div style="clear: both"></div>
    </div>
    <!-- <script src=”https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js”></script> -->
    <script src="{{ asset('mylaravel/public/js/wow.min.js') }}"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="{{ asset('mylaravel/public/js/myscript.js') }}"></script>
</body>
</html>