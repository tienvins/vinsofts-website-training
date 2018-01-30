<?php
	require_once("database.php");
	class Model extends database{
		//Hàm lấy danh sách nhân viên
		public function getDanhSachNhanVien(){
			$sql="Select*From db22_nhanvien";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}

		//Hàm thêm nhân viên
		function addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$sql="Insert into db22_nhanvien values (null, '$tennv', '$ngaysinh', '$quequan', '$gioitinh', '$sdt', '$mapb', '$hinh')";
			$this->setQuery($sql);
			$result=$this->execute(array($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh));
		}

		//Hàm lấy nhân viên theo mã nhân viên
		public function getNhanVienById($manv){
			$sql="Select*From db22_nhanvien Where MaNV='$manv'";
			$this->setQuery($sql);
			return $this->loadRow(array($manv));
		}

		//Hàm sửa nhân viên
		function editNhanVien($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$sql="Update db22_nhanvien SET TenNV='$tennv', NgaySinh='$ngaysinh', QueQuan='$quequan', GioiTinh='$gioitinh', SDT='$sdt', MaPB='$mapb', Hinh='$hinh' Where MaNV='$manv'";
			$this->setQuery($sql);
			$result=$this->execute(array($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh));
		}

		//Hàm xóa nhân viên
		function deleteNhanVien($manv){
			$sql="Delete From db22_nhanvien where MaNV='$manv'";
			$this->setQuery($sql);
			$result=$this->execute(array($manv));
		}

		//Hàm lấy danh sách phòng ban
		public function getPhongBan(){
			$sql="Select*From db22_phongban";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
?>