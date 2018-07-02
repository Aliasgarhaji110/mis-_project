<?php  
    require_once 'db_connect.php';
    $t_date=strtotime($_POST['temp_stu_date']);
    $f_date=date('y-m-d',$t_date);
    // var_dump($f_date);


    $ent=mysqli_query($conn,"insert into temp(t_date) values ('$f_date')") or die(mysqli_error($conn));
	if($ent){
		echo("ok");
	}
?>