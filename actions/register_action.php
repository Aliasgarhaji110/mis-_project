<?php  
	require_once '../db_connect.php';

	if(!preg_match("/^[1-9][0-9]{6}$/", $_POST['stu_id']))echo("incorrect id");
	else if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@somaiya.edu$/",$_POST['stu_email'])) echo $msg = "pls enter valid email";

	else if (!preg_match("/^[a-zA-Z1-9][a-zA-Z0-9]{6,15}$/",$_POST['stu_password'])) echo $msg = "Please enter valid password";
	else if ($_POST['stu_cpassword']!=$_POST['stu_password']) echo $msg = "Please enter valid confirm password";
	else if (($_POST['stu_fname']== NULL)||($_POST['stu_mname']== NULL)||($_POST['stu_lname'] == NULL)) echo $msg ="Please fill all details";
	else if ($_POST['stu_dob']= NULL) echo $msg ="Select Birth Date";
	else if (!preg_match("/^([ABO])[+-]$/",$_POST['stu_blood'])) echo("Please Enter Bloodgroup");
	else if (empty($_POST['stu_gender'])) echo("Please Select Gender");
	else if (empty($_POST['stu_year'])) echo("Please Select Year");
	else if (empty($_POST['stu_branch'])) echo("Please Select Branch");
	else if(!preg_match("/^[A-K]$/",$_POST['stu_division'])) echo("Please Enter Division");
	else if (($_POST['stu_add1']== NULL)||($_POST['stu_add_locality']== NULL)||($_POST['stu_add_city']== NULL)||($_POST['stu_add_state']== NULL)) echo $msg ="Please fill all details";
	else if(!preg_match("/^[1-9][0-9]{5}$/", $_POST['stu_add_pincode']))echo("Incorrect pincode");
	else if (empty($_POST['stu_add_country'])) echo("Please Select Country");
	else if (!preg_match("/^[a-zA-Z][a-zA-Z ]{1,}$/",$_POST['stu_father_name'])) echo $msg = "Please enter valid name";
	else if (!preg_match("/^[1-9][0-9]{9}$/",$_POST['stu_father_number'])) echo $msg = "Please enter valid contact number";
	else if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/",$_POST['stu_father_email'])) echo $msg = "Please enter valid email";
	else if (!preg_match("/^[a-zA-Z][a-zA-Z ]{1,}$/",$_POST['stu_mother_name'])) echo $msg = "Please enter valid name";
	else if (!preg_match("/^[1-9][0-9]{9}$/",$_POST['stu_mother_number'])) echo $msg = "Please enter valid contact number";
	else if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z0-9]{2,})(\.[a-zA-Z]{2,})?$/",$_POST['stu_mother_email'])) echo $msg = "Please enter valid email";

	else{
		$stuid=$_POST['stu_id'];
		$password=sha1($_POST['stu_password']);

		$str_chk="select count(*) as cnt from students where stu_id = '$stuid'";
		// echo($str_chk);

		$res_cnt= mysqli_query($conn,$str_chk) or die(mysqli_error($conn));
		// print_r($res_cnt);
		$final_cnt=mysqli_fetch_assoc($res_cnt);
		

		if($final_cnt['cnt']>0){
			echo "User Already Registered.";
		}
		else{
		if(empty($_FILES['stu_img']['name'])) echo "pls select a Image";
		else if($_FILES['stu_img']['size']>1024*1024) echo "file size exceeded";
		else{
			$arr= array("image/jpeg","image/pjpeg","image/png","image/gif");//mime file types
			if(in_array($_FILES['stu_img']['type'], $arr)){
				$tmp=$_FILES['stu_img']['tmp_name'];
				$path="student_img/".$_FILES['stu_img']['name'];
				$file_upload=move_uploaded_file($tmp, $path);
				if($file_upload){
					
					$str_up="Insert into students(stu_id,stu_email,stu_password,stu_fname,stu_mname,stu_lname,stu_dob,stu_gender,stu_blood,stu_year,stu_division,stu_branch,stu_add1,stu_add_locality,stu_add_city,stu_add_state,stu_add_pincode,stu_add_country,stu_father_name,stu_father_number,stu_father_email,stu_mother_name,stu_mother_number,stu_mother_email,stu_img)values('$stuid','".$_POST['stu_email']."','$password','".$_POST['stu_fname']."','".$_POST['stu_mname']."','".$_POST['stu_lname']."','".$_POST['stu_dob']."',,'".$_POST['stu_gender']."','".$_POST['stu_blood']."','".$_POST['stu_year']."','".$_POST['stu_division']."','".$_POST['stu_branch']."','".$_POST['stu_add1']."','".$_POST['stu_add_locality']."','".$_POST['stu_add_city']."','".$_POST['stu_add_state']."','".$_POST['stu_add_pincode']."','".$_POST['stu_add_country']."','".$_POST['stu_father_name']."','".$_POST['stu_father_number']."','".$_POST['stu_father_email']."',,'".$_POST['stu_mother_name']."','".$_POST['stu_mother_number']."','".$_POST['stu_mother_email']."','$path')";
					$ans=mysqli_query($conn,$str_up)or die(mysqli_error($conn));
					if($ans){
						echo("data entered");
					}

				}
				
			}
			else{
				echo("error in file upload");
			}
		}
	}
	}
?>