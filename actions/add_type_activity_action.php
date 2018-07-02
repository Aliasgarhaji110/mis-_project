<?php  
	require_once '../db_connect.php';

	if (empty($_POST['add_type_act_name'])) echo $msg = "Enter valid Name";
	else if (empty($_POST['add_type_main_act_id'])) echo $msg = "Please select activity";

	else{
		$name=$_POST['add_type_act_name'];
		$id=$_POST['add_type_main_act_id'];

		$cre_res=mysqli_query($conn,"select * from add_type_activity where add_type_act_name='$name'") or die(mysqli_error($conn));
		if($cre_res->num_rows>0){
			// $cre_ans=mysqli_fetch_assoc($cre_res);
			// print_r($cre_ans);
			echo("entry already exists");
		}
		else{
			$str="insert into add_type_activity(add_type_act_name,add_type_main_act_id) values('$name','$id')";
			// echo($str);
			$ent=mysqli_query($conn,$str);
			if($ent){
				echo("ok");
			}
			// echo("arg1");
		}
	}
?>

