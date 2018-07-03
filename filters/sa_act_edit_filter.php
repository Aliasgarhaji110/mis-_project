<?php  
	require_once '../db_connect.php';
?>

<div class="container">
	<div class="row">
		<h2 class="col-md-12" style="font-weight: bolder;">Please select Activity</h2>
		<div class="col-md-12" style="border: 1px solid" ></div>
		<div class="col-md-6" style="padding: 2%;min-height: 50px;" >
			<?php  
				$str= "select * from main_activity,add_type_activity where add_type_main_act_id=main_act_id and main_act_id=1";
				$str1= "select * from main_activity,add_type_activity where add_type_main_act_id=main_act_id and main_act_id=2";
			?>
			<h4 class="col-md-12 card">Extra-Curricular</h4>
			<div class="col-md-12 card align-center">
				<ul style="list-style: none">
					<?php  
						$result=mysqli_query($conn,$str)or die(mysqli_error($conn));
						if($result->num_rows>0):
							while($f_result=mysqli_fetch_assoc($result)):
					?>
					<li><a href="#" class="act_list_item" for="<?php echo($f_result['add_type_act_id']) ?>"><?php echo($f_result['add_type_act_name']) ?></a></li>
					<?php  
						endwhile;
						endif;
					?>
				</ul>
			</div>	
		</div>
		<div class="col-md-6" style="padding: 2%;min-height: 50px;" >
			<h4 class="col-md-12 card">Co-Curricular</h4>
			<div class="col-md-12 card">
				<ul style="list-style: none">
					<?php  
						$result1=mysqli_query($conn,$str1)or die(mysqli_error($conn));
						if($result1->num_rows>0):
							while($f_result1=mysqli_fetch_assoc($result1)):
					?>
					<li><a href="#" class="act_list_item" for="<?php echo($f_result1['add_type_act_id']) ?>"><?php echo($f_result1['add_type_act_name']) ?></a></li>
					<?php  
						endwhile;
						endif;
					?>
				</ul>
			</div>	
		</div>
	</div>
</div>