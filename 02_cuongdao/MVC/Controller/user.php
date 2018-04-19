<?php
switch($_GET['act']){
	case 'list': include_once('controller/ctrl_list.php');
	break;
	case 'add': include_once('controller/ctrl_themnhanvien.php');
	break;
	case 'edit': include_once('controller/ctrl_select_id.php');
	break;
	case 'update': include_once('controller/ctrl_update.php');
	break;
	case 'delete': include_once('controller/ctrl_xoanhanvien.php');
	break;
}
?>


