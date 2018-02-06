<?php 

class M_NhanSu{
	public $conn;

	public function connect(){
		$this->conn=mysqli_connect('localhost','root','','quanlynhanvien');
		mysqli_set_charset($this->conn,'utf8');

	}

	function get_database(){
		$this->connect();
		$sql = 'select * from nhanvien' ;
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

		function addNhanVien($HoTen,$MaPB,$ChucVu,$GioiTinh,$Birth,$DiaChi,$Phone){
			$this->connect();
			$sql = "INSERT INTO nhanvien values ('$HoTen', null,'$MaPB','$ChucVu','$GioiTinh','$Birth','$DiaChi','$Phone')";
			mysqli_query($this->conn, $sql);
		
	}

			// lấy mã nhân viên
			public function getNhanVienById($manv){
			$this->connect();
			$sql = "select * from nhanvien WHERE MaNV='$manv'";
			$query = mysqli_query($this->conn, $sql);
			return $query;
	}
			
			function editNhanVien($hoten, $manv, $mapb,$chucvu,$gioitinh,$birth,$diachi,$phone){
			$this->connect();
			$sql 	= "UPDATE nhanvien SET HoTen='$hoten', MaPB='$mapb', ChucVu='$chucvu', GioiTinh='$gioitinh', Birth='$birth', DiaChi='$diachi', Phone='$phone' WHERE MaNV='$manv'" ;
			
			mysqli_query($this->conn, $sql);
	}
}
 ?>