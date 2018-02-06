<?php 
	require ('models/m_nhansu.php');
	class c_nhanvien{
		function get_models(){
			$models = new M_NhanSu();
			$getnhansu = $models->get_database();
			//print_r($getnhansu);
			 require ('views/list.php');
		}

		// hàm thêm nhân viên
		function addNhanVien($HoTen,$MaPB,$ChucVu,$GioiTinh,$Birth,$DiaChi,$Phone){
			$nhanvien = new M_NhanSu();
			$themnhanvien = $nhanvien->addnhanvien($HoTen, $MaPB, $ChucVu, $GioiTinh, $Birth, $DiaChi, $Phone);
		}
		//Gọi hàm lấy nhân viên theo mã nhân viên
		public function getNhanVienById($manv){
		$nhanvien 	= new M_NhanSu();
		$nhanvienid=$nhanvien->getNhanVienById($manv);
		//print_r($nhanvien);
		return $nhanvienid;	
		}

		//Gọi gàm sửa nhân viên
		function editNhanVien($hoten, $manv, $mapb,$chucvu,$gioitinh,$birth,$diachi,$phone){
		$nhanvien 	= new M_NhanSu();
		$edit 		= $nhanvien->editNhanVien($hoten, $manv, $mapb,$chucvu,$gioitinh,$birth,$diachi,$phone);
		}
}
 ?>