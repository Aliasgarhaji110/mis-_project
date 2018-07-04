<?php  
	require_once '../db_connect.php';

	if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@somaiya.edu$/",$_POST['stu_email'])) echo $msg = "Please enter valid email";
	else if (!preg_match("/^[a-zA-Z1-9][a-zA-Z0-9]{6,15}$/",$_POST['stu_password'])) echo $msg = "Invalid password";
	else{
		$cre_res=mysqli_query($conn,"select * from students where stu_email='".$_POST['stu_email']."'") or die(mysqli_error($conn));
		if($cre_res->num_rows>0){
			$cre_ans=mysqli_fetch_assoc($cre_res);
			// print_r($cre_ans);

			if($cre_ans['stu_password']==sha1($_POST['stu_password'])){
				$_SESSION['user_name']=$cre_ans['stu_fname'];
				$_SESSION['user_full_name']=$cre_ans['stu_fname']." ".$cre_ans['stu_mname']." ".$cre_ans['stu_lname'];
				$_SESSION['user_id']=$cre_ans['stu_id'];
				$_SESSION['user_branch']=$cre_ans['stu_branch'];
				$_SESSION['user_division']=$cre_ans['stu_division'];
				$_SESSION['user_img_path']="actions/".$cre_ans['stu_img_path'];
				$_SESSION['user_status']=$cre_ans['stu_status'];
				$_SESSION['user_year_of_joining']=$cre_ans['stu_year_of_joining'];

				// print_r($_SESSION);

				header("location:../index.php");
			}
		}
		else{
			echo("Invalid Password or Email-id");
		}

	}
?>

