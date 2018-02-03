<?php
	require_once "models/m_nhanvien.php";
	class C_NhanVien
	{
		//Gọi Model và Views lấy danh sách nhân viên cho trang index
		public function getDSNV() {
			$nhanvien 	= new M_NhanVien();
			$get 		= $nhanvien->getDanhSachNhanVien();
			require_once "views/v_show_form.php";
		}

		//Gọi Model và Views lấy danh sách nhân viên cho trang quản lý
		public function getQuanLyNhanVien() {
			$nhanvien 	= new M_NhanVien();
			$get 		= $nhanvien->getDanhSachNhanVien();
			require_once "views/v_show_table.php";
		}

		//Gọi hàm thêm nhân viên
		function addNhanVien($tennv, $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh) {
			$nhanvien 	= new M_NhanVien();
			$nhanvien->addNhanVien($tennv, $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh);
		}
		
		//Gọi hàm lấy nhân viên theo mã nhân viên
		public function getNhanVienById($manv) {
			$nhanvien 	= new M_NhanVien();
			return $nhanvien->getNhanVienById($manv);
		}

		//Gọi gàm sửa nhân viên
		function editNhanVien($manv, $tennv, $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh) {
			$nhanvien 	= new M_NhanVien();
			$nhanvien->editNhanVien($manv, $tennv, $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh);
		}

		//Gọi hàm xóa nhân viên
		function deleteNhanVien($manv) {
			$nhanvien 	= new M_NhanVien();
			$nhanvien->deleteNhanVien($manv);
		}

		//Gọi hàm lấy danh sách phòng ban
		public function getPhongBan(){
			$nhanvien 	= new M_NhanVien();
			return $nhanvien->getPhongBan();
		}
	}
?>