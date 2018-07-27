<?php  
	require_once '../db_connect.php';

	$s_date=strtotime($_POST['sports_start_date']);
	$e_date=strtotime($_POST['sports_end_date']);

	if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect student id");
	else if ($_POST['sports_start_date']== NULL) echo $msg ="Select Start Date";
	else if (($e_date== NULL)||($s_date>$e_date)) echo $msg ="Select Proper End Date";

	else{
		$sdate=$_POST['sports_start_date'];
		$edate=$_POST['sports_end_date'];
		
		// if(empty($_FILES['sports_report']['name'])) echo "Report not Uploaded";
		if(empty($_FILES['sports_certificate']['name'])) echo "Certificate not uploaded";
		else if($_FILES['sports_certificate']['size']>1024*1024) echo "file size exceeded";
		// else if($_FILES['sports_certificate']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("application/pdf");//mime file types
			if((in_array($_FILES['sports_certificate']['type'], $arr))){
				
				$tmp1=$_FILES['sports_certificate']['tmp_name'];
				// $tmp=$_FILES['sports_report']['tmp_name'];
				$path="docs/sports/".$_SESSION['user_id']."_report_".$_FILES['sports_certificate']['name'];
				//$tmp1=$_FILES['sports_certificate']['tmp_name'];
				// $path1="docs/sports/".timestamp()."_".$_SESSION['user_id']."_certificate_".$_FILES['sports_certificate']['name'];
				// // $file_upload=move_uploaded_file($tmp, $path);
				$file_upload=move_uploaded_file($tmp1, $path);
				if($file_upload){
					
					$str_up="Insert into sports(sports_stu_id,sports_start_date,sports_end_date,sports_name,sports_description,sports_certificate_path,sports_stu_current_year)values('".$_POST['stu_id']."','$sdate','$edate','".$_POST['sports_name']."','".$_POST['sports_description']."','$path','".$_POST['stu_year']."')";
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