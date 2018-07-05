<?php  
	require_once '../db_connect.php';
?>

<div class="container">
  <div class="row">
  	<!-- <div class=col-md-3></div> -->
    <div class="col-md-12">
    <?php  
    	$cre_res=mysqli_query($conn,"select * from students where stu_id = '".$_SESSION['user_id']."'") or die(mysqli_error($conn));
			$cre_ans=mysqli_fetch_assoc($cre_res);
    ?>
    	<form>
    		<div class="row">
    			<h4 class="col-md-12" style="font-weight:bolder;">Personal Details</h4>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-9">
			    		<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-3">Roll no :</label>	
			    					<input class="form-control col-md-9" type="text" class="form-control" value="<?php echo($cre_ans['stu_id']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-3">Email :</label>	
			    					<input class="form-control col-md-9" type="text" class="form-control" value="<?php echo($cre_ans['stu_email']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-3">Name :</label>	
			    					<input class="form-control col-md-3" type="text" class="form-control" value="<?php echo($cre_ans['stu_fname']) ?>" disabled>
			    					<input class="form-control col-md-3" type="text" class="form-control" value="<?php echo($cre_ans['stu_mname']) ?>" disabled>
			    					<input class="form-control col-md-3" type="text" class="form-control" value="<?php echo($cre_ans['stu_lname']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    	<div class="col-md-3">
			    		<img src="<?php echo("actions/".$cre_ans['stu_img_path']) ?>" width="150px" height="150px" >
			    	</div>
		    	</div>
		    

						


		    	<div class="row">
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">DOB :</label>	
			    					<input class="form-control col-md-7" type="date" class="form-control" value="<?php echo($cre_ans['stu_dob']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Gender :</label>	
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php switch ($cre_ans['stu_gender']) {
			    						case '1':
			    							echo("Male");
			    							break;
			    						case '2':
			    							echo("Female");
			    							break;
			    						case '3':
			    							echo("Others");
			    							break;
			    					} ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Year :</label>	
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php switch ($cre_ans['stu_year']) {
			    						case '1':
			    							echo("FE");
			    							break;
			    						case '2':
			    							echo("SE");
			    							break;
			    						case '3':
			    							echo("TE");
			    							break;
			    						case '4':
			    							echo("BE");
			    							break;
			    					} ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Branch :</label>	
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php switch ($cre_ans['stu_branch']) {
			    						case '1':
			    							echo("COMPS");
			    							break;
			    						case '2':
			    							echo("IT");
			    							break;
			    						case '3':
			    							echo("EXTC");
			    							break;
			    						case '4':
			    							echo("ETRX");
			    							break;
			    						case '5':
			    							echo("MECH");
			    							break;
			    					} ?>" disabled >
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Division :</label>	
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_division']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Blood Group :</label>	
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_blood']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    	</div>
		    	<br>
     			<h4 class="col-md-12" style="font-weight:bolder;">Address Details</h4>
      			<hr>
      			<div class="row">
		    		<div class="col-md-12">
		    			<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Flat no/house no/bldg :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_add1']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-md-12">
			    		<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Street/Area/Locality :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_add_locality']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">City :</label>	
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_add_city']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="col-md-12">
			    			<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Pin Code :</label>	
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_add_pincode']) ?>" disabled>
			    				</div>
			    			</div>
			    		</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">State :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_add_state']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-md-6">
		    			<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">District :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_add_district']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
		    	</div>
		    	<h4 class="col-md-12" style="font-weight:bolder;">Parents Details</h4>
      			<hr>
      			<div class="row">
		    		<div class="col-md-12">
		    			<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Father's name :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_father_name']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-md-12">
			    		<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Father's number :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_father_number']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-md-12">
			    		<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Father's email :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_father_email']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-md-12">
			    		<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Mother's name :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_mother_name']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-md-12">
			    		<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Mother's number :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_mother_number']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-md-12">
			    		<div class="col-md-12">
				    		<div class="form-group">
			    				<div class="row form-inline">
			    					<label class="form-control col-md-5">Mother's email :</label>
			    					<input class="form-control col-md-7" type="text" class="form-control" value="<?php echo($cre_ans['stu_mother_email']) ?>" disabled>
			    				</div>
				    		</div>
				    	</div>
			    	</div>
		    	</div>
    		</div>
    	</form>
    </div>
  </div>
</div>