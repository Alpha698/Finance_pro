<?php 

require "class_base.php";
unset ($_SESSION['logged_user']);
 unset($_SESSION['info']);

	header("Location: /");
	
?>