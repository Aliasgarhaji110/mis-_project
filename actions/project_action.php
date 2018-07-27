<?php  
	require_once '../db_connect.php';

	$s_date=strtotime($_POST['project_start_date']);
	$e_date=strtotime($_POST['project_end_date']);

	if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect student id");
	else if ($_POST['project_start_date']== NULL) echo $msg ="Select Start Date";
	else if (($e_date== NULL)||($s_date>$e_date)) echo $msg ="Select Proper End Date";

	else{
		$sdate=$_POST['project_start_date'];
		$edate=$_POST['project_end_date'];
		
		if(empty($_FILES['project_abstract']['name'])) echo "Abstract not Uploaded";
		if(empty($_FILES['project_report']['name'])) echo "Report not uploaded";
		else if($_FILES['project_abstract']['size']>1024*1024) echo "file size exceeded";
		else if($_FILES['project_report']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("application/pdf");//mime file types
			if((in_array($_FILES['project_abstract']['type'], $arr))&&(in_array($_FILES['project_report']['type'], $arr))){
				
				$tmp=$_FILES['project_report']['tmp_name'];
				$path="docs/project/".time()."_".$_SESSION['user_id']."_report_".$_FILES['project_report']['name'];
				$tmp1=$_FILES['project_abstract']['tmp_name'];
				$path1="docs/project/".time()."_".$_SESSION['user_id']."_abstract_".$_FILES['project_abstract']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				$file_upload=move_uploaded_file($tmp1, $path1);
				if($file_upload){
					
					$str_up="Insert into cultural_council(project_stu_id,project_start_date,project_end_date,project_tile,project_description,project_abstract_path,project_report_path,project_stu_current_year)values('".$_POST['stu_id']."','$sdate','$edate','".$_POST['project_title']."','".$_POST['project_description']."','$path1','path','".$_POST['stu_year']."')";
					$ans=mysqli_query($conn,$str_up)or die(mysqli_error($conn));
					if($ans){
						echo("data entered");
						// header("location:../login.php");s
					}

				}
				
			}
			else{
				echo("error in file upload");
			}
		}
		
	}
?>