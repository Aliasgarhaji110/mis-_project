<?php  
	require_once '../db_connect.php';

	$s_date=strtotime($_POST['internship_start_date']);
	$e_date=strtotime($_POST['internship_end_date']);

	if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect student id");
	else if ($_POST['internship_start_date']== NULL) echo $msg ="Select Start Date";
	else if (($e_date== NULL)||($s_date>$e_date)) echo $msg ="Select Proper End Date";

	else{
		$sdate=$_POST['internship_start_date'];
		$edate=$_POST['internship_end_date'];
		
		if(empty($_FILES['internship_report']['name'])) echo "Report not Uploaded";
		if(empty($_FILES['internship_certificate']['name'])) echo "Certificate not uploaded";
		else if($_FILES['internship_report']['size']>1024*1024) echo "file size exceeded";
		else if($_FILES['internship_certificate']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("application/pdf");//mime file types
			if((in_array($_FILES['internship_certificate']['type'], $arr))&&(in_array($_FILES['internship_report']['type'], $arr))){
				
				$tmp=$_FILES['internship_report']['tmp_name'];
				$path="docs/internship/".time()."_".$_SESSION['user_id']."_report_".$_FILES['internship_report']['name'];
				$tmp1=$_FILES['internship_certificate']['tmp_name'];
				$path1="docs/internship/".time()."_".$_SESSION['user_id']."_certificate_".$_FILES['internship_certificate']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				$file_upload=move_uploaded_file($tmp1, $path1);
				if($file_upload){
					
					$str_up="Insert into internship(internship_stu_id,internship_start_date,internship_end_date,internship_org,internship_super_name,internship_super_email,internship_super_number,internship_report_path,internship_certificate_path,internship_stu_current_year)values('".$_POST['stu_id']."','$sdate','$edate','".$_POST['internship_org']."','".$_POST['internship_super_name']."','".$_POST['internship_super_email']."','".$_POST['internship_super_number']."','$path','$path1','".$_POST['stu_year']."')";
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