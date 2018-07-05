<?php  
	require_once '../db_connect.php';

	$s_date=strtotime($_POST['tech_council_start_date']);
	$e_date=strtotime($_POST['tech_council_end_date']);

	if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect student id");
	else if ($_POST['tech_council_start_date']== NULL) echo $msg ="Select Start Date";
	else if (($e_date== NULL)||($s_date>$e_date)) echo $msg ="Select Proper End Date";

	else{
		$sdate=$_POST['tech_council_start_date'];
		$edate=$_POST['tech_council_end_date'];
		
		// if(empty($_FILES['tech_council_report']['name'])) echo "Report not Uploaded";
		if(empty($_FILES['tech_council_certificate']['name'])) echo "Certificate not uploaded";
		else if($_FILES['tech_council_certificate']['size']>1024*1024) echo "file size exceeded";
		// else if($_FILES['tech_council_certificate']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("application/pdf");//mime file types
			if((in_array($_FILES['tech_council_certificate']['type'], $arr))){
				
				// $tmp=$_FILES['tech_council_report']['tmp_name'];
				// $path="docs/tech_council/".$_SESSION['user_id']."_report_".$_FILES['tech_council_report']['name'];
				$tmp1=$_FILES['tech_council_certificate']['tmp_name'];
				$path1="docs/tech_council/".$_SESSION['user_id']."_certificate_".$_FILES['tech_council_certificate']['name'];
				// $file_upload=move_uploaded_file($tmp, $path);
				$file_upload=move_uploaded_file($tmp1, $path1);
				if($file_upload){
					
					$str_up="Insert into tech_council(tech_council_stu_id,tech_council_start_date,tech_council_end_date,tech_council_name,tech_council_position,tech_council_description,tech_council_certificate_path)values('".$_POST['stu_id']."','$sdate','$edate','".$_POST['tech_council_name']."','".$_POST['tech_council_position']."','".$_POST['tech_council_description']."','$path1')";
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