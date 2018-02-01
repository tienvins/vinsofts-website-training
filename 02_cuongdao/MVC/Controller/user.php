<?php
switch($_GET['act']){
	case 'list': include_once('controller/edit.php');
	break;
	case 'add': include_once('controller/themnhanvien.php');
	break;
	case 'edit': include_once('controller/select_id.php');
	break;
	case 'update': include_once('controller/update.php');
	break;
	case 'delete': include_once('controller/xoanhanvien.php');
	break;
}
?>


