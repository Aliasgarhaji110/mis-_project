<?php  
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_id']);
	unset($_SESSION['user_img_path']);
	session_destroy();
	header("location:index.php");

?>