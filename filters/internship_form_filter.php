<?php  
	require_once '../db_connect.php';
?>
<div class="container">
	<div class="row">
   		<div class="col-md-12">
	     	<form id="internship_form" method="post" enctype="multipart/form-data" action="actions/internship_action.php">
			     
		    	<h4 class="col-md-12" style="font-weight:bolder;">Enter your Intership Details</h4>
		    	<hr>

		      	<div class="form-row col-md-12">	
			    	<div class="form-group col-md-6">
				        <label >Roll-no.</label>
				        <input type="text" class="form-control" name="stu_id" value="<?php echo($_SESSION['user_id']) ?>" readonly>
			    	</div>
			      	<div class="form-group col-md-6">
			          <label>Student Name</label>
			          <input type="text" class="form-control" name="stu_name" value="<?php echo($_SESSION['user_full_name']) ?>" readonly>
			    	</div>
			    	<div class="form-group col-md-6">
                        <label>Year during activity performed</label>
                        <select name="stu_year" class="form-control" required="true">
                            <option value="0">Please Select </option>
                            <option value="1">FE</option>
                            <option value="2">SE</option>
                            <option value="3">TE</option>
                            <option value="4">BE</option>
                        </select>
                    </div>
			    </div>	
		      	<div class="form-row col-md-12">	

			    	<div class="form-group col-md-6">
			       		<label>Select Start Date</label>
			       		<input type="date" class="form-control" name="internship_start_date" required="true">
			    	</div>
			    	<div class="form-group col-md-6">
			       		<label>Select End Date</label>
			       		<input type="date" class="form-control" name="internship_end_date" required="true">		
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
			       		<input type="text" class="form-control" name="internship_duration" placeholder="Eg: 2 " required="true">		
			    	</div> -->
			    </div>
		        <div class="form-group col-md-12">
			        <label>Enter Name of the Organization/Institute:</label>
			        <input type="text" class="form-control check_name" name="internship_org" placeholder="Enter the name of the organization">
			        <div class="invalid-feedback">Enter Name of the Organization/Institute</div>
		    	</div>
		        <div class="form-group col-md-12">
			        <label>Enter Name of Supervisor:</label>
			        <input type="text" class="form-control check_name" name="internship_super_name" placeholder="Enter name of Supervisor">
			        <div class="invalid-feedback">Enter Name of Supervisor</div>
		        </div>
		      	<div class="form-group col-md-12">
			        <label>Email id of Supervisor:</label>
			        <input type="email" class="form-control check_email" name="internship_super_email" placeholder="Enter email-id of Supervisor">
			        <div class="invalid-feedback">Enter Email of Supervisor</div>
		      	</div>
		      	<div class="form-group col-md-12">
			        <label>Contact number of Supervisor:</label>
			        <input type="text" class="form-control check_number" name="internship_super_number" placeholder="Enter number of Supervisor">
		        	<div class="invalid-feedback">Enter Contact Number of Supervisor</div>
			    </div>
		      	<div class="form-row col-md-12">	
					<div class="form-group col-md-6">
                            <label>Copy of Internship Certificate(Pdf format only)</label>
                            <input type="file" class="form-control" name="internship_certificate" required="true">
                    </div>
                    <div class="form-group col-md-6">
                            <label>Copy of Internship Report(Pdf format only)</label>
                            <input type="file" class="form-control" name="internship_report" required="true">
                    </div>
                </div>
                <input type="submit" id="internship_submit" value="submit">
			</form>
		</div>
	</div>
</div>