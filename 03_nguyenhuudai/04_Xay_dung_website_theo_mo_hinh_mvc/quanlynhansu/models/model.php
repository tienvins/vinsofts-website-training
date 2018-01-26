<?php
	require_once("database.php");
	class Model extends database{
		public function getDanhSachNhanVien(){
			$sql="Select*From db22_nhanvien";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}

		function addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$sql="Insert into db22_nhanvien values (null, '$tennv', '$ngaysinh', '$quequan', '$gioitinh', '$sdt', '$mapb', '$hinh')";
			$this->setQuery($sql);
			$result=$this->execute(array($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh));
		}

		public function getNhanVienById($manv){
			$sql="Select*From db22_nhanvien Where MaNV='$manv'";
			$this->setQuery($sql);
			return $this->loadRow(array($manv));
		}

		function editNhanVien($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$sql="Update db22_nhanvien SET TenNV='$tennv', NgaySinh='$ngaysinh', QueQuan='$diachi', GioiTinh='$gioitinh', SDT='$sdt', MaPB='$mapb', Hinh='$duongdan' Where MaNV='$manv'";
			$this->setQuery($sql);
			$result=$this->execute(array($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh));
		}
	}
?>