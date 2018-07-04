<?php  
	require_once '../db_connect.php';

	$s_date=strtotime($_POST['internship_start_date']);
	$e_date=strtotime($_POST['internship_end_date']);

	if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect student id");
	else if ($_POST['internship_start_date']== NULL) echo $msg ="Select Start Date";
	else if (($e_date== NULL)||($s_date>$e_date)) echo $msg ="Select Proper End Date";
	else if ($_POST['internship_duration']== NULL) echo $msg ="Select no of days";

	else{
		$sdate=$_POST['internship_start_date'];
		$edate=$_POST['internship_end_date'];
		
		if(empty($_FILES['internship_lor']['name'])) echo "Please select a Image";
		else if($_FILES['internship_lor']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("application/pdf");//mime file types
			if(in_array($_FILES['internship_lor']['type'], $arr)){
				
				$tmp=$_FILES['internship_lor']['tmp_name'];
				$path="docs/"."internship_".$_FILES['internship_lor']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				if($file_upload){
					
					$str_up="Insert into internship(internship_stu_id,internship_start_date,internship_end_date,internship_duration,internship_org,internship_super_name,internship_super_email,internship_super_number,internship_lor_path)values('".$_POST['stu_id']."','$sdate','$edate','".$_POST['internship_duration']."','".$_POST['internship_org']."','".$_POST['internship_super_name']."','".$_POST['internship_super_email']."','".$_POST['internship_super_number']."','$path')";
					$ans=mysqli_query($conn,$str_up)or die(mysqli_error($conn));
					if($ans){
						echo("data entered");
						// header("location:../login.php");
					}

				}
				
			}
			else{
				echo("error in file upload");
			}
		}
		
	}
?>