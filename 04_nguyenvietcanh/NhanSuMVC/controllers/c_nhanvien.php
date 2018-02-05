<?php 
	require ('models/m_nhansu.php');
	class c_nhanvien{
		function get_models(){
			$models = new M_NhanSu();
			$getnhansu = $models->get_database();
			//print_r($getnhansu);
			 require ('views/list.php');
		}

		function addNhanVien($HoTen,$MaPB,$ChucVu,$GioiTinh,$Birth,$DiaChi,$Phone){
			$nhanvien = new M_NhanSu();
			$themnhanvien = $nhanvien->addnhanvien($HoTen, $MaPB, $ChucVu, $GioiTinh, $Birth, $DiaChi, $Phone);
		}

		public function getNhanVienById($manv){
		$nhanvien 	= new M_NhanSu();
		return $nhanvien->getNhanVienById($manv);
	}

	//Gọi gàm sửa nhân viên
		function editNhanVien($hoten, $mapb,$chucvu,$gioitinh,$birth,$diachi,$phone){
			$nhanvien 	= new M_NhanSien();
			$edit 		= $nhanvien->editNhanVien($hoten, $mapb,$chucvu,$gioitinh,$birth,$diachi,$phone);



 ?>