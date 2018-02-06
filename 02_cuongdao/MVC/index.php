
<?php
include'library/connect.php';
switch ($_GET['controller']) {
case 'user': include 'Controller/user.php';
		
	break;
case 'product': include 'Controller/product.php';
		
	break;	
	
	
}
?>
