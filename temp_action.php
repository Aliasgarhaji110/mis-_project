<?php  
    require_once '../db_connect.php';

    if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect id");
	// else if (!preg_match("/^[a-zA-Z1-9][a-zA-Z0-9]{6,15}$/",$_POST['stu_password'])) echo $msg = "Please enter valid password";
	
    else{
        $stuid=$_POST['stu_id'];
        // $password=sha1($_POST['stu_password']);

        echo("ok");
    }
?>