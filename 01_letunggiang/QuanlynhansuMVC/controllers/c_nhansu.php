<?php 
require_once('models/m_nhansu.php');
	
	class C_NhanSu{
		//gọi model và view lấy danh sách nhân sự cho trang index form
		 public function getFormNhansu(){
		 	$this->model = new M_NhanSu();
		 	$getNS = $this->model->get_all_nhansu();
		 	require_once 'views/show_danhsach.php';
		}
		//gọi model và view lấy danh sách nhân sự cho trang show_table
		 function getTableNhansu(){
		 	$this->model = new M_NhanSu();
		 	$getNS = $this->model->get_all_nhansu();
		 	require_once 'views/show_table.php';
		}
		//gọi hàm lấy nhân sự theo id
		function getIdNhansu($id){
			$this->model = new M_NhanSu();
<<<<<<< HEAD
			return $model->get_nhansu($id);
=======
			return $this->model->get_id_nhansu($id);
>>>>>>> 7fa5930bffe1b5923008c70a3eb374cdeb604dbc
		}
		// //gọi hàm thêm nhân sự
		function getAddNhansu($name, $address, $phonenumber){
			$model = new M_NhanSu();
			return $model->add_nhansu($name, $address, $phonenumber);
		}
		//gọi hàm sửa nhân sự
<<<<<<< HEAD
		function getEditNhansu($name, $address, $phonenumber){
			$this->model = new M_NhanSu();
			return $model->edit_nhansu($name, $address, $phonenumber);
=======
		function getEditNhansu($id, $name, $address, $phonenumber){
			$model = new M_NhanSu();
			$model->edit_nhansu($id, $name, $address, $phonenumber);
>>>>>>> 7fa5930bffe1b5923008c70a3eb374cdeb604dbc
		}
		// //gọi hàm xóa nhân sự
		function deleteNhansu($id){
			$model = new M_NhanSu();
			$getNS = $model ->delete_nhansu($id);
			// require_once('views/show_table');
		}



	}
 ?>