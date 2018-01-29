<?php
switch($_GET['act']){
	case 'list': include_once('controller/edit.php');
	break;
	case 'edit': include_once('edit.php');
	break;
	case 'delete': include_once('models/select.php');
	break;
	case 'list': include_once('edit.php');
	break;
}
?>


