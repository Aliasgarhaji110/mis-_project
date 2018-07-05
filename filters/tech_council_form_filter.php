<?php  
	require_once '../db_connect.php';
?>
<div class="container">
	<div class="row">
   		<div class="col-md-12">
	     	<form id="tech_council_form" method="post" enctype="multipart/form-data" action="actions/tech_council_action.php">
			     
		    	<h4 class="col-md-12" style="font-weight:bolder;">Enter your Technical Council Details</h4>
		    	<hr>

		      	<div class="form-row col-md-12">	
			    	<div class="form-group col-md-6">
				        <label >Roll-no.</label>
				        <input type="text" class="form-control" name="stu_id" value="<?php echo($_SESSION['user_id']) ?>" >
			    	</div>
			      	<div class="form-group col-md-6">
			          <label>Student Name</label>
			          <input type="text" class="form-control" name="stu_name" value="<?php echo($_SESSION['user_full_name']) ?>" disabled>
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Select Start Date</label>
			       		<input type="date" class="form-control" name="tech_council_start_date" required="true">
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Select End Date</label>
			       		<input type="date" class="form-control" name="tech_council_end_date" required="true">		
			    	</div>
			    	<!-- <div class="form-group col-md-6">
			          <label>Select Activity Type</label>
			          <select name="add_type_act_id" class="form-control" required="true">
			        	<option value="0">Please select </option>
			        	<option value="1">Extra-Curricular</option>
			        	<option value="2">Co-Curricular</option>
			       	  </select>
			    	</div> -->
			    	<!-- <div class="form-group col-md-6">
			       		<label>Enter Duration in days</label>
			       		<input type="text" class="form-control" name="tech_council_duration" placeholder="Eg: 2 " required="true">		
			    	</div> -->
			    </div>
		        <div class="form-group col-md-12">
			        <label>Enter Name of the Technical Council:</label>
			        <input type="text" class="form-control " name="tech_council_name" placeholder="Enter the name of the Council">
			        <div class="invalid-feedback">Enter Name of the Council.</div>
		    	</div>
		        <div class="form-group col-md-12">
			        <label>Mention your Position of Responsibility:</label>
			        <input type="text" class="form-control" name="tech_council_position" placeholder="Enter your Position of Responsibility">
			        <div class="invalid-feedback">Mention your Position of Responsibility.</div>
		        </div>
		      	<!-- <div class="form-group col-md-12">
			        <label>Email id of Supervisor:</label>
			        <input type="email" class="form-control check_email" name="tech_council_super_email" placeholder="Enter email-id of Supervisor">
			        <div class="invalid-feedback">Enter Email of Supervisor</div>
		      	</div> -->
		      	<div class="form-group col-md-12">
			        <label>Describe your role in the team:</label>
			        <!-- <input type="text" class="form-control" name="tech_council_description" placeholder="Enter your Position of Responsibility"> -->
			        <textarea class="form-control" rows="4" name="tech_council_description" placeholder="Describe your role in the team"></textarea>
		        	<div class="invalid-feedback">Describe your role in the team:</div>
			    </div>
		      	<div class="form-row col-md-12">	
					<div class="form-group col-md-6">
                            <label>Copy of Tech Council Certificate(Pdf format only)</label>
                            <input type="file" class="form-control" name="tech_council_certificate" required="true">
                    </div>
                    <!-- <div class="form-group col-md-6">
                            <label>Copy of Tech Council Report(Pdf format only)</label>
                            <input type="file" class="form-control" name="tech_council_report" required="true">
                    </div> -->
                </div>
                <input type="submit" id="tech_council_submit" value="submit">
			</form>
		</div>
	</div>
</div>