<?php  
	require_once '../db_connect.php';

	if (empty($_POST['act_name'])) echo $msg = "enter valid Name";
	else{
		$cre_res=mysqli_query($conn,"select * from edit_activity where edit_act_name='".$_POST['act_name']."'") or die(mysqli_error($conn));
		if($cre_res->num_rows>0){
			// $cre_ans=mysqli_fetch_assoc($cre_res);
			// print_r($cre_ans);
			echo("entry already exists");
		}
		else{
			$ent=mysqli_query($conn,"insert into edit_activity('edit_act_name') values('".$_POST['act_name
				']."')") or die(mysqli_error($conn));
			if($ent){
				echo("ok");
			}
		}
		

	}
?>

