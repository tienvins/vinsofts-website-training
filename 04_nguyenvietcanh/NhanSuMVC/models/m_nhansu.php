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

	public function getNhanVienById($manv){
			$sql 	= "SELECT * From nhanvien Where MaNV='$manv'";
			$this->setQuery($sql);
			return $this->loadRow(array($manv));
	}

			function editNhanVien($hoten, $mapb,$chucvu,$gioitinh,$birth,$diachi,$phone){
			$sql 	= "UPDATE nhanvien SET HoTen='$hoten','', MaPB='$mapb', ChucVu='$chucvu', GioiTinh='$gioitinh', Birth='$birth', DiaChi='$diachi', Phone='$phone'";
			$this->setQuery($sql);
			$result = $this->execute(array($hoten, $mapb,$chucvu,$gioitinh,$birth,$diachi,$phone));
 ?>