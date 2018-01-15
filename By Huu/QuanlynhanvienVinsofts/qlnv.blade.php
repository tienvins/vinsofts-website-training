<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách nhân viên</title>
	<link rel="stylesheet" href="{{ asset('mylaravel/public/qlnvVinsofts_style/index-style.css') }}">
</head>
<body>
	<header>
		<a href="qlnv"><img src="{{ asset('mylaravel/public/logos-qlnv/social_square.png') }}" width="20%"></a><img src="{{ asset('mylaravel/public/logos-qlnv/php_banner.jpg') }}" width="80%" >
		<form action="" method="">
        </form>
        <a href="insert"><input type="button" value="Insert" class="button"></a>
	</header>
	<div id="tittle">Danh sách nhân viên công ty Vinsoft</div>
     
<div>
	@include('QuanlynhanvienVinsofts.blocks.flash')
	<table>
		<tr>
			<th class='field'>Họ Tên</th>
			<th class='field'>Ngày Sinh</th>
			<th class='field'>E-mail</th>
			<th class='field'>Địa Chỉ</th>
			<th class='field'>Số Điện Thoại</th>
			<th class='field'>Giới Tính</th>
			<th class='field'>Chỉnh Sửa</th>
			<th class='field'>Xóa</th>
		</tr>
		@foreach ($data as $value) 
		<tr>
			<td>{!! $value['hoten'] !!}</td>
			<td>{!! $value['ngaysinh'] !!}</td>
			<td>{!! $value['email'] !!}</td>
			<td>{!! $value['diachi'] !!}</td>
			<td>{!! $value['phone'] !!}</td>
			@if($value['gioitinh']==0)
				<td>Nam</td>
			@else 
				<td>Nữ</td>
			@endif	    
			<td><a href="{!! route('getEdit', ['id' => $value['id']]) !!}"><img src="{{ asset ('mylaravel/public/logos-qlnv/tag_blue_edit.png') }}"></a></td>
			<td><a href="{!! route('getqlnvdel', ['id' => $value['id']]) !!}" onclick='return myFunction();'><img src="{{ asset ('mylaravel/public/logos-qlnv/tag_yellow_delete2.png') }}"></a></td>
		</tr>
		@endforeach
	</table>
</div>
	<script>		
		function myFunction() {
		        return confirm('Bạn có chắc chắn xóa?'); //Truy vấn có chắc chắn xóa hay không	
        }
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="{{ asset('mylaravel/public/js/myscript.js') }}"></script>
</body>
</html>