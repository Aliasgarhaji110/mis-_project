<?php  
	require_once '../db_connect.php';

	$s_date=strtotime($_POST['social_service_start_date']);
	$e_date=strtotime($_POST['social_service_end_date']);

	if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect student id");
	else if ($_POST['social_service_start_date']== NULL) echo $msg ="Select Start Date";
	else if (($e_date== NULL)||($s_date>$e_date)) echo $msg ="Select Proper End Date";
	else if ($_POST['social_service_description']== NULL) echo $msg ="Incorrect Description";
	else{
		$sdate=$_POST['social_service_start_date'];
		$edate=$_POST['social_service_end_date'];
		
		if(empty($_FILES['social_service_report']['name'])) echo "Report not Uploaded";
		if(empty($_FILES['social_service_certificate']['name'])) echo "Certificate not uploaded";
		else if($_FILES['social_service_report']['size']>1024*1024) echo "file size exceeded";
		else if($_FILES['social_service_certificate']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("application/pdf");//mime file types
			if((in_array($_FILES['social_service_certificate']['type'], $arr))&&(in_array($_FILES['social_service_report']['type'], $arr))){
				
				$tmp=$_FILES['social_service_report']['tmp_name'];
				$path="docs/social_service/".time()."_".$_SESSION['user_id']."_report_".$_FILES['social_service_report']['name'];
				$tmp1=$_FILES['social_service_certificate']['tmp_name'];
				$path1="docs/social_service/".time()."_".$_SESSION['user_id']."_certificate_".$_FILES['social_service_certificate']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				$file_upload=move_uploaded_file($tmp1, $path1);
				if($file_upload){
					
					$str_up="Insert into social_service(social_service_stu_id,social_service_start_date,social_service_end_date,social_service_org,social_service_incharge_name,social_service_incharge_email,social_service_incharge_number,social_service_report_path,social_service_certificate_path,social_service_description,social_service_stu_current_year)values('".$_POST['stu_id']."','$sdate','$edate','".$_POST['social_service_org']."','".$_POST['social_service_incharge_name']."','".$_POST['social_service_incharge_email']."','".$_POST['social_service_incharge_number']."','$path','$path1','".$_POST['social_service_description']."','".$_POST['stu_year']."')";
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