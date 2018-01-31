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
		function getIdNhansu(){
			$this->model = new M_NhanSu();
			return $model->get_nhansu();
		}
		// //gọi hàm thêm nhân sự
		function addNhansu($name, $address, $phonenumber){
			$this->model = new M_NhanSu();
			$getNS = $model->add_nhansu($name, $address, $phonenumber);
			// require_once 'views/show_table.php';
		}
		// //gọi hàm sửa nhân sự
		// function editNhansu($id, $name, $address, $phonenumber){
		// 	$this->model = new M_NhanSu();
		// 	$getNS = $model->edit_nhansu($id, $name, $address, $phonenumber);
		// }
		// //gọi hàm xóa nhân sự
		// function deleteNhansu($id, $name, $address, $phonenumber){
		// 	$this->model = new M_NhanSu();
		// 	$getNS = $model ->delete_nhansu($id, $name, $address, $phonenumber);
		// }



	}
 ?>