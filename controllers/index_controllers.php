<?php
session_start();
require_once '../model/index_model.php';
require_once '../libs/ajax.php';
require_once '../libs/functions.php';
class IndexControllers {
    public $index_model;

    public function __construct() {
        $this->index_model = new IndexModel();
    }

    public function IndexUser() {
        $data = $this->index_model->index();
        require_once '../view/index.php';
    }

    public function DeleteAction($data) {
        $this->index_model->DeleteControllers($data);
        $data = $this->index_model->index();
        require_once '../view/index.php';
    }
    public function EditAction($data) {
//        var_dump($data);die;
        $data = $this->index_model->EditControllers($data);
//        var_dump($data);die;
        require_once '../view/edit.php';
    }
    public function SearchUserAction($search) {
            $_SESSION['search'] = $search['search'];
//        var_dump($search['search']);die;
        $data = $this->index_model->searchByName($search['search']);
        require_once '../view/index.php';
    }
    public function listAction() {
       echo "hung";
    }
    public function ListUserAction($data) {
        $data = $this->index_model->index();
        require_once '../view/index.php';
    }
    public function AddNewAction() {
        require_once '../view/addnew.php';
    }

    public function CreateAction($data) {

        $_SESSION['file'] = $_FILES;
        $error ='';
        $error = checkInput($data);
        $error2 = checkUpdateImage($data,$_FILES);

        if($error == '') {
               if($error2 != ''){
                   $_SESSION['input'] = $data;
//                   var_dump($error);die;
//            var_dump($_SESSION['input']);die;
                   require_once '../view/r.php';
               }
               if($error2 == '')
               {
                       $upload = UploadImage($_FILES);
                       if ($upload ==1) {
                           $this->index_model->insertUser($data, $_FILES);
                           $data = $this->index_model->index();
                           require_once '../view/index.php';

                   }
               }

        }
        else {
            $_SESSION['input'] = $data;
            $_SESSION['image'] = $_FILES;
//            var_dump( $_SESSION['image']['name']);die;

//            var_dump($_SESSION['input']);die;
            require_once '../view/r.php';
        }


    }

    public function UpdateAction($data) {
//        var_dump($data);die;
//        $_SESSION['file'] = $_FILES;
        $error ='';
        $error = checkUpdate($data);
//        var_dump($error);die;
        $error2 = checkUpdateImage($data,$_FILES);

        if($error == '') {
            if($error2 != ''){
                echo "Trùng tên ảnh";
            }
            if($error2 == '')
            {
                if($_FILES['fileToUpload']['name'] == '') {
//                    var_dump($data);die;
                    $this->index_model->UpdateUserModel($data);

                    $data = $this->index_model->index();
                    require_once '../view/index.php';
                }
                else {
                    $upload = UploadImage($_FILES);
                    if ($upload ==1) {
                        $this->index_model->UpdateUserModel2($data, $_FILES);
                        $data = $this->index_model->index();
                        require_once '../view/index.php';
                    }
                }
            }

        }
        else {
//            var_dump($error);die;
            $_SESSION['input'] = $data;
//            var_dump($_SESSION['image']);die;
            require_once '../view/errorUpdate.php';
        }
    }

}

$admin = new IndexControllers();

if(isset($_REQUEST['action'])){
    $_SESSION['ctr_name'] = $admin->index_model;
    $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
}else{
    $action = 'index';
}

switch ($action){
    case 'index';
        $admin->IndexUser();
        break;
    case 'addnew';
        $admin->AddNewAction();
        break;
    case 'list';
        $admin->ListUserAction($_REQUEST);
        break;
    case 'create';
        $admin->CreateAction($_REQUEST);
        break;
    case 'delete';
        $admin->DeleteAction($_REQUEST);
        break;
    case 'edit';
        $admin->EditAction($_REQUEST);
        break;
    case 'search';
        $admin->SearchUserAction($_REQUEST);
        break;
    case 'update';
        $admin->UpdateAction($_REQUEST);
        break;
    default ;
        $admin->listAction();
        break;
}

?>