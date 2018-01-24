<?php
	require_once("database.php");
	class Model extends database{
		public function getDanhSachNhanVien(){
			$sql="Select*From db22_nhanvien";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}

		function addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$sql="Insert Into db22_nhanvien(TenNV, NgaySinh, QueQuan, GioiTinh, SDT, MaPB, Hinh) Values ($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh))";
			$_dbh->exec($sql);
			}
	}
?>